@extends("dashboard.layouts.app")

@section("title", "Create About")

@section("css")
<link href="{{ asset('metronic/assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section("content")
<div class="portlet light ">
        <div class="portlet-body form">
<form method="post" enctype="multipart/form-data" action="{{ route('PostTest') }}" role="form">
    @csrf
         <div class="card-body">
            <div class="form-group">
                <label for="title">name</label>
                <input  type="text"  class="form-control" id="name" name="name" placeholder="Enter comment Name">
            </div>
       <div class="form-group">
                    <div class="form-group form-md-line-input has-success">
                        <input type="file" name="imageFile" class="form-control custom-file-input" id="form_control_1">
                        <label for="form_control_1">Image</label>
                    </div>
            </div>
     <div class="form-body">
            <div class="form-group has-success">
               <label for="description">description</label>
             <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>
    </div>

    <div class="form-check">
        <input {{ old('published')?"checked":"" }} value='1' type="checkbox" name='published' class="form-check-input" id="published">
        <label class="form-check-label" for='published'>Published</label>
    </div>
    <div class="card-footer mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
         <a class='btn btn-default' href='{{ route("test") }}'>Cancel</a>
    </div>
</form>
</div>
    </div>
@endsection

@section("js")
<!-- <script src="{{ asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script> -->
    <script type="text/javascript">
    /*$(document).ready(function () {
      bsCustomFileInput.init();
    });*/
    </script>

<script src="{{ asset('metronic/assets/global/plugins/bootstrap-summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script>
        $("#whyUs").summernote({height:300});
    </script>

@endsection