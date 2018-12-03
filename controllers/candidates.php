<?php
class Candidates extends Controller{
	protected function index(){

			
		
		$viewmodel = new CandidatesModel();
		$this->ReturnView($viewmodel->request(), true);
	}

	protected function register(){
		$viewmodel = new CandidatesModel();
		$this->ReturnView($viewmodel->register(), true);
	}

	protected function login(){
		$viewmodel = new CandidatesModel();
		$this->ReturnView($viewmodel->login(), true);
	}

	protected function getCandidate(){
		return;
	}
}
