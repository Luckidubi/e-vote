<?php
class CandidatesModel extends Models
{
	public function request(){
		$this->query('SELECT * from candidates');
		$rows = $this->resultSet();
		return $rows;
	}

	public function getCandidate()
	{
		if (isset($_POST['Submit'])){
			
			
			$positions = $_POST['positions'];
			$this->query("SELECT * from candidates where Position = '$positions'");
			$rows = $this->resultSet();
			return $rows;

		
	  }
	}

	public function register()
	{
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$bvn = $post['BVN'];
		$bvn2 = $post['BVN-repeat'];
		$fname = $post['fullname'];
		$position = $post['positions'];
		$party = $post['party'];

		if($post['submit']){


			if(empty($bvn) or empty($bvn2) or empty($fname) or empty($position) or empty($party)){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			if(is_numeric($fname)){
				Messages::setMsg('Your name must be in Alphabets', 'error');
				return;
			}

			if(strlen($bvn) !=11 or !is_numeric($bvn)){
				Messages::setMsg('Your BVN must Be 11 digits!', 'error');
				return;
			}
			if(!empty($position) or !empty($party)){
				$this->checkParty($position, $party);
				
			}
			if ($bvn !== $bvn2){
				Messages::setMsg('Your confirm BVN does not match!', 'error');
				return;
			} else try{

			$this->query('INSERT INTO candidates (Fullname, Position, Party, BVN, Reg_date) VALUES(:fullname, :positions, :party, :BVN, now()) ');
			$this->bind(':fullname', $post['fullname']);
			$this->bind(':positions', $post['positions']);
			$this->bind(':party', $post['party']);
			$this->bind(':BVN', md5($bvn));
			
			$this->execute();

			}

			catch(PDOException $e)
			    {
			    echo "Error: " . $e->getMessage();
			    }

			
			header('Location: '.ROOT_URL.'candidates/login');
		}
		return;
	}

	public function login(){
		return;
	}

	public function checkParty($position, $party){

		

		$this->query("SELECT * from candidates where Position = '$position' and Party = '$party'");
		$rows = $this->resultSet();
		if($rows){
			Messages::setMsg('There is already a candidate for the selected party!', 'error');
			return;
		}
		
	
	}

	public function add($vote)
	{

	
			try{
			$this->query("UPDATE candidates set Allvotes=Allvotes+1 where id ='$vote'");
			$this->execute(); 
			// echo "successful";
			}
			catch(PDOException $e)
			    {
			    echo "Error: " . $e->getMessage();
			    }


			// header('Location: '.ROOT_URL.'candidates');
			echo Messages::setMsg('Successfully voted!', 'success');
		
		return;
	}
}