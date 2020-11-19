@extends('layouts.master')

@section('content')
<section>
	<div class="">
		<img src="{{ asset('photos/articles/'.$data->background_photo) }}" style="height:100%; width: 100%">
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

						<div class="container pt-2">
							<h1 class="text-center h1 mb-2">
								<strong>{{$data->article_title}}</strong>
							</h1>
							<?php echo $data->first_part; ?>
							<!--Grid row-->
							<div class="row mt-3 mb-4">
								<!--Grid column-->
								<div class="col-md-4 mb-2">
									<div class="view zoom z-depth-1">
										<img src="{{ asset('photos/articles/'.$data->first_photo) }}" style="height: 250px; width:100%;" class="img-fluid rounded-0 z-depth-1" alt="sample-image">
										<div class="mask flex-center">

										</div>
									</div>
								</div>
								<!--Grid column-->

								<!--Grid column-->
								<div class="col-md-4 mb-2">
									<div class="view zoom z-depth-1">
										<img src="{{ asset('photos/articles/'.$data->second_photo) }}" style="height: 250px; width:100%;" class="img-fluid rounded-0 z-depth-1" alt="sample-image">
										<div class="mask flex-center">

										</div>
									</div>

								</div>
								<!--Grid column-->

								<!--Grid column-->
								<div class="col-md-4">
									<div class="view zoom z-depth-1">
										<img src="{{ asset('photos/articles/'.$data->third_photo) }}" style="height: 250px; width:100%;" class="img-fluid rounded-0 z-depth-1" alt="sample-image">
										<div class="mask flex-center">

										</div>
									</div>

								</div>
								<!--Grid column-->
							</div>
							<!--Grid row-->
							<?php echo $data->second_part; ?>
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