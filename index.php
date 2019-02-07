<?php 

include 'functions/dbfucntions.php';
include 'functions/validationfunctions.php';
include 'functions/cryptofunctions.php';


//Sign Up variables
$firstName ='';
$lastName ='';
$email ='';
$password='';
$rePassword='';
$isSignUpEmpty = false;

//Sign In variable
$signInUserName ='';
$signInPassword= '';


//Search Variable
$serachQues ='';

//Error alerts
$signUpErrorAlert= array("email"=>'',"password"=>'');

//date and time
$dateAndTime = date("y/m/d H:i:s");



if(isset($_POST['signupbtn'])){

	if(empty($_POST['firstname'])){
		$isSignUpEmpty = true;
	}
	else{
		$firstName = $_POST['firstname'];
		$firstName = clean_input($firstName);
	}

	if(empty($_POST['lastname'])){
		$isSignUpEmpty = true;
	}
	else{
		$lastName = $_POST['lastname'];
		$lastName = clean_input($lastName);
	}


	if(empty($_POST['email'])){
		$isSignUpEmpty = true;
	}
	else{
		$email = $_POST['email'];
		$email = clean_input($email);
	}

	if(empty($_POST['password'])){
		$isSignUpEmpty = true;
	}
	else{
		$password = $_POST['password'];
		$password = clean_input($password);
	}


	if(empty($_POST['repassword'])){
		$isSignUpEmpty = true;
	}
	else{
		$rePassword = $_POST['repassword'];
		$rePassword = clean_input($rePassword);
	}

	$passwordMatch = false;


	if(strcmp($password, $rePassword)==0){
		$passwordMatch = true;

		$password = hash_with_salt($password);
	}
	else{
		$signUpErrorAlert['password']="Password doesn't match!";
	}


	if($passwordMatch && !$isSignUpEmpty){

		create_db_if_not_found();

		$userTable = "user_basic_info(user_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY , firstname VARCHAR(100),lastname VARCHAR(100),email VARCHAR(255) NOT NULL)";

		$passwordTable = "user_security_info(user_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,email VARCHAR(255), passwordhash TEXT NOT NULL,CONSTRAINT FOREIGN KEY(user_id) REFERENCES user_basic_info(user_id))";

		create_table_if_not_found($userTable);
		create_table_if_not_found($passwordTable);

		$flag = check_email($email);

		if($flag){
			$signUpErrorAlert['email'] = "This Email is already registered !";
		}
		else if(!$flag){

			$insertUserInfoQuery = "INSERT INTO user_basic_info VALUES('','$firstName','$lastName','$email')";

			$lastId = insert_and_get_last_id($insertUserInfoQuery);

			$insertUserSecurityInfo = "INSERT INTO user_security_info VALUES('$lastId','$email','$password')";

			execute_query($insertUserSecurityInfo);
		}

	}
}
?>

<!--

				Data Fields 

	----------------------------------------------------
				Search
	---------------------------------------------------
	Searchbar  textfield name = serachques
	Seacrhbar  button name = searchbtn

	---------------------------------------------------------
				Sign in 
	----------------------------------------------------------
	textfield name = signinusername
	Passwrod field name = signinpassword

	-----------------------------------------------------
				Sign Up 
	---------------------------------------------------------
	textfield 	first name = firstname
	textfield	last name  = lastname
	textfield 	email name = email
	passwordfield one 	   = password
	passwrodfield two	   = repassword
	signup button  		   = signupbtn
	------------------------------------------------------------
-->

<!DOCTYPE html>
<html>
<head>
	<title>Home-AnswersHive</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" >

	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

	<!--Font Library-->
	<link  rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>

	<div class="container-fluid bg-dark sticky-top">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-lg-4">
				<a href="index.php"><img src="img/logo.png" class="logo" alt="logo"></a>
			</div>

			<div class="col-xs-12 col-md-4 col-lg-4">
				<form class="form-inline" method="POST">
					<div class="input-group" style="margin-top: 4%; margin-bottom: 4%;">
						<input type="text"  class="form-control" name="serachques" placeholder="Search Answers">
						<div class="input-group-prepend">
							<button type="submit" name="searchbtn" class="btn btn-outline-primary"><i class="fas fa-search"></i> Search</button>
						</div>
					</div>
				</form>		
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12">
				<form class="form-inline" method="POST" style="margin-top: 4%; margin-bottom: 4%;">
					<div class="input-group">
						<input type="email" class="form-control" name="signinusername" placeholder="email address" required>
						<input type="password" class="form-control" name="signinpassword" placeholder="password" required>
						<div class="input-group-prepend">
							<a href="homepage.php"><button class="btn btn-outline-primary">Sign In</button></a>
						</div>
					</div>
				</form>		
			</div>
		</div>
	</div>
	

	<div class="container-fluid">
		<div class="row">
			<div class="signupcard col-xs-12 col-md-4 col-lg-3 sticky-left" style="border-right: 1px solid #ccc; ">
				<div>
					<h1 class="text-secondary" style="text-align: center;">Sign Up</h1>
					<br>
				</div>
				<form method="POST">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">First Name</span>
						</div>
						<input type="text" class="form-control" name ="firstname" 
						placeholder="enter first name" aria-label="Username"required >
					</div>
					<br> 
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Last Name</span>
						</div>
						<input type="text" class="form-control" name ="lastname" 
						placeholder="enter last name" aria-label="lastname" required >
					</div>
					<br>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
						</div>
						<input type="email" class="form-control" name ="email" 
						placeholder="you@example.com" aria-label="email" required>					
					</div>
					<br>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Password</span>
						</div>
						<input type="password" class="form-control" name ="password" 
						placeholder="password" aria-label="password" required>

					</div>
					<br>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Password</span>
						</div>
						<input type="password" class="form-control" name ="repassword" 
						placeholder="re-type password" aria-label="password" required>
					</div>
					<br>

					<div style="margin-left: 30%">
						<button type="submit" name="signupbtn" class="btn btn-primary text-light">Sign Up</button>				
					</div>
				</form>
				<br>
				<div style="margin-left:15%">
					<p>Forgot password? <a href="resetemail.php" >Recover</a></p>
				</div>
				<p class="small">By clicking "Sign up", you acknowledge that you have
					read our updated terms of service,<a class="text-warning" href="privacypolicy.php">privacy policy</a> and 
					<a class="text-warning" href="privacypolicy.php">cookie policy</a>, and that your continued use of the website is subject to these 
					<a class="text-warning" href="privacypolicy.php">policies</a>.</p>
				</div>

				<div class="col-xs-12 col-md-8 col-lg-9">
					<div class="topquestion align-middle">
						<h2 class="text-success" style="text-align: center;">
							<span class="badge badge-secondary">Trending Questions</span></h2>
						</div>
					</div>
				</div>
			</div>




			<?php
			include 'footer.php';
			?>



			<!-- Latest compiled and minified JavaScript -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<script type="text/javascript">
				$(function () {
					$('[data-toggle="popover"]').popover()
				})
			</script>

		</body>
		</html>
