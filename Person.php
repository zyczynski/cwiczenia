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
		
		return $this -> age;
	}
	
	public function urodziny(){
		
		$this -> age+1;
		return null;
	}
	
}



		$user1 = new Users("Bartek", 32);
		$user2 = new Users("Piotrek", 31);
 
		$wiekB = $user1 -> showPrivateAge();
		$wiekP = $user2 -> showPrivateAge();


		$year = new DateTime();
		$aktualnyRok = $year->format('Y');

	class AgeCalculator{
		public $birth;
		
		public function CalculateAge(){
			
			$ybirth = ($aktualnyRok - $wiekB);
			$this -> birth = $ybirth;
		}
		
		public function YearOfBirth(){
			echo $this -> birth;
		}
		
	}

$birthB = new AgeCalculator;
$birthB -> YearOfBirth();


?>
		
