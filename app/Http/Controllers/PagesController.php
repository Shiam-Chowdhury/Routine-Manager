<?php

namespace App\http\Controllers;

class PagesController extends Controller{
	public function getIndex() {
		return view('pages.welcome');
	}

	public function getAbout() {
		$first = 'shiam';
		$last = 'chowdhury';
		$fullname = $first . " " . $last ;
		$email = 'shiam.sust@gmail.com';
		$data = [];
		$data['fullname'] = $fullname;
		$data['email'] = $email;
 		return view('pages.about')->withData($data);
	}

	public function getLogin() {
		return view('pages.login');
	}

	public function getRegister(){
		return view('pages.register');
	}



}