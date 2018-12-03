<?php
class Positions extends Controller{
	protected function index(){
		$viewmodel = new PositionsModel();
		$this->ReturnView($viewmodel->request(), true);
	}
}
