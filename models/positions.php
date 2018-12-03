<?php
class PositionsModel extends Models{
	public function request(){
		$this->query('SELECT * from positions');
		$rows = $this->resultSet();
		return $rows;
	}
}