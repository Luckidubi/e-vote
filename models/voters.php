<?php
class votersModel extends Models{
	public function request(){
		$this->query('SELECT * from voters');
		$rows = $this->resultSet();
		return $rows;
	}

	public function register()
	{
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$fname = $post['fullname'];
		$age = $post['age'];
		$question = $post['question'];
		$answer = strtolower($post['answer']);
		$bvn = $post['BVN'];
		$bvn2 = $post['BVN-repeat'];

		if($post['submit']){

			if(empty($bvn) or empty($bvn2) or empty($fname) or empty($age) or empty($question) or empty($answer)){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			if(is_numeric($fname)){
				Messages::setMsg('Your name must be in Alphabets', 'error');
				return;
			}

			if (!is_numeric($age)){
				Messages::setMsg('Your age must be in digit', 'error');
				return;
			}

			if ($age < 18){
				Messages::setMsg('Your must be 18 or above to vote!', 'error');
				return;
			}
			if(is_numeric($answer)){
				Messages::setMsg('Your answer must be in Alphabets', 'error');
				return;
			}

			if(strlen($bvn) != 11 or !is_numeric($bvn)){
				Messages::setMsg('Your BVN must Be 11 digits!', 'error');
				return;
			}

			if ($bvn !== $bvn2){
				Messages::setMsg('Your confirm BVN does not match!', 'error');
				return;
			
			} else try{

			$this->query('INSERT INTO voters (Fullname, Age, BVN, SecurityQstn, SecurityAns, DOR) VALUES(:fullname, :age, :BVN, :question, :answer, now()) ');
			$this->bind(':fullname', $post['fullname']);
			$this->bind(':age', $age);
			$this->bind(':BVN', md5($bvn));
			$this->bind(':question', $question);
			$this->bind(':answer', $answer);
			
			$this->execute();

			}

			catch(PDOException $e)
			    {
			    echo "Error: " . $e->getMessage();
			    }

			
			header('Location: '.ROOT_URL.'voters/login');
		}
		return;
	}

	public function login()
	{
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$fullname = $post['fullname'];
		$bvn = md5($post['BVN']);
		$question = $post['question'];
		$answer = strtolower($post['answer']);

		if($post['submit'])
		{
			try{

			$this->query('SELECT * FROM voters WHERE Fullname = :fullname and BVN = :BVN and SecurityQstn = :question and SecurityAns = :answer');
			$this->bind(':fullname', $fullname);
			$this->bind(':BVN', $bvn);
			$this->bind(':question', $question);
			$this->bind(':answer', $answer);

			$row = $this->single();

			if($row){
				$_SESSION['logged_in'] = true;
				$_SESSION['voter_id'] = array(
					"bvn" => $row['BVN'],
					"answer" => $row['SecurityAns'],
					"question" => $row['SecurityQstn'],
					"name" => $row['Fullname']
				);
				header('Location: '.ROOT_URL. 'candidates'); 
				Messages::setMsg('You are now logged in');
				
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
			
			

			}

			catch(PDOException $e)
			    {
			    echo "Error: " . $e->getMessage();
			    }
		}
		return;
	}
}