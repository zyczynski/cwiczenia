<?php

class Users{
	
	private $name;
	private $age;
	
	
	function __construct($user_name, $user_age){
		
		$this -> name = $user_name;
		$this -> age = $user_age;
	}
	
	public function showPrivateName(){
		
		echo $this -> name;
	}
	
	public function showPrivateAge(){
		
		echo $this -> age;
	}
	
	public function urodziny(){
		
		$this -> age+1;
		return null;
	}
	
}

$user1 = new Users("Bartek", 32);
$user2 = new Users("Piotrek", 31);

//jakaś strasznie istotna zmiana 


?>
		
