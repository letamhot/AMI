@extends('admin.layouts.layouts')

@section('title', 'Profile')

@section('content')
<style>
    label {
        color: rgba(85, 85, 85, .8);
    }
</style>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('details.profile') }}"><i class="fa fa-home"></i> Thông tin cá nhân </a><i class="fa fa-angle-right"></i>
                    <span> Change phone number</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Thay đổi số điện thoại
                    </h2>
                    <span style="text-align: center">Để cập nhật điện thoại mới, vui lòng xác nhận bằng cách nhập mật khẩu hiện tại
                    </span>
                    <hr>

                    <form action="{{ route('verifyPhone') }}" method="post" class="beta-form-checkout">
                        @csrf

                        <table>
                            <tr>
                                <td><label for="">Số điện thoại: &nbsp;</label> </td>
                                <td>
                                    (+84) {{ $user->phone }}
                                </td>
                            </tr>
                        </table><br>

                        <div class="form-input @error('phone') has-error has-feedback @enderror">
                            <label for="phone">Nhập số điện thoại mới</label>
                            <input type="phone" id="phone" name="phone"
                                class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                                autocomplete="phone" autofocus required>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><br>

                        <div class="form-input has-error has-feedback">

                            <label for="current_password">Xác nhận mật khẩu</label>

                            <input type="password" id="password" name="current_password"
                                class="form-control @error('current_password') is-invalid @enderror" required
                                autocomplete="current_password">

                            @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <br><br>

                        <button type="submit" class="btn btn-info">Xác nhận</button>
                        <a type="submit" style="float:right" href="{{ route('details.profile') }}"
                            class="btn btn-danger">Thoát</a>
                    </form>

                    {{-- <div class="switch-login">
                        <a href="{{ route('details.profile') }}" class="or-login">Cancle</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>
<!-- Register Form Section End -->

@endsection
