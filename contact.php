<?php

	include 'functions/dbfucntions.php';
	include 'functions/validationfunctions.php';
	include 'functions/webfunctions.php';

	$email = '';
	$msgtitle ='';
	$msg ='';
	$warning ="This field is required!";
	$dateandtime = date("y/m/d H:i:s");
	$isempty = false;


	if(isset($_POST['sendmsgbtn'])){

		if(empty($_POST['email'])){
			$isempty = true;
		}
		else{
			$email = $_POST['email'];
			$email = clean_input($email);
		}

		if(empty($_POST['msgtitle'])){
			$isempty = true;

		}
		else{
			$msgtitle =$_POST['msgtitle'];
			$msgtitle = clean_input($msgtitle);
		}

		if(empty($_POST['msg'])){
			$isempty = true;
		}
		else{
			$msg = $_POST['msg'];
			$msg = clean_input($msg);
		}

		if(!$isempty){

			try{
				create_db_if_not_found();

				$table = " messages(msg_id INT(4) UNSIGNED PRIMARY KEY AUTO_INCREMENT, msg_title VARCHAR(255) NOT NULL ,email  VARCHAR(255) NOT NULL,
				 	  msg TEXT NOT NULL,dateandtime DATETIME NOT NULL)";

				create_table_if_not_found($table);

				$query = "INSERT INTO messages  VALUES('','$msgtitle','$email','$msg','$dateandtime')";

				execute_query($query);

				$url = "successcontact.php";

				redirect($url);
			}
			catch (Exception $e){

				$url = "awsnap.php";

				 redirect($url);
			}
		}


	}

?>

<!--  
	Data fields : 

			Field Type      	=====  	Name

		1.	Messagetitle Text           msgtitle
		2.  Email Field 			    email
		3.  Message TextArea  			msg
		4.  Send Button					sendmsgbtn

-->



<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" >

	<!--Font Library-->
	<link  rel="stylesheet" href="fontawesome/css/all.css">

	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>

	<div class="container-fulid sticky-top bg-dark">
	    <div class="row">
			<div class="col-lg-10 col-xs-6">
				<a href="index.php"><img src="img/logo.png" class="logo" alt="logo"></a>
			</div>
			<div class="col-xs-6 col-lg-2">
				<div class="container">
					<form class="float-right" action="index.php" style="margin-top: 15px ; margin-bottom: 20px">
				     	<button type="submit" class="btn btn-outline-primary"> <i class="fas fa-home"></i> Home</button>
			     	</form>
				</div>
			</div>
		</div>
			
	</div>

	<div class="row">
		<div class=" col-xs-12 col-lg-7 col-xs-pull-12">
	
			<img src="img/communication.png" class="mx-auto d-block communitylogo"><br>
			
			<h1 class="text-secondary" style="text-align: center; margin-top: 5px">Learn, Share, Grow</h1>
			<br> 
			<p class="text-secondary" style="text-align: center;">Each month, over 50 million users come to 
			AnswersHive to learn, share <br>their knowledge, and build their careers.<br><br>
			Grow your skill by helping others. The more you share<br> the more you help us grow and
			yourself.<br><br>
			Join the world’s largest question and answer community.</p>
		</div>

		<div class="col-xs-12 col-lg-5 col-xs-push-12">
			<div class="container">
			<h1 class="text-secondary" style="text-align:center; margin-top: 5%">Contact Us</h1>
			<br> <br>
			<form method="POST">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Message Heading</span>
					</div>
					<input type="text" class="form-control" name ="msgtitle" placeholder="enter header" required>
				</div>
				<br> 
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Email Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
					</div>
					<input type="email" class="form-control" name ="email" placeholder="enter email" required>
				</div>
				<br>
				<label class="text-secondary">Enter your Message</label>
				<textarea name ="msg" class="form-control" rows="6" id="comment" required></textarea>
				<br>
				<br>
				<div class="container " style="margin-left: 32%; margin-bottom: 10px;">
					<button type="submit" name="sendmsgbtn" class="btn btn-primary text-light"> <i class="fas fa-paper-plane"></i> Send Message</button>				
				</div>
			</form>
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

</body>
</html>