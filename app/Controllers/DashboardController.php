<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    // This function serves all the all_records view
    public function allRecords()
    {
        echo view('dashboard_templates/header');
        echo view('dashboard/main');
        echo view('dashboard_templates/footer');
    }
    public function checkIn()
    {
        echo "Heloo world!";
    }

    public function registered() {
        echo view('dashboard_templates/header');
        echo view('dashboard/registered');
        echo view('dashboard_templates/footer');
    }

    public function checkedIn() {
        echo view('dashboard_templates/header');
        echo view('dashboard/checked_in');
        echo view('dashboard_templates/footer');
    }
}
