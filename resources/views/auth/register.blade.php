@extends('layouts.base')

@section('content')

<style>
        [type="text"]:focus,
        [type="email"]:focus,
        [type="url"]:focus,
        [type="password"]:focus,
        [type="number"]:focus,
        [type="date"]:focus,
        [type="datetime-local"]:focus,
        [type="month"]:focus,
        [type="search"]:focus,
        [type="tel"]:focus,
        [type="time"]:focus,
        [type="week"]:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {

            box-shadow: none !important;
            border-color: transparent !important;
        }
    </style>
    <!-- Sign Up Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="login-title">
                        <h2>Tạo Tài Khoản</h2>
                    </div>

                    <div class="input">
                        <label for="name">Tên</label>
                        <input type="text" id="name" class="block mt-1 w-full" type="text" name="Tên" :value="old('name')" required="" autofocus="" autocomplete="name">
                        @error('name') <span class="text-danger mt-3">{{$message}}</span>  @enderror
                    </div>

                    <div class="input">
                        <label for="emailname">Địa Chỉ Email</label>
                        <input type="email" id="emailname" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required="" autocomplete="username">
                        @error('email') <span class="text-danger mt-3">{{$message}}</span>  @enderror
                    </div>

                    <div class="input">
                        <label for="pass">Mật Khẩu</label>
                        <input type="password" id="pass" class="block mt-1 w-full" name="mật khẩu" required="" autocomplete="new-password">
                        @error('password') <span class="text-danger mt-3">{{$message}}</span>  @enderror
                    </div>

                    <div class="input">
                        <label for="compass">Nhập Lại Mật Khẩu</label>
                        <input type="password" id="compass" class="block mt-1 w-full" name="password_confirmation" required="" autocomplete="new-password">
                    </div>

                    <div class="button login">
                        <button type="submit">
                            <span>Đăng Kí</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
            <p><a href="{{route('login')}}" class="theme-color">Bạn co săn san để tạo một tai khoản?</a></p>
        </div>
    </div>

    <!-- Sign Up Section End -->

@endsection
