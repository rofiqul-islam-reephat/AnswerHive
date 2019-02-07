<!DOCTYPE html>
<html>
<head>
	<title>Ask Question -Answerhive</title>

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
<div class="container-fluid bg-dark sticky-top">
		<div class="row">
			<div class="col-xs-12 col-lg-4">
				<a href="index.php"><img src="img/logo.png" class="logo" alt="logo"></a>
			</div>

			<div class="col-xs-12 col-lg-4">
				<form class="form-inline">
					<div class="input-group" style="margin-top: 4%; margin-bottom: 4%;">
						<input type="text" class="form-control"name="serachques" placeholder="Search Answers">
						<div class="input-group-prepend">
							<button class="btn btn-outline-primary"><i class="fas fa-search"></i> Home</button>
						</div>
					</div>
				</form>		
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="dropdown dropdown-menu-left " >
					<button class="btn btn-outline-primary  dropdown-toggle float-right" style="margin-top: 17px ; margin-bottom: 17px;"
					data-toggle="dropdown"><i class="fas fa-user-alt"></i></button>

					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<a class="dropdown-item" href=""><i class="fas fa-user-circle"></i> Profile</a>
						<a class="dropdown-item" href="editprofile.php"> <i class="fas fa-user-edit"></i> Edit Info</a>
						<a class="dropdown-item" href=""><i class="fas fa-sign-out-alt"></i> Sign Out</a>
					</div>
				</div>

				<form action="homepage.php">
						<button class="btn btn-outline-primary float-right" style="margin-top: 17px ; margin-bottom: 17px; margin-right: 10px;" ><i class="fas fa-home"></i>&nbsp&nbspHome&nbsp&nbsp</button>	
				</form>
					
				<br>
			</div>
		</div>
	</div>
	

	<div class="row">
		<div class="col-lg-4">
			<div class="jumbotron" style="margin-top:30px">
				<img src="img/question.png" style="width: 100px; height: 100px; margin-bottom: 20px;"> 
				<h1 class="display-5">How to ask?</h1>
				<p class="lead"> Please First try to find out your question in our database. If not found then you should ask your question.</p>
				<hr class="my-4">
				<p>Asking redundant questions makes it hard to find specific quesetions users looking for. Keep asking new questions and help
				our community to grow.</p>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="container" style="margin-top: 30px;">
				<form>
			     <div class="form-group">
					 <label class="text-primary" for="exampleInputEmail1">Question Ttile</label>
			 		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Qustion"
			 		required>
				</div>

				 <div class="form-group">
    				<label class="text-primary" for="exampleFormControlTextarea1">Additional Description</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Enter Additional Information"
    				required></textarea>
 				 </div>

 				 <div class="form-group">
				    <label class="text-success" for="exampleInputEmail1">Question Tags</label>
			 		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
			 		placeholder="Use Comma to seperate tags. at least one tag , max 5 tags"required>
				</div>

				 <button type="submit" class="btn btn-primary "> <i class="fas fa-paperclip"></i> Post your Question</button>

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