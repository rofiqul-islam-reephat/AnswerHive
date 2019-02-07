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
						<button class="dropdown-item" type="button"> <i class="fas fa-user-circle"></i> Profile</button>
						<button class="dropdown-item" type="button"> <i class="fas fa-user-edit"></i> Edit Info</button>
						<button class="dropdown-item" type="button"> <i class="fas fa-sign-out-alt"></i> Sign Out</button>
					</div>
				</div>
				<br>
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