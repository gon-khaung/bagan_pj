@extends('backend.mainStyle.style')

@section('content')
<!--**********************************
            Content body start
 ***********************************-->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="content-body">

    <div class="container-fluid">
        <div class="row" style="margin-top: -10px;">
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{route('createHotel')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3 style="text-align: center;" style="margin-top: 200px;">Add New Hotel</h3>
                        <h4>Background Heading Photo</h4>
                        <input type="file" name="background_photo" id=""><br><br>
                        <h4>First Part</h4>
                        <textarea id="summernote" name="first_part"></textarea><br>
                        <h4>Please Add Relevent Three Photos</h4>
                        <input type="file" name="first_photo" id=""><br><br>
                        <input type="file" name="second_photo" id=""><br><br>
                        <input type="file" name="third_photo" id=""><br><br>
                        <h4>Second Part</h4>
                        <textarea id="summernote_2" name="second_part"></textarea><br><br>
                        <h4>Enter Hotel Name</h4>
                        <input type="text" name="hotel_name" id="" placeholder="Enter Hotel Name">
                        <select name="rating_star" id="">
                            <option value="5">Five star</option>
                            <option value="4">Four star</option>
                            <option value="3">Three star</option>
                            <option value="2">Two star</option>
                            <option value="1">One star</option>
                        </select><br><br>
                        <h4>Select Three nearest pagoda.</h4>
                        <select name="near_hotel_1" id="">
                            @foreach($data as $datas)
                            <option value="{{$datas->id}}">{{$datas->pagoda_name}}</option>
                            @endforeach
                        </select>
                        <select name="near_hotel_2" id="">
                        @foreach($data as $datas)
                            <option value="{{$datas->id}}">{{$datas->pagoda_name}}</option>
                            @endforeach
                        </select>
                        <select name="near_hotel_3" id="">
                        @foreach($data as $datas)
                            <option value="{{$datas->id}}">{{$datas->pagoda_name}}</option>
                            @endforeach
                        </select><br><br>
                        <input type="submit" class="btn btn-primary align-center" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div><!-- #/ container -->
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    $(document).ready(function() {
        $('#summernote_2').summernote();
    });
</script>
<!--**********************************
            Content body end
        ***********************************-->
@endsection