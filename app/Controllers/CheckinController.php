<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\RegistrationModel;
use App\Models\RegistrationMetaModel;
use App\Models\CheckinModel;

class CheckinController extends ResourceController
{
    // Setup registration page
    public function checkin() {

        helper(['form']);

        $db = \config\Database::connect(); // Get DB
        $builder = $db->table('checkin');

        $regModel = new RegistrationModel();
        $regMetaModel = new RegistrationMetaModel();
        $checkInModel = new CheckinModel();

        if($_SERVER['REQUEST_METHOD'] === "POST") {

            $rules = [
                'attendeeId_input' => 'required|min_length[3]|max_length[3]|is_unique[checkin.attendee_ID]',
            ];

            if(! $this->validate($rules)) {
                $response = [
                    'status' => 400,
                    'message' => $this->validator->getErrors(),
                    'error' => true,
                    'data' => []
                ];
            } else {

                // Retreieve user data here
                $attendeeId_input = $this->request->getVar('attendeeId_input');

                // Check the registration table to find the user above with the submitted
                $attd_reg = $regModel->find($attendeeId_input);

                // if user exists then do something
                if($attd_reg) {
                    // First retrieve the following details of that attendee
                    $email = $attd_reg['email'];
                    $phone = $attd_reg['phone'];
                    $first_name =$attd_reg['first_name'];
                    $last_name = $attd_reg['last_name'];
                    $attendee_id = $attd_reg['attendee_ID'];

                    // Then Check to see if attendee ID is already logged in the checkin table
                    // If already checked in then dont save into checkin table. Else save.
                    // $checkedAttendee =$builder->select('attendee_ID')->where('attendee_ID', $attendeeId_input);
                    $checkedAttendee = $checkInModel->find($attendeeId_input);
                    print_r($checkedAttendee);

                    // $checkedID = null;
                    if($checkedAttendee) {

                        echo "Sorry this ID is already checked In";

                    } else {

                        $data = [
                            'attendee_ID' => $attendee_id,
                            'first_name' => $first_name,
                            'last_name' => $last_name,
                            'email' => $email,
                            'phone' => $phone
                        ];

                        // Insert data
                        $checkInModel->insert($data);
                        echo "This attendee is checkedIn successfuly!";
                    }

                } else {
                    echo 'Sorry this attendee is not registered';
                }
                // echo "<pre>";
                // $response = [
                //     'status' => 200,
                //     'message' => 'Yayy',
                //     'error' => false,
                //     'data' => $attd_reg
                // ];

            }

        }

        // return $this->respondCreated($response);

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
