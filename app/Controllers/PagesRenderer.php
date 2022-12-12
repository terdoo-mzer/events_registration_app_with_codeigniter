<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PagesRenderer extends BaseController
{
   
    
    // Register home page
    public function index() {
        echo view('templates/header');
        echo view('user/index');
        echo view('templates/footer');
    }

    // Setup registration page
    public function formPage() {

        helper(['form']);

        echo view('templates/header');
        echo view('user/register');
        echo view('templates/footer');
    }
}

