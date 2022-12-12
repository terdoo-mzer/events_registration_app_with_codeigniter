<?php

namespace App\Controllers;

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

                if($model->insert($primaryData)) {
                    // Get the primary key of last inserted data
                    $pk = $model->getInsertID();

                    if($pk) {

                        $secData = [
                            'attendee_ID' => $pk,
                            'residence_address' => $this->request->getVar('residence_address'),
                            'city_of_residence' => $this->request->getVar('city_of_residence'),
                            'state_of_residence' => $this->request->getVar('state_of_residence'),
                            'job_description' => $this->request->getVar('job_description'),
                            'experience_level' => $this->request->getVar('experience_level')
                        ];

                        $regMetaModel->insert($secData);

                        $response = [
                            'status' => 200,
                            'message' => 'You have been succesfully registered for this event. Please check your email
                                             for more details ',
                            'error' => false,
                            'data' => []
                        ];

                        $attendeeName = $primaryData['first_name'];
                        $to = $primaryData['email'];
                        $attendee_ID = $pk;
                        $subject = 'Techies Event Registration';
                        $message = "<pre>
                                           Hello $attendeeName,
                                           
                                           You have successfully registered for the Techies Event 2022.

                                           Here is your reservation ID $attendee_ID.

                                           You will be required to present the ID at the venue to be checked in as an attendee.
                                    </pre>";
                       

                        // $this->sendMail($to, $attendee_ID, $message, $subject);
                        $this->sendMail();
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
    function sendMail() { 
        
        $email = \Config\Services::email();
        $email->setTo('mzerterdoo6@gmail.com');
        $email->setFrom('mzeremmanuel@gmail.com', 'Techies Event Registration');
        
        $email->setSubject("CodeIgniter Test");
        $email->setMessage("I am testing Codeigniter");
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
