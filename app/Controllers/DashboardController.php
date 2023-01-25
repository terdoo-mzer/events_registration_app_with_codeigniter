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
    public function printTable()
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
        echo view('dashboard_templates/header');
        echo view('dashboard/registered');
        echo view('dashboard_templates/footer');
    }

    public function checkedIn()
    {

        $table = new \CodeIgniter\View\Table();
        $db = \config\Database::connect(); // Get DB

        $query = $db->query('SELECT * FROM checkedIn');

        $table->setHeading('Attendee ID', 'First Name', 'Last Name', 'Email', 'Phone');


        $template = [
            'table_open' => '<table border="0" cellpadding="4" cellspacing="0">',

            'thead_open'  => '<thead>',
            'thead_close' => '</thead>',

            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',

            'tfoot_open'  => '<tfoot>',
            'tfoot_close' => '</tfoot>',

            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',

            'tbody_open'  => '<tbody>',
            'tbody_close' => '</tbody>',

            'row_start'  => '<tr>',
            'row_end'    => '</tr>',
            'cell_start' => '<td>',
            'cell_end'   => '</td>',

            'row_alt_start'  => '<tr>',
            'row_alt_end'    => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end'   => '</td>',

            'table_close' => '</table>',
        ];

        $table->setTemplate($template);

        // $checkedIn = new CheckinModel();


        // $printTable = $checkedIn->findAll();

        echo $table->generate($query);

        echo view('dashboard_templates/header');
        echo view('dashboard/checked_in');
        echo view('dashboard_templates/footer');
    }
}
