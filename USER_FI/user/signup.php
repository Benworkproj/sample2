<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Website menu 01</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/custom.css">

	</head>
	<body>
		<section class="">
			<!-- nav -->
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-success" id="ftco-navbar">
				<div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" width="90" height="90" alt="" srcset=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="#" class="nav-link">About</a></li>
					</ul>
				</div>
				</div>
			</nav>
			<!-- END nav -->
		</section>
        <section class="container mx-auto mb-lg-5">
            <h1 class="h1 font-weight-bold text-success ml-xl-5 mt-xl-5">Sign Up</h1>
            <div class="row">
                <img src="images/SIGN UP (USER PART 1 )-green.jpg" class="w-50 my-auto">
                <div class="form p-3 w-50">
                    <form action="signup.php" method="POST" class="mt-xl-5">
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Full Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="Juan Dela Cruz" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Nationality</label>
                            <input type="text" name="nationality" id="" class="form-control" placeholder="Filipino" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Email</label>
                            <input type="text" name="email" id="" class="form-control" placeholder="@juandelacruz@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Password</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="xxxxxxxxxxxxxx" required>
                        </div>
                        <div class="mb-3">
                            <input class="btn btn-success w-100" type="submit" name="next" value="Next">
                        </div>
                    </form>
                </div>
            </div>
        </section>
		<?php
		//CONNECTION
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dbuser";
		$conn = mysqli_connect ($servername, $username, $password, $dbname);

		//DATA PROCESS
		if(isset ($_POST ['next'])){
			$name= $_POST['name'];
			$nationality = $_POST['nationality'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql = "INSERT INTO tbl_signup (name,nationality,email,password)  VALUES ('$name','$nationality','$email','$password')";
            if (mysqli_query ($conn, $sql)){
				echo "Login Successfully";
			}

		}// END OF DATA	
		?>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

