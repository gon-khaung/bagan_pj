@extends('layouts.master')

@section('content')
<!-- Hotel Body Start -->
<section>
	<div class="hotel_image">
		<img src="{{ asset('images/frontend/hotel2.jpg') }}" style="height:500px; width: 100%">
	</div>
	</div>
</section>
<div class="container">

	<h1 class="text-center my-5" style="font-family: lobster;color: #2d2e33">Bagan Hotels</h1>

	<p>Choosing suitable Bagan hotels is also a big concern for many tourists visiting this ancient city. Although
		there’re not many hotels in Bagan, it’s not difficult for you to find some great staying options in your
		Bagan travel. Here, we have all the information you need for choosing a perfect place to spend your
		holidays. You can also find some useful tips in our Bagan travel guide that surely will help you to create
		you dream trip to the temple plain.</p>

</div>
<div class="row">

	<!-- Grid column -->
	<div class="col-md-12 d-flex justify-content-center mt-3">

		<a href="{{url('/hotels/show_ratingStar/0')}}"><button type="button" class="btn btn-outline-black waves-effect filter p-2" data-rel="all">All</button></a>
		<a href="{{url('/hotels/show_ratingStar/5')}}"><button type="button" class="btn btn-outline-black waves-effect filter p-2" data-rel="1">Five Stars</button></a>
		<a href="{{url('/hotels/show_ratingStar/4')}}"><button type="button" class="btn btn-outline-black waves-effect filter p-2" data-rel="2">Four Stars</button></a>
		<a href="{{url('/hotels/show_ratingStar/3')}}"><button type="button" class="btn btn-outline-black waves-effect filter p-2" data-rel="2">Three Stars</button></a>
	</div>
	<!-- Grid column -->
</div>

<!--Hotel section-->
<section>
	<div class="container-fluid grey lighten-4">
		<hr class="my-5">
		<div class="container">

			<!--Blog-->
			<div class="row mt-5 pt-3">

				<!--Main listing-->
				<div class="col-lg-12 col-12 mt-1 mx-lg-4">

					<!--Section: Blog v.3-->
					<section class="section extra-margins pb-3 text-center text-lg-left">
						<!-- Grid row -->
						<div class="row text-center">
						@foreach($data as $datas)
							<!--Grid column-->
							<div class="col-md-4 mb-4">
								<!--Card-->
								<div class="card text-left">
									<!--Card image-->
									<div class="view overlay">
										<img src="{{ asset('photos/hotels/'.$datas->background_photo) }}" class="card-img-top" alt="">
										<a href="hotelSolo.html">
											<div class="mask rgba-white-slight"></div>
										</a>
									</div>
									<!--/.Card image-->

									<!--Card content-->
									<div class="card-body mx-4">
										<a href="hotelSolo.html" class="teal-text text-center text-uppercase font-small">
											<h6 class="mb-3 mt-3 text-left">
												<div>
													@for($i=0; $i<$datas->rating_star; $i++)
														<i class="fas fa-star"></i>
														@endfor
												</div>
											</h6>
										</a>
										<h5 class="card-title">
												<strong>{{$datas->hotel_name}}</strong>
											</h5>
											<hr>
										<div style="overflow:hidden; height:120px; margin-top:-20px">
										<p class="dark-grey-text mb-4">
											<?php echo $datas->first_part; ?>
										</p>
										</div>
										<br>
										<p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
											<a href="{{url('/show_hotelSolo/'.$datas->id)}}">read more
												<i class="fas fa-chevron-right" aria-hidden="true"></i>
											</a>
										</p>
									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->

							</div>
							<!--Grid column-->
						@endforeach
						</div>
						<!-- Grid row -->
					</section>
					<!--Section: Blog v.3-->

					<!--Pagination dark grey-->
					<nav class="mb-5 pb-2">
						<ul class="pagination pg-darkgrey flex-center">
							<!--Numbers-->
							<li class="page-item">
								{{ $data->links() }}
							</li>
						</ul>
					</nav>
					<!--Pagination dark grey-->

				</div>
				<!--Main listing-->
			</div>
			<!--Blog-->
		</div>
	</div>
</section>
<!--Hotel section-->
@endsection('content')