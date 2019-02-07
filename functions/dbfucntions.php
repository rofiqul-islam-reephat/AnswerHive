<?php 

include 'webfunctions.php';

function create_db_if_not_found(){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "answershive";
	$query= "CREATE DATABASE IF NOT EXISTS ".$dbname;


	$connection =  mysqli_connect($servername, $username, $password);

	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}

	$query_res = mysqli_query($connection,$query);

	if(!$query_res){
		echo "Error creating database: ".mysqli_error($connection);
		die();
	}

	mysqli_close($connection);
}


function create_table_if_not_found($tabledescription){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$query= "CREATE TABLE IF NOT EXISTS ".$tabledescription;
	$dbname = "answershive";

	$connection = mysqli_connect($servername, $username, $password,$dbname);

	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}

	$query_res = mysqli_query($connection,$query);

	if(!$query_res){
		echo "Error creating database: ".mysqli_error($connection);
		die();
	}

	mysqli_close($connection);

}


function  execute_query($query){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "answershive";

	$connection = mysqli_connect($servername, $username, $password,$dbname);

	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}

	$query_res= mysqli_query($connection,$query);


	if(!$query_res){

		echo mysqli_error($connection);

		die();
	}

	mysqli_close($connection);

	return  $query_res;
}





function insert_and_get_last_id($query){



	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "answershive";

	$connection = mysqli_connect($servername, $username, $password,$dbname);

	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}

	$query_res= mysqli_query($connection,$query);


	if(!$query_res){

		echo mysqli_error($connection);

		die();
	}

	$lastId =  mysqli_insert_id($connection);
;

	mysqli_close($connection);

	return  $lastId;


}






function get_last_id(){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "answershive";

	$connection = mysqli_connect($servername, $username, $password,$dbname);

	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}

	$lastid= mysqli_insert_id($connection);


	return $lastid;
}

function check_email($email){

	$query = "SELECT 1 FROM user_basic_info WHERE email='$email'";

	$result = execute_query($query);

	if(mysqli_num_rows($result)>0)
		return true;

	return false;
}



?>