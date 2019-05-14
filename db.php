<?php 
	
	//$connection = mysqli_connect('host','db_user','db_pass','db_name');

	$dns       = 'mysql:host=localhost;dbname=baki';
	$username  = 'root';
	$password  = '';
	$options   = [];


	try{
		$conection = new PDO($dns, $username, $password, $options);
		//echo "We are connected";

	}
	catch(PDOEXCEPTION $e){

	}

 ?>