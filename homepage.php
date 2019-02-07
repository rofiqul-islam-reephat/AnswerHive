<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
							<button class="btn btn-outline-primary"><i class="fas fa-search"></i> Search</button>
						</div>
					</div>
				</form>		
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="dropdown dropdown-menu-left " >
					<form action="askquestion.php">
						<button class="btn btn-primary float-left" style="margin-top: 17px ; margin-bottom: 17px;" ><i class="fas fa-question-circle"></i>&nbsp&nbsp Ask a Question &nbsp&nbsp</button>	
					</form>
					
					<button class="btn btn-outline-primary  dropdown-toggle float-right" style="margin-top: 17px ; margin-bottom: 17px;"
					data-toggle="dropdown"><i class="fas fa-user-alt"></i></button>

					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<a class="dropdown-item" href=""><i class="fas fa-user-circle"></i> Profile</a>
						<a class="dropdown-item" href="editprofile.php"> <i class="fas fa-user-edit"></i> Edit Info</a>
						<a class="dropdown-item" href=""><i class="fas fa-sign-out-alt"></i> Sign Out</a>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
	



	
	<div class="row">
		<div class="col-lg-3 col-xs-12">
			<div class="card shadow-lg" style="margin:3%">
				<img class="card-img-top" style="" src="img/demoprofile.jpeg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title text-center">Jhon Doe</h5>
					<p class="card-text text-center text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<div class="row">
						<div class="col-lg-6" style="border-right: 2px solid #cccc;">
							<p class=""> <i class="fa fa-question-circle"></i> Asked:<br> <p class="text-center">100</p></p>
						</div>
						<div class="col-lg-6">
							<p class=""> <i class="fa fa-question-circle"></i> Answerd:<br> <p class="text-center">39</p></p>
						</div>
					</div>
				</div>	
			</div>

			
			<div class="card mb-3 shadow-lg" style="margin:3%">
				<div class="card-body">
					<h4 class="card-title text-secondary">About</h4>
					<p><i class="fas fa-envelope"></i>&nbsp&nbspEmail&nbsp:</p>
					<p><i class="fas fa-building"></i>&nbsp&nbsp&nbsp Works at&nbsp&nbsp:</p>
					<p><i class="fas fa-briefcase"></i>&nbsp&nbspProfession&nbsp:</p>
					<p><i class="fas fa-map-marker-alt"></i>&nbsp&nbspFrom&nbsp:</p>
				</div>
			</div>
		</div>

		<div class="col-lg-7 col-xs-8" style="border-right: 2px solid #cccc;">

		</div>

		<div class="col-lg-2 col-xs-4">
			<div class="container">
				<br>
				<h4 class="text-secondary text-xs-center"><i class="fas fa-rss-square"></i>&nbsp&nbspFeeds</h4><br>
				<ul class="list-group text-xs-center">
					<a href="" class="text-secondary" style="margin-bottom: 5px"> <i class="fas fa-fire"></i>&nbsp &nbspTop Questions</a>
					<a href="" class="text-secondary" style="margin-bottom: 5px"> <i class="fab fa-first-order"></i>&nbsp &nbspNew Questions</a>
					<a href="" class="text-secondary" style="margin-bottom: 5px"> <i class="fas fa-thumbs-down"></i>&nbsp &nbspControversal</a>
				</ul>		

				<br><br>

				<h4 class="text-secondary"><i class="fas fa-star-half-alt"></i>&nbsp&nbspInterests</h4><br>

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