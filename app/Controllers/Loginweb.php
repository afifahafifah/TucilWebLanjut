<?php namespace App\Controllers;

class Loginweb extends BaseController
{
	public function login()
	{
		return view ('gate/login');
    }
    
    public function fungsi_login(){
        $email= $this->request->getVar('email');
        $password= $this->request->getVar('password');
        if($email=="afifah@gmail.com"&&$password=="admin")
        {
            return redirect()->to('/');
        }else{
            return redirect()->to('/Loginweb');
        }
    }
    
    public function register(){
        return view('Gate/register');
    }
    public function admin() {
        return view('Gate/admin');
    }
}