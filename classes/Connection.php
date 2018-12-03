<?php

abstract class Connection{

		public function connect(){
			$servername ='localhost';
			 $username = 'Developer';
			 $pass = '1234';
			 $db = 'e-vote';

			$conn = new mysqli($servername, $username, $pass, $db);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			else{
				// echo "Connected successfully";
			}

			return $conn;

	}
}