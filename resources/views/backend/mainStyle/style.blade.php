<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bagan - Code-X</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/summernote/dist/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/jquery-steps/css/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/nestable/css/nestable.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/sweetalert/css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/toastr/css/toastr.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/nouislider/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/highlightjs/styles/darkula.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <link href="{{asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="{{asset('plugins/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="{{asset('plugins/jquery-asColorPicker-master/css/asColorPicker.css')}}" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="{{asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color:#2d2e33">
            <div class="brand-logo">
                <a href="{{route('index')}}">
                    <span class="logo-compact"><img src="{{ asset('images/frontend/logo1.png') }}" style="width:100px" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('images/frontend/logo1.png') }}" style="width:100px" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header" style="background-color:#52d2b4">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <!-- <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href=""><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href=""><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href=""><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label"><b>Pagodas</b></li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Pagoda</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_pagoda') }}">Add new Pagoda</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-label"><b>Hotels</b></li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Hotel</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_hotel') }}">Add new Hotel</a></li>
                        </ul>
                    </li>
                    <li class="nav-label"><b>Articles</b></li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Article</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_article') }}">Add new Article</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        @yield('content')
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Code-X</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="./plugins/common/common.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/settings.js"></script>
    <script src="./js/gleek.js"></script>
    <script src="./js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/plugins-init/chartjs-init.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <script src="./js/plugins-init/morris-init.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="./js/plugins-init/chartist.init.js"></script>
    <!-- Table -->
    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    <!--  flot-chart js -->
    <script src="./plugins/flot/js/jquery.flot.min.js"></script>
    <script src="./plugins/flot/js/jquery.flot.pie.js"></script>
    <script src="./plugins/flot/js/jquery.flot.resize.js"></script>
    <script src="./plugins/flot/js/jquery.flot.spline.js"></script>
    <script src="./plugins/flot/js/jquery.flot.init.js"></script>
    <!-- peity -->
    <script src="./plugins/peity/jquery.peity.min.js"></script>
    <script src="./js/plugins-init/peitychart.init.js"></script>
    <!-- sparkline -->
    <script src="./plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="./js/plugins-init/sparkline.init.js"></script>
    
    <!-- form-picker -->
    <script src="./plugins/moment/moment.js"></script>
    <script src="./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="./plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="./plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="./plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- uc nestedable -->
    <script src="./plugins/nestable/js/jquery.nestable.js"></script>
    <script src="./plugins/nestable/js/nestable.init.js"></script>
    <!-- uc noui slider -->
    <script src="./plugins/nouislider/nouislider.min.js"></script>
    <script src="./plugins/wnumb/wNumb.js"></script>
    <script src="./js/plugins-init/nouislider-init.js"></script>
    <!-- uc sweetalert -->
    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="./plugins/sweetalert/js/sweetalert.init.js"></script>
    <!--uc Toastr -->
    <script src="./plugins/toastr/js/toastr.min.js"></script>
    <script src="./plugins/toastr/js/toastr.init.js"></script>


    <script src="./js/plugins-init/form-pickers-init.js"></script>
    <!-- end form color picker -->

    <!-- form-step -->
    <script src="./plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="./plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="./js/plugins-init/jquery-steps-init.js"></script>
    <!-- end form step -->

    <!-- form validation -->
    <script src="./plugins/validation/jquery.validate.min.js"></script>
    <script src="./plugins/validation/jquery.validate-init.js"></script>
    <!-- end form validation -->

    <script src="./js/dashboard/dashboard-1.js"></script>
    <script src="./js/dashboard/dashboard-2.js"></script>   
    
    <script src="./plugins/summernote/dist/summernote.min.js"></script>
    <script src="./plugins/summernote/dist/summernote-init.js"></script>

    <!-- start layout box -->
    <script src="./plugins/highlightjs/highlight.pack.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    

    <script>
            (function($) {
            "use strict"
    
                new quixSettings({
                    version: "light", //2 options "light" and "dark"
                    layout: "vertical", //2 options, "vertical" and "horizontal"
                    navheaderBg: "color_1", //have 10 options, "color_1" to "color_10"
                    headerBg: "color_1", //have 10 options, "color_1" to "color_10"
                    sidebarStyle: "vertical", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
                    sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
                    sidebarPosition: "static", //have two options, "static" and "fixed"
                    headerPosition: "static", //have two options, "static" and "fixed"
                    containerLayout: "boxed",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                    direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
                });
    
    
            })(jQuery);
    </script>
    <!-- end layout box -->
    <script src="./js/dashboard/dashboard-2.js"></script>    


    <script>
        window.localStorage.clear();
        $(document).ready(function () {

$('#list-items').html(localStorage.getItem('listItems'));

$('.add-items').submit(function(event) 
{
event.preventDefault();

var item = $('#todo-list-item').val();
if(item) 
{
$('#list-items').append("<li><div class='round d-inline-block'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>" + item + "</label><a class='remove'><i class='fa fa-trash'></i></a></li>");

localStorage.setItem('listItems', $('#list-items').html());

$('#todo-list-item').val("");
}

});

$(document).on('change', '.checkbox', function() 
{
if($(this).attr('checked')) 
{
$(this).removeAttr('checked');
} 
else 
{
$(this).attr('checked', 'checked');
}

$(this).parent().toggleClass('completed');

localStorage.setItem('listItems', $('#list-items').html());
});

$(document).on('click', '.remove', function() 
{
$(this).parent().remove();

localStorage.setItem('listItems', $('#list-items').html());
});

});
    </script>
</body>

</html>