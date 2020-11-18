@extends('backend.mainStyle.style')

@section('content')
<!--**********************************
            Content body start
 ***********************************-->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="content-body">

    <div class="container-fluid" style="margin-top: -50px">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <form action="{{route('createArticle')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3 style="text-align: center; margin-top: 50px">Add New Article</h3>
                        <h4>Background Heading Photo</h4>
                        <input type="file" name="background_photo" id=""><br><br>
                        <h4>First Part</h4>
                        <textarea id="summernote" name="first_part"></textarea><br><br>
                        <h4>Please Add Relevent Three Photos</h4>
                        <input type="file" name="first_photo" id=""><br>
                        <input type="file" name="second_photo" id=""><br>
                        <input type="file" name="third_photo" id=""><br><br>
                        <h4>Second Part</h4>
                        <textarea id="summernote_2" name="second_part"></textarea><br>
                        <h4>Article Title</h4>
                        <input type="text" name="article_title" id="" placeholder="Enter Article Title"><br><br>
                        <h4>News Date</h4>
                        <input type="date" name="datepicker" id=""><br><br>
                        <h4>Category</h4>
                        Popular : 
                        <input type="checkbox" name="popular" value="1" id=""><br>
                        Local : 
                        <input type="checkbox" name="local" value="1" id=""><br>
                        Global : 
                        <input type="checkbox" name="global" value="1" id=""><br>
                        Environmental : 
                        <input type="checkbox" name="environmental" value="1" id=""><br><br>
                        <input type="submit" class="btn btn-primary align-center" value="Add"><br><br>
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