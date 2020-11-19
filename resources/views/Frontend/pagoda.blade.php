@extends('layouts.master')

@section('content')
<!-- Hotel Body Start -->
<h1 class="text-center mb-5" style="font-family: lobster;color: #2d2e33; padding-top:100px">Famous Pagoda In Bangan
</h1>
<!-- Search form -->
<div class="col-6 m-auto">
	<div class="active-cyan-4 mb-4">
		<form action="{{route('search_pagodas')}}" method="post">
			@csrf
		<input class="form-control" type="text" name="search" placeholder="Search Pagodas" aria-label="Search">
		<button type="submit" class="btn btn-success">Search</button>
		</form>
	</div>
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
								<div class="card text-left" style="height: 500px;">
									<!--Card image-->
									<div class="view overlay">
										<img src="{{ asset('photos/pagodas/'.$datas->background_photo) }}" style="height: 250px;" class="card-img-top" alt="">
										<a href="hotelSolo.html">
											<div class="mask rgba-white-slight"></div>
										</a>
									</div>
									<!--/.Card image-->

									<!--Card content-->
									<div class="card-body mx-4">
										<h5 class="card-title">
												<strong>{{$datas->pagoda_name}}</strong>
											</h5>
											<hr>
										<div style="overflow:hidden; height:120px; margin-top:-20px">
										<p class="dark-grey-text mb-4">
											<?php echo $datas->first_part; ?>
										</p>
										</div>
										<br>
										<p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
											<a href="{{url('/show_pagodaSolo/'.$datas->id)}}">read more
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