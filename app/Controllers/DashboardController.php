<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    // This function serves all the all_records view
    public function allRecords()
    {
        echo view('dashboard_templates/header');
        echo view('dashboard_templates/sidebar');
        echo view('dashboard/all_records');
    }
    public function checkIn()
    {
        echo "Heloo world!";
    }

    public function registered() {
        echo view('dashboard_templates/header');
        echo view('dashboard_templates/sidebar');
        echo view('dashboard/registered');
    }

    public function checkedIn() {
        echo view('dashboard_templates/header');
        echo view('dashboard_templates/sidebar');
        echo view('dashboard/checked_in');
    }
}
