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
            <h1 class="h1 text-center font-weight-bold text-dark mt-xl-5">Basic Information</h1>
            <div class="row">
                <img src="images/USER (PART 2)-green.jpg" class="w-50 my-auto">
                <div class="form w-50 p-3">
                    <form action="#" method="POST" class="">
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Age</label>
                            <input type="number" name="age" id="age" class="form-control" placeholder="">
                        </div>
                        <div>
                            <label for="" class="form-label text-dark mr-5 ">Gender: </label>
                         <div class="form-check form-check-inline mb-3">
                            <input type="radio" name="ml" id="ml" class="form-check-input" placeholder="">
                            <label for="" class="form-check-label text-dark">Male</label>
                         </div>
                         <div class="form-check form-check-inline mb-3">
                            <input type="radio" name="fm" id="fm" class="form-check-input" placeholder="">
                            <label for="" class="form-check-label text-dark">Female</label>
                         </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Educational Attainment</label>
                            <input type="text" name="education" id="education" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Profile Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Top Skills</label>
                            <input type="text" name="skills" id="skills" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success w-100 pull-right" type="submit" id="createBtn" name="createBtn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

