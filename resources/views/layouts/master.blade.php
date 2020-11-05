<!DOCTYPE html>
<html>

<head>
	<title>Bagan Map</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./frontend/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./frontend/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./frontend/custom.css">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="./frontend/MDB/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="./frontend/MDB/css/mdb.min.css" rel="stylesheet">

</head>

<body>


	<!--/.Navbar -->
	<div class="header">
		<!--Navbar -->
		<nav class="navbar navbar-expand-lg navbar-fixed-top">
			<a href="" class="navbar-brand" >
				<img src="images/logo1.png" class="img-fluid logo_image">
				</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon" style="color:#52d2b4;"><i class="fas fa-bars"></i></span>
			</button>

			<div class="collapse navbar-collapse navItem" id="navbarSupportedContent-333">
				<ul class="navbar-nav mr-auto itemNav">
					<li class="nav-item active">
						<a class="nav-link" href="index.html" style="color:white">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pagoda.html" style="color:white">Pagodas List</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="hotel.html" style="color:white">Hotel List</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">More
						</a>
						<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
							<a class="dropdown-item" href="about.html">About Bagan</a>
							<a class="dropdown-item" href="privacy.html">Privacy</a>
							<a class="dropdown-item" href="article.html">Article</a>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto nav-flex-icons">
					<li class="nav-item dropdown">
						<a class="nav-link" id="navbarDropdownMenuLink-333" aria-haspopup="true" aria-expanded="false"
							data-toggle="modal" data-target="#modalLoginForm">
							<i class="fas fa-user-cog"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- </div> -->
		</nav>
		<!--/.Navbar -->
	</div>
	<!-- End -->
	<!-- admin sign in panel -->
	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Sign in to Admin panel</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<i class="fas fa-envelope prefix grey-text"></i>
						<input type="email" id="defaultForm-email" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
					</div>

					<div class="md-form mb-4">
						<i class="fas fa-lock prefix grey-text"></i>
						<input type="password" id="defaultForm-pass" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
					</div>

				</div>
				<div class="modal-footer d-flex justify-content-center">
					<button class="btn btn-default">Login</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end admin sign in panel -->

@yield('content');

	<!-- Footer -->
	<footer class="page-footer font-small" style="background-color:  #2d2e33;">

		<!-- Footer Links -->
		<div class="container">

			<!-- Grid row-->
			<div class="row text-center d-flex justify-content-center pt-5 mb-3">

				<!-- Grid column -->
				<div class="col-md-3 mb-3">
					<i class="fa fa-map-marker"></i>
					<p><span>No.545, Sagaing 31st Street, Ward 5</span>South Okkalar</p>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-3 mb-3">
					<i class="fa fa-phone"></i>
					<p>+959 42529 6370</p>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-3 mb-3">
					<i class="fas fa-globe"></i>
					<p><a href="https://codexmyanmar.com/">codexmyanmar.com</a></p>
				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row-->
			<hr class="rgba-white-light" style="margin: 0 15%;">
			<!-- Footer Links -->
			<div class="container">

				<div class="row">
					<div class="col-md-6 my-3">

						<img src="images/contact.png" width="100%">

					</div>
					<div class="col-md-6 my-3">
						<form>
							<div class="form-group">
								<!-- <label for="formGroupExampleInput">Example label</label> -->
								<input type="text" class="form-control" id="formGroupExampleInput"
									placeholder="Enter Your Name">
							</div>
							<div class="form-group">
								<!-- <label for="formGroupExampleInput2">Another label</label> -->
								<input type="text" class="form-control" id="formGroupExampleInput2"
									placeholder="Enter Your Email">
							</div>
							<div class="form-group">
								<!-- <label for="formGroupExampleInput2">Another label</label> -->
								<input type="text" class="form-control" id="formGroupExampleInput2"
									placeholder="Telephone">
							</div>
							<div class="form-group">
								<!-- <label for="exampleFormControlTextarea1">Comment</label> -->
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
									placeholder="Enter Your Address"></textarea>
							</div>
							<div class="form-group">
								<!-- <label for="exampleFormControlTextarea1">Comment</label> -->
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
									placeholder="Message"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Send Message</button>
						</form>
					</div>



				</div>
				<!-- Grid row-->
				<hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

				<!-- Grid row-->
				<div class="row pb-3">

					<!-- Grid column -->
					<div class="col-md-12">

						<div class="flex-center">

							<ul class="list-unstyled list-inline">
								<li class="list-inline-item">
									<a class="btn-floating btn-sm rgba-white-slight mx-1">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-floating btn-sm rgba-white-slight mx-1">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-floating btn-sm rgba-white-slight mx-1">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-floating btn-sm rgba-white-slight mx-1">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>


						</div>

					</div>
					<!-- Grid column -->

				</div>
				<!-- Grid row-->

			</div>
		</div>
		<!-- End -->
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2020 Copyright:
			<a href="https://mdbootstrap.com/"> Code X Myanmer</a>
		</div>
		<!-- Copyright -->



	</footer>
	<!-- Footer -->

	<!-- End -->




</body>
<script type="text/javascript" src="./frontend/Bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="./frontend/Bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- JQuery -->
<script type="text/javascript" src="./frontend/MDB/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="./frontend/MDB/js/popper.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="./frontend/MDB/js/mdb.min.js"></script>

<script>
	$(function () {
		var selectedClass = "";
		$(".filter").click(function () {
			selectedClass = $(this).attr("data-rel");
			$("#gallery").fadeTo(100, 0.1);
			$("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
			setTimeout(function () {
				$("." + selectedClass).fadeIn().addClass('animation');
				$("#gallery").fadeTo(300, 1);
			}, 300);
		});
	});

	// scroll animation
	$(document).ready(function () {
		new WOW().init();
	});
	$(".wow").addClass("fadeInUp");
// end scroll animation

</script>

</html>
