<?php
class Votes extends Controller{
	protected function index(){
		$viewmodel = new votesModel();
		$this->ReturnView($viewmodel->request(), true);
	}

	protected function add(){
		$viewmodel = new votesModel();
		$this->ReturnView($viewmodel->add(), true);
	}
}