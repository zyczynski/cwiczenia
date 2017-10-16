<?php

include 'Person.php';


		echo "Imię:  ";
		$user1 -> showPrivateName();
		echo "  Wiek:  ";
		$user1 -> showPrivateAge();
		
		echo "<br>";
		
		echo "Imię:  ";
		$user2 -> showPrivateName();
		echo "  Wiek:  ";
		$user2 -> showPrivateAge();
		
		echo "<br>";
		echo "Jesli Bartek bedzie mial urodziny skonczy " . $user1 -> urodziny() . " lata";
		echo "<br>";
		echo "Jesli Piotrek bedzie mial urodziny skonczy " . $user2 -> urodziny() . " lata";
		
		
?>
