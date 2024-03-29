<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\CodeIgniter\View\Table;

use App\Models\RegistrationModel;
use App\Models\RegistrationMetaModel;
use App\Models\CheckinModel;
use CodeIgniter\View\Table as ViewTable;

class DashboardController extends BaseController
{

    // This function serves all the all_records view
    public function allRecords()
    {


        echo view('dashboard_templates/header');
        echo view('dashboard/main');
        echo view('dashboard_templates/footer');
    }

    // Dummy Method. Not in use
    public function checkIn()
    {
        echo "Heloo world!";
    }

    public function registered()
    {

        $db = \config\Database::connect(); // Get DB
        $builder = $db->table('registration');

        $query = $builder->get();
        $res['result'] = $query->getResultArray();

        echo view('dashboard_templates/header');
        echo view('dashboard/registered', $res);
        echo view('dashboard_templates/footer');
    }

    public function checkedIn()
    {

        $db = \config\Database::connect(); // Get DB
        $builder = $db->table('checkin');

        $query = $builder->get();
        $res['result'] = $query->getResultArray();

        // echo "<pre>";

        // print_r($res);
        
        echo view('dashboard_templates/header');
        echo view('dashboard/checked_in', $res);
        echo view('dashboard_templates/footer');
    }
}
