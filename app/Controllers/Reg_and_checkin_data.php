<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\RegistrationModel;
use App\Models\RegistrationMetaModel;
use App\Models\CheckinModel;

class Reg_and_checkin_data extends ResourceController
{
    public function retrieveData()
    {
        $db = \config\Database::connect(); // Get DB
        $checkin_builder = $db->table('checkin');
        $regist_builder = $db->table('registration');
        $reg_meta_builder = $db->table('reg_meta');
        $response = [];

        // $regModel = new RegistrationModel();
        // $regMetaModel = new RegistrationMetaModel();
        // $checkInModel = new CheckinModel();

        echo $number_registered = $regist_builder->countAll();    
        echo $number_checked_in = $checkin_builder->countAll();

        $response = [
            'status' => 200,
            'message' => "Query Successful!",
            'error' => false,
            'data' => [
                'number_registered' => $number_registered,
                'number_checkedin' => $number_checked_in
            ]
        ];
        


        return $this->respondCreated($response);
    }
}
