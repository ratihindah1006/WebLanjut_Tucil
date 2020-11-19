<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('Home');
	}

	public function login()
	{
		return view('Login');
	}

	public function verif()
	{
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        if ($email=="ratihindah@email.com" && $password=="ratih123") {
            return redirect()->to('/Home'); 
        }
        else {
            return redirect()->to('/Login'); 
		}
		
	}

	public function about()
	{
		return view('About');
	}

	public function register()
	{
		return view('Register');
	}

	public function admin()
	{
		return view('Admin');
	}

	public function berita1()
	{
		return view('Berita1');
	}

	public function berita2()
	{
		return view('Berita2');
	}

	public function berita3()
	{
		return view('Berita3');
	}







	

}
