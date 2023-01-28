<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{   
    // Render login form
    public function index()
    {
        helper(['form']);
        echo view('admin/login');
    }

    // Render Signup form
    public function signup()
    {
        // Admin Signup Form
        helper(['form']);
        $data = [];
        echo view('admin/signup', $data);
    }

    // Handle signup validation
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/auth/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('admin/signup', $data);
        }
          
    }

    // Login logic
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                
                return redirect()->to('/dashboard/main'); // remember to check this
            
            }else{
                $session->setFlashdata('msg', 'Password or email is incorrect.');
                return redirect()->to('/auth/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('auth/login');
        }
    }


    // Logout Logic
    public function logout() {
        session()->destroy();
        return redirect()->to('auth/login');
    }
}
