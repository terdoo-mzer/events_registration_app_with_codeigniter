<?php

namespace App\Controllers;

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

use CodeIgniter\RESTful\ResourceController;

use App\Models\RegistrationModel;
use App\Models\RegistrationMetaModel;

class RegistrationController extends ResourceController
{
    // Setup registration page
    public function register() {
        helper(['form']);
        $model = new RegistrationModel();
        $regMetaModel = new RegistrationMetaModel();

        if($_SERVER['REQUEST_METHOD'] === "POST") {

            $rules = [
                'first_name' => 'required|min_length[1]|max_length[50]',
                'middle_name' => 'required|min_length[1]|max_length[20]',
                'last_name' => 'required|min_length[1]|max_length[50]',
                'phone' => 'required|min_length[11]|max_length[11]|is_unique[registration.phone]',
                'email' => 'required|min_length[5]|max_length[30]|valid_email|is_unique[registration.email]',
                'residence_address' => 'required|min_length[5]|max_length[100]',
                'city_of_residence' => 'required|min_length[5]|max_length[100]',
                'state_of_residence' => 'required|min_length[2]|max_length[50]',
                'job_description' => 'required|min_length[2]|max_length[50]',
                'experience_level' => 'required|min_length[2]|max_length[50]',
            ];

            if(! $this->validate($rules)) {
                $response = [
                    'status' => 400,
                    'message' => $this->validator->getErrors(),
                    'error' => true,
                    'data' => []
                ];
            } else {

                $primaryData = [
                    'first_name' => $this->request->getVar('first_name'),
                    'middle_name' => $this->request->getVar('middle_name'),
                    'last_name' => $this->request->getVar('last_name'),
                    'phone' => $this->request->getVar('phone'),
                    'email' => $this->request->getVar('email'),
                    // 'email' => $this->request->getVar('email'),
                    // 'profile_image' => '/images/'.$newName,
                ];

                // If inserting in primary table is successful...
                if($model->insert($primaryData)) {

                    // Get the primary key of last inserted data
                    $pk = $model->getInsertID();

                    if($pk) {
                        //If the insert was sucessful, then get the ID and check as in the condition
                        // above
                        $secData = [
                            'attendee_ID' => $pk,
                            'residence_address' => $this->request->getVar('residence_address'),
                            'city_of_residence' => $this->request->getVar('city_of_residence'),
                            'state_of_residence' => $this->request->getVar('state_of_residence'),
                            'job_description' => $this->request->getVar('job_description'),
                            'experience_level' => $this->request->getVar('experience_level')
                        ];

                        // Insert into meta table
                        $regMetaModel->insert($secData);

                        $attendeeName = $primaryData['first_name'];
                        $to = $primaryData['email'];
                        $attendee_ID = $pk;
                        $subject = 'Techies Event';
                        $message = "<pre>
                                           Hello $attendeeName,
                                           
                                           You have successfully registered for the Techies Event 2023.

                                           Here is your event <b>ID: $attendee_ID</b>.

                                           You will be required to present the ID at the venue to be checked in.

                                           Good luck!
                                    </pre>";


                        $mail = new PHPMailer();
                        $mail->Encoding = "base64";
                        $mail->SMTPAuth = true;
                        $mail->Host = "smtp.zeptomail.com";
                        // $mail->Port = 587;
                        $mail->Port = 465;
                        $mail->Username = "emailapikey";
                        $mail->Password = 'wSsVR61x8h7zXKt9lT2pLusxnF1WVQn+Ekov0QCiviWpGfvHp8c8xBbKUVSmSvEcGDFsF2cRo7IunkpWhmcI2Y8swlFUCSiF9mqRe1U4J3x17qnvhDzNX2xYlxaIJYMKxw5okmdjF8hu';
                        // $mail->SMTPSecure = 'TLS';
                        $mail->SMTPSecure = 'ssl';
                        $mail->isSMTP();
                        $mail->IsHTML(true);
                        $mail->CharSet = "UTF-8";
                        $mail->From = "noreply@squash-it.com.ng";
                        $mail->addAddress($to);
                        $mail->Body = $message;
                        $mail->Subject = $subject;
                        $mail->SMTPDebug = 1;
                        $mail->Debugoutput = function ($str, $level) {
                            echo "debug level $level; message: $str";
                            echo "<br>";
                            
                        };
                        $mail->Send();
                        // if (!$mail->Send()) {
                        //     echo "Mail sending failed";
                        // } else {
                        //     echo "Successfully sent";
                        // }
                       

                        // $this->sendMail($to, $message, $subject);

                        $response = [
                            'status' => 200,
                            'message' => 'You have been succesfully registered for this event. Please check your email
                                             for more details ',
                            'error' => false,
                            'data' => []
                        ];

                      
                        // $this->sendMail();
                    }
                } else {
                    $response = [
                        'status' => 500,
                        'message' => 'Oops! Fialed to register, please refresh your browser and try again!',
                        'error' => false,
                        'data' => []
                    ];
                }


            }

        }

        return $this->respondCreated($response);

    }

    // Create a function to send mail containing participant attendance ID
    function sendMail($to, $message, $subject) { 
        
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('mzeremmanuel@gmail.com', 'Techies Event Registration');
        
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) 
		{
            echo 'Email successfully sent';
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
}
