<!DOCTYPE html>
<html lang="en">
<head>
<title>Arrays</title>
</head>
<body>
	<?php
		$brands = array("Toyota","Volkswagen","Subaru","Audi","Range Rover","Lexus","Chevrolet");
		print_r($brands);
		
		
		$brand[0] = "Toyota";
		$brand[1] = "Volkswagen";
		$brand[2] = "Subaru";
		$brand[3] = "Audi";
		$brand[4] = "Range Rover";
		$brand[5] = "Lexus";
		$brand[6] = "Chevrolet";
		
		print_r($brand);
		
		$grades = array("Mike"=>80, "Vincent"=>78, "Victor"=>75);
		print_r($grades);
		
		
		$contacts = array(
			array("name"=>"Mike Chepkwonyi",
				  "email"=>"chepkwonyimike@gmail.com"),
			array("name"=>"Vincent Sigei",
				  "email"=>"sigeivincent@hotmail.com"),
			array("name"=>"Victor Sirma",
				  "email"=>"sirma2021@gmail.com")
		);
		
		echo "Mike Chepkwonyi's Email Id is: ". $contacts[0]["email"];
	?>
</body>
</html>