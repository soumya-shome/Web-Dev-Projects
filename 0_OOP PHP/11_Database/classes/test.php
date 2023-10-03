<?php
include 'dbh.php';

class Test extends Dbh{
	public function getUsers(){
		$sql="SELECT * FROM `users`";
		$stmt=$this->connect()->query($sql);
		while($row=$stmt->fetch()){
			echo $row['users_firstname'].'<br>';
		}
	}
	
	public function getUsersStmt( $firstname ,$lastname){
		$sql="SELECT * FROM `users` WHERE  `users_firstname`= ? AND `users_lastname` = ? ";
		$stmt=$this->connect()->prepare($sql);
		$stmt->execute([$firstname,$lastname]);
		$names=$stmt->fetchAll();
		
		foreach($names as $name){
			echo $name['users_firstname'].'<br>';
		}
	}
	
	public function setUsersStmt( $firstname ,$lastname,$dateofbirth){
		$sql="INSERT INTO users(users_firstname,users_lastname,users_dateofbirth) VALUE ( ? , ? , ? )";
		$stmt=$this->connect()->prepare($sql);
		$stmt->execute([$firstname,$lastname,$dateofbirth]);
	}
}


?>