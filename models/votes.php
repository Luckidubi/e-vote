<?php
class votesModel extends Models{
	public function request(){
		$this->query('SELECT * from dvotes');
		$rows = $this->resultSet();
		return $rows;
	}

	
}