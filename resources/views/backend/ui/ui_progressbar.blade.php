@extends('backend.mainStyle.style')

@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Progress bars</h4>
                                <div class="progress" style="height: 9px;">
                                    <div class="progress-bar bg-danger" style="width: 60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Progress bars</h4>
                                <div class="progress" style="height: 9px">
                                    <div class="progress-bar bg-success" style="width: 75%;" role="progressbar">75%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Striped Progress bar</h4>
                                <div class="progress" style="height: 9px">
                                    <div class="progress-bar bg-info progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Colored bars</h4>
                                <div class="progress mb-3" style="height: 9px">
                                    <div class="progress-bar bg-danger" style="width: 60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 9px">
                                    <div class="progress-bar bg-info" style="width: 40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 9px">
                                    <div class="progress-bar bg-success" style="width: 20%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 9px">
                                    <div class="progress-bar bg-primary" style="width: 30%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 9px">
                                    <div class="progress-bar bg-warning" style="width: 80%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 9px">
                                    <div class="progress-bar bg-inverse" style="width: 40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Different bar sizes</h4>
                                <div class="progress mb-3" style="height: 9px">
                                    <div class="progress-bar bg-danger" style="width: 60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 11px">
                                    <div class="progress-bar bg-info" style="width: 40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 13px">
                                    <div class="progress-bar bg-success" style="width: 20%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 15px">
                                    <div class="progress-bar bg-primary" style="width: 30%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 18px">
                                    <div class="progress-bar bg-warning" style="width: 80%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Striped bar</h4>
                                <div class="progress mb-3" style="height: 9px">
                                    <div class="progress-bar active progress-bar-striped bg-danger" style="width: 60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 11px">
                                    <div class="progress-bar bg-info active progress-bar-striped" style="width: 40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 13px">
                                    <div class="progress-bar bg-success active progress-bar-striped" style="width: 20%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 15px">
                                    <div class="progress-bar bg-primary active progress-bar-striped" style="width: 30%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 18px">
                                    <div class="progress-bar bg-warning active progress-bar-striped" style="width: 80%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vertical Progress bars</h4>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-danger" style="width:7px; height:60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-info" style="width:7px; height:80%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-success" style="width:7px; height:60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-primary" style="width:7px; height:40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-warning" style="width:7px; height:30%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">From bottom</h4>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar bg-danger" style="width:7px; height:60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar bg-info" style="width:7px; height:80%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar bg-success" style="width:7px; height:60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar bg-primary" style="width:7px; height:40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar bg-warning" style="width:7px; height:30%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Different size Progress bars</h4>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-danger" style="width:7px; height:60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-info" style="width:9px; height:80%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-success" style="width:11px; height:60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-primary" style="width:13px; height:40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar bg-warning" style="width:16px; height:30%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> bars</h4>
                                <div class="progress mb-3" style="height: 7px">
                                    <div class="progress-bar bg-danger wow  progress-" style="width: 60%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 9px;">
                                    <div class="progress-bar bg-info wow  progress-" style="width: 40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 11px;">
                                    <div class="progress-bar bg-success wow  progress-" style="width: 20%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 13px;">
                                    <div class="progress-bar bg-primary wow  progress-" style="width: 30%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 15px;">
                                    <div class="progress-bar bg-warning wow  progress-" style="width: 80%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 17px;">
                                    <div class="progress-bar bg-inverse wow  progress-" style="width: 40%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">SKILL BARS</h4>
                                <h5 class="mt-3">Photoshop <span class="float-right">85%</span></h5>
                                <div class="progress" style="height: 9px">
                                    <div class="progress-bar bg-danger wow  progress-" style="width: 85%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <h5 class="mt-3">Code editor <span class="float-right">90%</span></h5>
                                <div class="progress" style="height: 9px">
                                    <div class="progress-bar bg-info wow  progress-" style="width: 90%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <h5 class="mt-3">Illustrator <span class="float-right">65%</span></h5>
                                <div class="progress" style="height: 9px">
                                    <div class="progress-bar bg-success wow  progress-" style="width: 65%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection