<?php
class Voters extends Controller{
	protected function index(){
		$viewmodel = new votersModel();
		$this->ReturnView($viewmodel->request(), true);
	}

	protected function register(){
		$viewmodel = new votersModel();
		$this->ReturnView($viewmodel->register(), true);
	}

	protected function login(){
		$viewmodel = new votersModel();
		$this->ReturnView($viewmodel->login(), true);
	}

	protected function logout(){
		unset($_SESSION['logged_in']);
		unset($_SESSION['voter_id']);
		session_destroy();
		header('Location: '. ROOT_URL); 
	}
}