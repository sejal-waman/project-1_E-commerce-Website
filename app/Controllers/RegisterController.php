<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RegisterController extends BaseController
{
    private $detail=" ";
    public function __construct() {
        helper(['url', 'form']);
        $this->session = \Config\Services::session();
    }

    public function try()
    {
        return view('Commerce/try');
    }
    public function register()
    {
        return view('Commerce/register');
    }
    public function register_insert()
    {
       
       $data=[
        'username'=>$this->request->getVar('username'),
        'email'=>$this->request->getVar('email'),
        'password'=>$this->request->getVar('password'),

         ];
    
       dd($data);
       $model = new \App\Models\RegisterModel();
       $Model = model('RegisterModel');
       $model->insert($data);
       return $this->response->redirect(site_url('login'));
    }


    public function login()
    {
        return view('Commerce/login');
    }


    public function login_dashboard()
    {
        return view('Commerce/login_dashboard');
    }

   

    public function check_login_credentials()
    { 
        
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password'); 
            $model = new \App\Models\CheckLoginModel();
            $username_exists = $model->checkIfExists($username,$password);
            
            if($username_exists)
            {
                ?>
                <script> alert("login successful")</script>
                
                 <?php
                /* $this->session->set([
                    'username' => $username,
                    'isLoggedIn' => true
                ]);
    
               $this->session->set([
                    'password' => $password,
                    'isLoggedIn' => true
                ]); */
    
                return view('Commerce/dashboard');
            }
            else
            {
                ?>
                <script> alert("Incorrect username or password")</script>
                <?php 
                
                return view('Commerce/login');
            }
        }
    

   
    
    public function dashboard()
    {
        return view('Commerce/dashboard');
    }

    public function insertmessage()
    {
        $data=[
            'name'=>$this->request->getVar('name'),
            'email'=>$this->request->getVar('email'),
            'phone_no'=>$this->request->getVar('phone_no'),
            'message'=>$this->request->getVar('message'),
        ];

       // print_r($data);
        $model = new \App\Models\MessageModel();
        $model->insert($data);
        return $this->response->redirect(site_url('dashboard'));
    }


}
