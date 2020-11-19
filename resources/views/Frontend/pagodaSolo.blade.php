@extends('layouts.master')

@section('content')
<section>
	<div class="">
		<img src="{{ asset('photos/pagodas/'.$data->background_photo) }}" style="height:100%; width: 100%">
	</div>
	</div>
</section>

<!--Main Layout-->
<main>

	<div class="container-fluid mb-5">

		<!--Grid row-->
		<div class="row" style="margin-top: -250px;">

			<!--Grid column-->
			<div class="col-md-12 solo">
				<!--Card-->
				<div class="card hoverable pb-5 mx-md-3">
					<div class="card-body">

						<div class="container pt-5">
							<!--Section heading-->
							<h1 class="text-center h1 mb-2">
								<strong>{{$data->pagoda_name}}</strong>
							</h1>
							<?php echo $data->first_part; ?>
							<!--Grid row-->
							<div class="row mt-3 mb-4">
								<!--Grid column-->
								<div class="col-md-4 mb-2">
									<div class="view zoom z-depth-1">
										<img src="{{ asset('photos/pagodas/'.$data->first_photo) }}" style="height: 250px; width:100%;" class="img-fluid rounded-0 z-depth-1" alt="sample-image">
										<div class="mask flex-center">

										</div>
									</div>
								</div>
								<!--Grid column-->

								<!--Grid column-->
								<div class="col-md-4 mb-2">
									<div class="view zoom z-depth-1">
										<img src="{{ asset('photos/pagodas/'.$data->second_photo) }}" style="height: 250px; width:100%;" class="img-fluid rounded-0 z-depth-1" alt="sample-image">
										<div class="mask flex-center">

										</div>
									</div>

								</div>
								<!--Grid column-->

								<!--Grid column-->
								<div class="col-md-4">
									<div class="view zoom z-depth-1">
										<img src="{{ asset('photos/pagodas/'.$data->third_photo) }}" style="height: 250px; width:100%;" class="img-fluid rounded-0 z-depth-1" alt="sample-image">
										<div class="mask flex-center">

										</div>
									</div>

								</div>
								<!--Grid column-->
							</div>
							<!--Grid row-->
							<?php echo $data->second_part; ?>
							<hr>
							<!--Posts-->
							<section class="text-left mt-4">

								<h4 class="font-weight-bold mt-5 mb-3">
									<strong>| HOTELS NEAR PAGODA</strong>
								</h4>

								<!--Carousel Wrapper-->
								<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

									<!--Indicators-->
									<ol class="carousel-indicators">
										<li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
										<li data-target="#multi-item-example" data-slide-to="1"></li>
										<li data-target="#multi-item-example" data-slide-to="2"></li>
									</ol>
									<!--/.Indicators-->

									<!--Slides-->
									<div class="carousel-inner" role="listbox">

										<!--First slide-->
										<div class="carousel-item active">

											<!--Grid row-->
											<div class="row">
												@foreach($near_pagoda_data as $near)
												<!--Grid column-->
												<div class="col-lg-4 mb-4">
													<!--Card-->
													<div class="card" style="height: 400px;">

														<!--Card image-->
														<div class="view overlay rgba-white-slight" style="height: 70%;">
															<img src="{{ asset('photos/pagodas/'.$near->background_photo) }}" style="height: 100%;" class="card-img-top" alt="sample image">
															<a>
																<div class="mask"></div>
															</a>
														</div>
														<!--/.Card image-->

														<!--Card content-->
														<div class="card-body">
															<!--Title-->
															<h4 class="card-title">
																<strong>{{$near->hotel_name}}</strong>
															</h4>
															<hr>


															<p class="text-right font-small font-weight-bold mt-4">
																<a href="{{ url('/show_hotelSolo/'.$near->id) }}">read more
																	<i class="fas fa-angle-right"></i>
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
											<!--/Grid row-->
											<!--Pagination dark grey-->
											<nav class="mb-5 pb-2">
													<ul class="pagination pg-darkgrey flex-center">
														<!--Numbers-->
														<li class="page-item">
															{{ $near_pagoda_data->links() }}
														</li>
													</ul>
												</nav>
												<!--Pagination dark grey-->
										</div>
										<!--/.First slide-->

									</div>
									<!--/.Slides-->

								</div>
								<!--/.Carousel Wrapper-->


							</section>
							<!--/.Posts-->

						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->

				</div>
				<!--/Card-->
			</div>
			<!--/Grid column-->
		</div>
		<!--/Grid row-->
</main>
<!--Main Layout-->

@endsection('content')