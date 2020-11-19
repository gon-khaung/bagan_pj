@extends('layouts.master')

@section('content')
	<div class="bg-overlay">
		<div class="text-center">
			<h1 style="font-family: lobster; font-size: 50px;">Warmly Welcom from Bagan Road Map</h1>
			<h5 style="font-family: lobster">We can share about a lot of historical pagodas and hotels in bagan.</h5>
		</div>
	</div>

	<!-- start pagodas list -->
	<h2 style="font-family: lobster;" class="text-center mt-5">Famous Pagodas</h2>
	<hr class="text-line">
	<div class="container my-5 py-5 z-depth-2 wow fadeInLeftBig">


		<!--Section: Content-->
		<section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

					<img src="{{ asset('images/frontend/ananda.jpg') }}" class="img-fluid z-depth-1 rounded" alt="">

				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-6 mb-4 mb-lg-0" style="color: #2d2e33;">

					<h3 class="font-weight-bold" style="color: #2d2e33">Shwe Zi Gong Pagoda</h3>

					<p class="font-weight-bold">That's a very nice Pagoda</p>

					<p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
						molestiae
						numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.
					</p>

					<a class="font-weight-bold" href="pagodaSolo.html" style="color: #2d2e33"
						href="{{url('/show_pagodaSolo/1')}}">Learn more<i class="fas fa-angle-right ml-2"></i></a>

				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

		</section>
		<!--Section: Content-->

	</div>

	<div class="container my-5 py-5 z-depth-2 wow fadeInRightBig">


		<!--Section: Content-->
		<section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

			<!--Grid row-->
			<div class="row">



				<!--Grid column-->
				<div class="col-lg-6 mb-4 mb-lg-0" style="color: #2d2e33;">

					<h3 class="font-weight-bold" style="color: #2d2e33">Shwe San Taw Pagoda</h3>

					<p class="font-weight-bold">That's a very nice Pagoda.</p>

					<p class="text" style="color: #2d2e33;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id
						quam sapiente
						molestiae
						numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.
					</p>

					<a class="font-weight-bold" style="color: #2d2e33" href="{{url('/show_pagodaSolo/2')}}">Learn more<i
							class="fas fa-angle-right ml-2"></i></a>

				</div>
				<!--Grid column-->
				<!--Grid column-->
				<div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

					<img src="{{ asset('images/frontend/bupaya.jpg') }}" class="img-fluid z-depth-1 rounded" alt="">

				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

		</section>
		<!--Section: Content-->
	</div>

	<div class="container my-5 py-5 z-depth-2 wow fadeInLeftBig">


		<!--Section: Content-->
		<section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

					<img src="{{ asset('images/frontend/shwezigong.jpg') }}" class="img-fluid z-depth-1 rounded" alt="">

				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-6 mb-4 mb-lg-0" style="color:#2d2e33;">

					<h3 class="font-weight-bold" style="color: #2d2e33">Gu Byauk Gyi</h3>

					<p class="font-weight-bold">That's a very nice place.</p>

					<p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
						molestiae
						numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.
					</p>

					<a class="font-weight-bold" href="pagodaSolo.html" style="color: #2d2e33"
						href="{{url('/show_pagodaSolo/3')}}">Learn more<i class="fas fa-angle-right ml-2"></i></a>

				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

		</section>
		<!--Section: Content-->
	</div>

	<div class="text-center">
		<a href="pagoda.html"><button type="button" class="btn btn-outline-info waves-effect">View All
				Pagodas</button></a>
	</div>
	<!-- end pagoda list -->

	<!-- Sunset Pagoda List -->
	<div class="container my-5">
		<hr style="border:0.5px solid #999999">
		<h3 class="text-center" style="font-family: lobster">Bagan Pagoda Sunset Views</h3>
		<hr class="text-line">

		<!-- Grid row -->
		<div class="gallery" id="gallery">

			<!-- Grid column -->
			<div class="mb-3 pics animation all 2">
				<img class="img-fluid hoverable wow" style="height: 250px; width: 100%;" src="{{ asset('images/frontend/sunset2.jpg') }}" alt="Card image cap">
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="mb-3 pics animation all 1" >
				<img class="img-fluid hoverable wow " style="height: 500px; width: 100%;" src="{{ asset('images/frontend/sunset8.jpg') }}" alt="Card image cap">
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="mb-3 pics animation all 1">
				<img class="img-fluid hoverable wow" style="height: 500px; width: 100%;" src="{{ asset('images/frontend/sunset4.jpg') }}" alt="Card image cap">
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="mb-3 pics animation all 2">
				<img class="img-fluid hoverable wow" style="height: 250px; width: 100%;" src="{{ asset('images/frontend/sunset3.jpg') }}" alt="Card image cap">
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="mb-3 pics animation all 2">
				<img class="img-fluid hoverable wow" style="height: 250px; width: 100%;" src="{{ asset('images/frontend/sunset6.jpg') }}" alt="Card image cap">
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="mb-3 pics animation all 1">
				<img class="img-fluid hoverable wow " style="height: 500px; width: 100%;" src="{{ asset('images/frontend/sunset7.jpg') }}" alt="Card image cap">
			</div>
			<!-- Grid column -->

		</div>
		<!-- Grid row -->


	</div>
	<!-- End Sunset Pagoda List-->

	<!-- Start Hotel List -->
	<div class="container my-5">
		<hr style="border:0.5px solid #999999">
		<h3 class="text-center " style="font-family: lobster">Hotel List</h3>
		<hr class="text-line">

		<div class="row">

			<div class="col-md-4 my-3">
				<a href="hotelSolo.html"><img src="{{ asset('images/frontend/ananta.jpg') }}" class="card-img-top z-depth-2"></a>
				<p>Ananta Hotel</p>
			</div>

			<div class="col-md-4 my-3">
				<a href="hotelSolo.html"><img src="{{ asset('images/frontend/areindamar.jpg') }}" class="card-img-top z-depth-2"></a>
				<p>Areindamar Hotel</p>
			</div>

			<div class="col-md-4 my-3">
				<a href="hotelSolo.html"><img src="{{ asset('images/frontend/aureum.jpg') }}" class="card-img-top z-depth-2"></a>
				<p>Aureum Hotel</p>
			</div>

		</div>

		<div class="row">
			<div class="col-md-4 my-3">
				<a href="hotelSolo.html"><img src="{{ asset('images/frontend/hotel3.jpg') }}" class="card-img-top"></a>
				<strong>Bagan Hotel</strong>
			</div>


			<div class="col-md-4 my-3">
				<a href="hotelSolo.html"><img src="{{ asset('images/frontend/thande.jpg') }}" class="card-img-top"></a>
				<p>Thande Hotel</p>
			</div>

			<div class="col-md-4 my-3">
				<a href="hotelSolo.html"><img src="{{ asset('images/frontend/yadanarbon.jpg') }}" class="card-img-top"></a>
				<p>Yadanarbon Hotel</p>

			</div>

		</div>
		<div class="text-center">
			<a href="hotel.html"><button type="button" class="btn btn-outline-info waves-effect">View All
					Hotels</button></a>
		</div>


	</div>

	<!-- End Hotel List -->

	<!-- Highlight -->
	<div class="container my-5">
		<h3 class="text-center" style="font-family: lobster;">Highlight In Bagan</h3>
		<hr class="text-line">


		<div class="demo coursemeal my-3">

			<!-- First Hightlight -->
			<div class="coursemeal__div ">

				<picture class="responsive-img">
					<img src="{{ asset('images/frontend/balloon.jpg') }}" alt="">
				</picture>

				<div class="coursemeal-info">
					<a href="#" class="coursemeal-info__link">Ballooning Over Bagan</a>
				</div>
			</div>

			<!-- Second Highlight-->
			<div class="coursemeal__div">

				<picture class="responsive-img">
					<img src="{{ asset('images/frontend/hand.jpg') }}" alt="">
				</picture>

				<div class="coursemeal-info">
					<a href="#" class="coursemeal-info__link">Hand Painting In Bagan</a>
				</div>
			</div>

			<!-- Third Hightlight-->
			<div class="coursemeal__div">

				<picture class="responsive-img">
					<img src="{{ asset('images/frontend/ebike.jpg') }}" alt="">
				</picture>

				<div class="coursemeal-info">
					<a href="#" class="coursemeal-info__link">Riding Ebike In Bagan</a>
				</div>
			</div>


		</div>
	</div>
	</div>
	<!-- End Highlight -->
@endsection
