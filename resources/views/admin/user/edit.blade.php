@extends('admin.layouts.layouts')
@section('title', 'User')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa thông tin người dùng: {{$user->name}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang admin</a></li>
                        <li class="breadcrumb-item">Người dùng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <span style="float: right;font-size:12px; margin-top:1%; width: 8rem">(<i class="fas fa-star " style=" margin:5% 0; width: 10%;
                            font-size:8px;color: red"></i>: Required field)</span>
                        <a href="{{route('admin.user.index')}}" class="btn btn-info btn-sm">Trở lại</a>
                    </div>
                    <br />
                    <div class="invoice p-3 mb-3">
                        <form action="{{route('admin.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group @error('name') has-error has-feedback @enderror col-12">

                                <label>Tên người dùng:</label> <i class="fas fa-star" style=" width: 10%;
                                    font-size:8px;color: red"></i>

                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $user->name }}">
                                <span class="text-danger">{{$errors->first('name')}}</span>

                            </div>
                            <div class="form-group @error('gender') has-error has-feedback @enderror">
        
                                <label>Giới tính:</label>

                                <select name="gender" id="" class="form-control input-sm">
                                    <option value="1" {{ ($user->gender == 1)? "selected" : "" }}>Nam</option>
                                    <option value="0" {{ ($user->gender ==0)? "selected" : "" }}>Nữ</option>
                                </select>     
                                <span class="text-danger">{{$errors->first('gender')}}</span>

                            </div>
                            <div class="form-group @error('user_type') has-error has-feedback @enderror">

                                <label>Loại tài khoản</label> <i class="fas fa-star" style=" width: 10%;
                                font-size:8px;color: red"></i>

                                <select name="user_type" id="" class="form-control input-sm">
                                    <option value="admin" {{ ($user->user_type=='admin')? "selected" : "" }}>admin</option>
                                    <option value="merchant" {{ ($user->user_type=='merchant')? "selected" : "" }}>merchant</option>
                                    <option value="customer" {{ ($user->user_type=='customer')? "selected" : "" }}>customer</option>
                                </select>  
                                <span class="text-danger">{{$errors->first('user_type')}}</span>

                            </div>
                            <div class="form-group @error('email') has-error has-feedback @enderror">

                                <label>Email
                                </label> <i class="fas fa-star" style=" width: 10%;
                                    font-size:8px;color: red"></i>

                                <input type="email" class="form-control input-sm" name="email"
                                value="{{ $user->email }}" required>
                                <span class="text-danger">{{$errors->first('email')}}</span>


                            </div>
                            <div class="form-group @error('password') has-error has-feedback @enderror">

                                <label>Mật khẩu
                                </label> <i class="fas fa-star" style=" width: 10%;
                                    font-size:8px;color: red"></i>

                                <input type="password" id="password" class="form-control input-sm"
                                    name="password"  onkeyup="checkPass(); return false;">
                                <span id="error" ></span>

                            </div>
                            <div class="form-group @error('password_confirmation') has-error has-feedback @enderror">

                                <label>Nhập lại mật khẩu</label> <i class="fas fa-star" style=" width: 10%;
                                    font-size:8px;color: red"></i>

                                <input type="password" id="confirm_password" class="form-control input-sm"
                                    name="password_confirmation" onkeyup="checkPass(); return false;">
                                <span id="error-nwl"></span>

                            </div>

                            <div class="form-group @error('phone') has-error has-feedback @enderror">

                                <label>Số điện thoại</label>

                                <input type="text" class="form-control input-sm"
                                    name="phone" value="{{ $user->phone }}" >
                                <span class="text-danger">{{$errors->first('phone')}}</span>

                            </div>
                            <div class="form-group @error('address') has-error has-feedback @enderror">

                                <label>Địa chỉ</label>

                                <input type="text" class="form-control input-sm "
                                    name="address" value="{{$user->address}}" >
                                <span class="text-danger">{{$errors->first('address')}}</span>

                            </div>

                            <div class="form-group @error('avatar') has-error has-feedback @enderror">

                                <label>Ảnh đại diện</label>
                                <input type="file" class="form-control input-sm" name="avatar" id="avatar" onchange="readURL(event)">
                               <img id="image_post" src=" data:image;base64,{{$user->avatar}}" alt="{{$user->name}}" width="80px" height="80px" />

                            </div>

                            <button  onClick="checkPass();" type="submit" class="btn btn-primary">Sửa</button>

                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Thoát
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
@push('js_editUser')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#image_post').attr('src', e.target.result)
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#avatar").change(function() {
        readURL(this);
    });
</script>
<script>
 function checkPass()
{
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('confirm_password');
    var message = document.getElementById('error');
    var message1 = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var borderGood = "2px solid #66cc66";
    var badColor = "#ff6666";
    var borderBad = "2px solid #ff6666";
    var borderWhite = "1px solid #ced4da";
    var whiteColor = "#fff";
 	
    if(pass1.value.length == 0){
        pass1.style.border = borderWhite;
        message.style.color = whiteColor;

        message.innerHTML= "";
    }else if(pass1.value.length > 5)
    {
        pass1.style.border = borderGood;
        message.style.color = goodColor;
        message.innerHTML = "Enough characters!"
    }
    else
    {
        pass1.style.border = borderBad;
        message.style.color = badColor;
        message.innerHTML = " You have to enter at least 6 digit!"
        return;
    }
    if(pass2.value.length == 0){
        pass2.style.border = borderWhite;
        message1.style.color = whiteColor;

        message1.innerHTML= "";
    }else 
    if(pass1.value == pass2.value)
    {
        pass2.style.border = borderGood;
        message1.style.color = goodColor;
        message1.innerHTML = "These passwords matched"
    }
	else
    {
        pass2.style.border = borderBad;
        message1.style.color = badColor;
        message1.innerHTML = " These passwords don't match!"
        return;
    }
}  
</script>
@endpush