@extends('admin.layouts.layouts')

@section('title', 'Slide')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
        <div class="pull-left">
            <h2>Thêm ảnh</h2>
        </div>
        @include('partials.message')
        <div class="pull-right">
            <a href="{{route('admin.slide.index')}}" class="btn btn-primary">Trở lại</a>
        </div>
    </div>
</div>
<form action="{{route('admin.slide.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row"></div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ảnh :</strong>
            <input type="file" class="form-control" name="image" id="image" onchange="uploadFile(event)">
            <span class="text-danger">{{$errors->first('image')}}</span>
            <img id="image_post" src="http://tabern.vietprojectgroup.com/images/user.png" alt="" width="80px" height="80px" />

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
    </div>
</form>
@endsection
@push('edit_slides')
<script>
    function uploadFile(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#image_post').attr('src', e.target.result)
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function() {
        readURL(this);
    });
</script>
@endpush
