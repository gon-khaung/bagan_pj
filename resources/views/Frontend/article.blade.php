@extends('layouts.master')

@section('content')
<!--Main layout-->
<main>

    <!--Intro-->
    <section>
        <div class="container-fluid">

            <!--Excerpt-->
            <br>
            <h1 class="text-center dark-grey-text pb-3 mt-5 pt-5">
                <strong>BAGAN</strong> NEWS</h1>


            <!--Grid row-->
            <div class="row flex-center">

                <!--Grid column-->
                <div class="col-md-10 col-xl-5">

                    <p class="grey-text text-center">
                        <em>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas. Nemo enim ipsam
                            voluptatem quia voluptas sit aspernatur."</em>
                    </p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </section>
    <!--/Intro-->

    <!--Blog section-->
    <section>
        <div class="container-fluid grey lighten-4">
            <hr class="my-5">
            <div class="container">

                <!--Blog-->
                <div class="row mt-5 pt-3">

                    <!--Main listing-->
                    <div class="col-lg-8 col-12 mt-1 mx-lg-4">

                        <!--Section: Blog v.3-->
                        <section class="section extra-margins pb-3 text-center text-lg-left">


                            <!--Grid row-->
                            <div class="row text-center">
                                @foreach($data as $datas)
                                <!--Grid column-->
                                <div class="col-md-6 mb-4">
                                    <!--Card-->
                                    <div class="card text-left" style="height:550px">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="{{ asset('photos/articles/'.$datas->background_photo) }}" style="height:250px;" class="card-img-top" alt="">
                                            <a href="{{ url('/show_articleSolo/'.$datas->id) }}">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-body mx-4">
                                            <a href="{{ url('/show_articleSolo/'.$datas->id) }}" class="teal-text text-center text-uppercase font-small">
                                                <h6 class="mb-3 mt-3">
                                                    <strong>Bagan</strong>
                                                    <a class="dark-grey-text font-small"> - {{$datas->date}}</a>
                                                </h6>
                                            </a>
                                            <!--Title-->
                                            <h4 class="card-title">
                                                <strong>{{$datas->article_title}}</strong>
                                            </h4>
                                            <hr>
                                            <!--Text-->
                                            <!-- <p class="dark-grey-text mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                laudantium, totam aperiam.</p> -->
                                            <div style="overflow:hidden; height:120px; margin-top:-20px">
                                                <p class="dark-grey-text mb-4">
                                                    <?php echo $datas->first_part; ?>
                                                </p>
                                            </div>
                                            <br>
                                            <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                                <a href="{{ url('/show_articleSolo/'.$datas->id) }}">read more
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
                            <!--/Grid row-->

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

                    <!--Sidebar-->
                    <div class="col-lg-3 col-12 mt-1">

                        <!-- Section: Categories -->
                        <section class="section mb-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>CATEGORIES</strong>
                                    </p>

                                    <ul class="list-group my-4">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="{{url('/articles/category/1')}}">
                                                <p class="mb-0">Latest</p>
                                            </a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="{{url('/articles/category/2')}}">
                                                <p class="mb-0">Popular</p>
                                            </a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="{{url('/articles/category/3')}}">
                                                <p class="mb-0">Local</p>
                                            </a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="{{url('/articles/category/4')}}">
                                                <p class="mb-0">Global</p>
                                            </a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="{{url('/articles/category/5')}}">
                                                <p class="mb-0">Environmental</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </section>
                        <!-- Section: Categories -->

                        <!-- Section: Featured posts -->
                        <section class="section widget-content mb-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                    <strong>POPULAR POSTS</strong>
                                </p>
                                @foreach($popin as $popins)
                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="{{asset('photos/articles/'.$popins->background_photo)}}" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>{{$popins->article_title}}</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="far fa-clock-o"></i> {{$popins->date}}</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>
                                @endforeach
                            </div>
                        </section>
                        <!--/ Section: Featured posts -->



                        <!--Archive-->
                        <section class="archive mb-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>ARCHIVE</strong>
                                    </p>

                                    <!--Grid row-->
                                    <div class="row mb-4">

                                        <!--Grid column-->
                                        <div class="col-md-12 text-center">

                                            <!--List-->
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="{{url('/articles/archive/12')}}" class="dark-grey-text">December 2020</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="{{url('/articles/archive/11')}}" class="dark-grey-text">November 2020</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="{{url('/articles/archive/10')}}" class="dark-grey-text">October 2020</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="{{url('/articles/archive/9')}}" class="dark-grey-text">September 2020</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="{{url('/articles/archive/8')}}" class="dark-grey-text">August 2020</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="{{url('/articles/archive/7')}}" class="dark-grey-text">July 2020</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="{{url('/articles/archive/6')}}" class="dark-grey-text">June 2020</a>
                                                    </p>
                                                </li>
                                            </ul>
                                            <!--List-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </div>

                            </div>
                            <!--/ Card -->

                        </section>
                        <!--Archive-->
                    </div>
                    <!--Sidebar-->

                </div>
                <!--Blog-->

            </div>

        </div>
    </section>
    <!--Blog section-->

</main>
<!--Main layout-->
@endsection('content')