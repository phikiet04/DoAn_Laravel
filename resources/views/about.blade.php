@extends('layouts.base')
@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Về Chúng Tôi</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('app.index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Về Chúng Tôi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- team leader section Start -->
    <section class="overflow-hidden">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-5 offset-xl-1">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <img src="assets/images/inner-page/review-image/6.jpg"
                                class="img-fluid rounded-3 about-image" alt="">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/inner-page/review-image/7.jpg"
                                class="img-fluid rounded-3 about-image" alt="">
                        </div>
                        <div class="col-12 ratio_40">
                            <div>
                                <img src="assets/images/inner-page/review-image/8.jpg"
                                    class="img-fluid rounded-3 team-image bg-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="about-details">
                        <div>
                            <h2>CHÚNG TA LÀ AI</h2>
                            <h3>Điểm đến thời trang trực tuyến lớn nhất</h3>
                            <p>Bản thân công ty đã là một công ty rất thành công. Toàn bộ sự việc, là lỗi! Khó khăn hơn với công việc
                                không ai ghét bất cứ điều gì, và để có được nó, ở đây, hãy để một điều gì đó trong tâm trí chạy trốn khỏi hiện tại.
                                Nhìn này, nhanh lên!</p>
                            <p>Bản thân công ty đã là một công ty rất thành công. Toàn bộ sự việc, là lỗi!
                                Khó khăn hơn với công việc
                                không ai ghét bất cứ điều gì, và để có được nó, ở đây, hãy để một điều gì đó trong tâm trí chạy trốn khỏi hiện tại.
                                Nhìn này, nhanh lên!</p>
                            <button onclick="location.href = '{{route('shop.index')}}';" type="button"
                                class="btn btn-solid-default " >Mua Ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection