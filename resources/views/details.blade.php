@extends('layouts.base')
@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo2.css')}}">
@endpush
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
                    @if($product)
                        <h3>{{ $product->name }}</h3>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('app.index') }}">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                            </ol>
                        </nav>
                    @else
                        <p>Product not found</p>
                    @endif
                </div>
            </div>
        </div>

    </section> <!-- Shop Section start -->

   @if ($product)
   <section>
        <div class="container">
            <div class="row gx-4 gy-5">
                <div class="col-lg-12 col-12">
                    <div class="details-items">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="{{asset('assets/images/fashion/product/front')}}/{{$product->image}}" class="img-fluid blur-up lazyload" alt="{{$product}}">
                                            </div>
                                            @if ($product->images)
                                            @php
                                               $images = explode(',',$product->images) ;
                                            @endphp
                                            @foreach ($images as $image )
                                                <div>
                                                    <img src="{{asset('assets/images/fashion')}}/{{$image}}"class="img-fluid blur-up lazyload" alt="">
                                                </div> 
                                            @endforeach
                                            @endif
                                            <div>
                                                <img src="../assets/images/fashion/2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="../assets/images/fashion/3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="../assets/images/fashion/4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="{{asset('assets/images/fashion/product/front')}}/{{$product->image}}" id="zoom_01"class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="{{$product->name}}">
                                            </div>

                                            @if ($product->images)
                                            @php
                                               $images = explode(',',$product->images) ;
                                            @endphp
                                            @foreach ($images as $image )
                                                <div>
                                                    <img src="{{asset('assets/images/fashion')}}/{{$image}}"class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                                </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="cloth-details-size">
                                    <div class="product-count">
                                        <ul>
                                            <li>
                                                <img src="../assets/images/gif/fire.gif"
                                                    class="img-fluid blur-up lazyload" alt="image">
                                                <span class="p-counter">37</span>
                                                <span class="lang">đơn đặt hàng trong 24 giờ qua</span>
                                            </li>
                                            <li>
                                                <img src="../assets/images/gif/person.gif"
                                                    class="img-fluid user_img blur-up lazyload" alt="image">
                                                <span class="p-counter">44</span>
                                                <span class="lang">đang kích hoạt xem cái này</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="details-image-concept">
                                        <h2>{{$product->name}}</h2>
                                    </div>

                                    <div class="label-section">
                                        <span class="badge badge-grey-color">#1 Người bán hàng giỏi nhất</span>
                                        <span class="label-text">trong thời trang</span>
                                    </div>

                                    <h3 class="price-detail">
                                        @if($product->sale_price)
                                           {{$product->sale_price}}đ
                                        <del>${{$product->regular_price}}</del><span>
                                             {{ round((($product->regular_price - $product->sale_price)/$product->sale_price)*100) }}đ
                                            % off</span></h3>
                                        @else
                                            {{$product->regular_price}}đ
                                        @endif    

                                    <div class="color-image">
                                        <div class="image-select">
                                            <h5>Màu :</h5>
                                            <ul class="image-section">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/fashion/product/front/5.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/fashion/product/front/6.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/fashion/product/front/7.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                        <h6 class="product-title size-text">Chọn kích cỡ
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#sizemodal">biểu đồ kích thước</a>
                                        </h6>

                                        <h6 class="error-message">xin vui lòng chọn kích cỡ</h6>

                                        <div class="size-box">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">s</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">m</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">l</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">xl</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <h6 class="product-title product-title-2 d-block">Số lượng</h6>

                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        onclick="updateQuantity()" data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" id="quantity"
                                                    class="form-control input-number" value="1">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        onclick="updateQuantity()" data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-buttons">
                                        <a href="javascript:void(0)" class="btn btn-solid">
                                            <i class="fa fa-bookmark fz-16 me-2"></i>
                                            <span>Yêu thích</span>
                                        </a>
                                        <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('addtocart').submit();" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <form id="addtocart" action="{{ route('cart.add', $product->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="quantity" value="1">
                                        </form>
            
                                    </div>

                                    <ul class="product-count shipping-order">
                                        <li>
                                            <img src="../assets/images/gif/truck.png" class="img-fluid blur-up lazyload"
                                                alt="image">
                                            <span class="lang">Miễn phí vận chuyển cho các đơn hàng trên 500.000 đ<</span>
                                        </li>
                                    </ul>

                                    <div class="mt-2 mt-md-3 border-product">
                                        <h6 class="product-title hurry-title d-block">
                                            @if($product->stock_status==='instock')
                                                Còn Hàng
                                            @else
                                                Hết Hàng
                                            @endif        
                                        </h6>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                        </div>
                                        <div class="font-light timer-5">
                                            <h5>Đặt hàng tiếp theo để nhận được</h5>
                                            <ul class="timer1">
                                                <li class="counter">
                                                    <h5 id="days">&#9251;</h5> Ngày :
                                                </li>
                                                <li class="counter">
                                                    <h5 id="hours">&#9251;</h5> Giờ :
                                                </li>
                                                <li class="counter">
                                                    <h5 id="minutes">&#9251;</h5> Thời Gian :
                                                </li>
                                                <li class="counter">
                                                    <h5 id="seconds">&#9251;</h5> giây:
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="border-product">
                                        <h6 class="product-title d-block">Chia sẻ nó</h6>
                                        <div class="product-icon">
                                            <ul class="product-social">
                                                <li>
                                                    <a href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.google.com/">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="pe-0">
                                                    <a href="https://www.google.com/">
                                                        <i class="fas fa-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="cloth-review">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#desc" type="button">Mô Tả</button>

                                <button class="nav-link" id="nav-speci-tab" data-bs-toggle="tab" data-bs-target="#speci"
                                    type="button">Thông số kỹ thuật</button>

                                <button class="nav-link" id="nav-size-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-guide" type="button">Hướng dẫn Chọn Kích Cỡ</button>

                                <button class="nav-link" id="nav-question-tab" data-bs-toggle="tab"
                                    data-bs-target="#question" type="button">Hỏi Đáp</button>

                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#review" type="button">Đánh Giá</button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="desc">
                                <div class="shipping-chart">
                                   {{$product->description}}
                                </div>
                            </div>

                            <div class="tab-pane fade" id="speci">
                                <div class="pro mb-4">
                                    <p class="font-light">TNgười mẫu đang mặc một chiếc áo sơ mi trắng của nhà tạo mẫu của chúng tôi
                                        bộ sưu tập, hãy xem hình ảnh để mô phỏng chiếc áo thực tế trông như thế nào
                                        like.it có văn bản được viết trên đó bằng ngôn ngữ chữ thảo màu đen trông rất tuyệt
                                        trên một màu trắng.</p>
                                    <div class="table-responsive">
                                        <table class="table table-part">
                                            <tr>
                                                <th>Kích thước sản phẩm</th>
                                                <td>15 x 15 x 3 cm; 250 Grams</td>
                                            </tr>
                                            <tr>
                                                <th>Ngày đầu tiên có sẵn</th>
                                                <td>Ngày 30 Tháng 5 Năm 2024</td>
                                            </tr>
                                            <tr>
                                                <th>Nhà sản xuất</th>
                                                <td>Công ty TNHH Thời trang và Bán lẻ Aditya Birla</td>
                                            </tr>
                                            <tr>
                                                <th>ASIN</th>
                                                <td>B06Y28LCDN</td>
                                            </tr>
                                            <tr>
                                                <th>Số mô hình mặt hàng</th>
                                                <td>AMKP317G04244</td>
                                            </tr>
                                            <tr>
                                                <th>Loại</th>
                                                <td>Đàn Ông</td>
                                            </tr>
                                            <tr>
                                                <th>Trọng lượng sản phẩm</th>
                                                <td>250 G</td>
                                            </tr>
                                            <tr>
                                                <th>Kích thước sản phẩm LxWxH</th>
                                                <td>15 x 15 x 3 Cm</td>
                                            </tr>
                                            <tr>
                                                <th>Số lượng ròng</th>
                                                <td>1 U</td>
                                            </tr>
                                            <tr>
                                                <th>Các thành phần đi kèm‏</th>
                                                <td>1-Áo thun</td>
                                            </tr>
                                            <tr>
                                                <th>Tên chung</th>
                                                <td>Áo thun</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade overflow-auto" id="nav-guide">
                                <div class="table-responsive">
                                    <table class="table table-pane mb-0">
                                        <tbody>
                                            <tr class="bg-color">
                                                <th class="my-2">Kích cỡ US</th>
                                                <td>6</td>
                                                <td>6.5</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>8.5</td>
                                                <td>9</td>
                                                <td>9.5</td>
                                                <td>10</td>
                                                <td>10.5</td>
                                                <td>11</td>
                                            </tr>

                                            <tr>
                                                <th>Kích cỡ Euro </th>
                                                <td>39</td>
                                                <td>39</td>
                                                <td>40</td>
                                                <td>40-41</td>
                                                <td>41</td>
                                                <td>41-42</td>
                                                <td>42</td>
                                                <td>42-43</td>
                                                <td>43</td>
                                                <td>43-44</td>
                                            </tr>

                                            <tr class="bg-color">
                                                <th>Kích cỡ UK</th>
                                                <td>5.5</td>
                                                <td>6</td>
                                                <td>6.5</td>
                                                <td>7</td>
                                                <td>7.5</td>
                                                <td>8</td>
                                                <td>8.5</td>
                                                <td>9</td>
                                                <td>10.5</td>
                                                <td>11</td>
                                            </tr>

                                            <tr>
                                                <th>Inches</th>
                                                <td>9.25"</td>
                                                <td>9.5"</td>
                                                <td>9.625"</td>
                                                <td>9.75"</td>
                                                <td>9.9735"</td>
                                                <td>10.125"</td>
                                                <td>10.25"</td>
                                                <td>10.5"</td>
                                                <td>10.765"</td>
                                                <td>10.85</td>
                                            </tr>

                                            <tr class="bg-color">
                                                <th>CM</th>
                                                <td>23.5</td>
                                                <td>24.1</td>
                                                <td>24.4</td>
                                                <td>25.4</td>
                                                <td>25.7</td>
                                                <td>26</td>
                                                <td>26.7</td>
                                                <td>27</td>
                                                <td>27.3</td>
                                                <td>27.5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="question">
                                <div class="question-answer">
                                    <ul>
                                        <li>
                                            <div class="que">
                                                <i class="fas fa-question"></i>
                                                <div class="que-details">
                                                    <h6>Nó có tương thích với tất cả các chủ đề không?</h6>
                                                    <p class="font-light">Nếu bạn muốn xem phiên bản trình diễn của
                                                        plugin cao cấp, bạn có thể thấy điều đó trong trang này. Nếu bạn muốn
                                                        để xem phiên bản trình diễn của plugin cao cấp, bạn có thể
                                                        thấy điều đó trong trang này Nếu bạn muốn xem một cuộc biểu tình
                                                        phiên bản plugin cao cấp, bạn có thể thấy điều đó trong trang này.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="que">
                                                <i class="fas fa-question"></i>
                                                <div class="que-details">
                                                    <h6>Làm cách nào tôi có thể thử đầy đủ tính năng? </h6>
                                                    <p class="font-light">Khả năng tương thích với tất cả các chủ đề là không thể,
                                                        bởi vì chúng quá nhiều, nhưng nhìn chung nếu các chủ đề được phát triển
                                                        theo hướng dẫn của WordPress và WooC Commerce, plugin YITH
                                                        tương thích với chúng. Khả năng tương thích với tất cả các chủ đề là
                                                        không thể, vì chúng quá nhiều, nhưng nói chung nếu chủ đề
                                                        được phát triển theo hướng dẫn của WordPress và WooC Commerce,
                                                        Các plugin YITH tương thích với chúng.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="que">
                                                <i class="fas fa-question"></i>
                                                <div class="que-details">
                                                    <h6>Nó có tương thích với tất cả các chủ đề WordPress không?</h6>
                                                    <p class="font-light">Nếu bạn muốn xem phiên bản trình diễn của
                                                        plugin cao cấp, bạn có thể thấy điều đó trong trang này. Nếu bạn muốn
                                                        để xem phiên bản trình diễn của plugin cao cấp, bạn có thể
                                                        thấy điều đó trong trang này Nếu bạn muốn xem một cuộc biểu tình
                                                        phiên bản plugin cao cấp, bạn có thể thấy điều đó trong trang này.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="review">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="customer-rating">
                                            <h2>Đánh Giá Khách hàng</h2>
                                            <ul class="rating my-2 d-inline-block">
                                                <li>
                                                    <i class="fas fa-star theme-color"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star theme-color"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star theme-color"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>

                                            <div class="global-rating">
                                                <h5 class="font-light">82 Ratings</h5>
                                            </div>

                                            <ul class="rating-progess">
                                                <li>
                                                    <h5 class="me-3">5 sao</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 78%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">78%</h5>
                                                </li>
                                                <li>
                                                    <h5 class="me-3">4 Sao</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 62%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">62%</h5>
                                                </li>
                                                <li>
                                                    <h5 class="me-3">3 sao</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 44%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">44%</h5>
                                                </li>
                                                <li>
                                                    <h5 class="me-3">2 Star</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">30%</h5>
                                                </li>
                                                <li>
                                                    <h5 class="me-3">1 Sao</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 18%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">18%</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <p class="d-inline-block me-2">Xếp hạng</p>
                                        <ul class="rating mb-3 d-inline-block">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <div class="review-box">
                                            <form class="row g-4">
                                                <div class="col-12 col-md-6">
                                                    <label class="mb-1" for="name">Tên</label>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Nhập tên của bạn" required="">
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <label class="mb-1" for="id">Địa chỉ email</label>
                                                    <input type="email" class="form-control" id="id"
                                                        placeholder="Email " required="">
                                                </div>

                                                <div class="col-12">
                                                    <label class="mb-1" for="comments">Bình luận</label>
                                                    <textarea class="form-control" placeholder="Bình luận"
                                                        id="comments" style="height: 100px" required=""></textarea>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn default-light-theme default-theme default-theme-2">Đăng</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <div class="customer-review-box">
                                            <h4>Đánh giá Khách hàng</h4>

                                            <div class="customer-section">
                                                <div class="customer-profile">
                                                    <img src="../assets/images/inner-page/review-image/1.jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>

                                                <div class="customer-details">
                                                    <h5>Phi Kiet</h5>
                                                    <ul class="rating my-2 d-inline-block">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="font-light">Tôi đã mua áo tại Best Buy nhưng tôi muốn
                                                        ĐẾN
                                                        chia sẻ suy nghĩ của tôi trên Amazon. Tôi sẽ không xem xét kỹ các thông số kỹ thuật và
                                                        như là
                                                        vì bạn có thể đọc chúng ở hàng trăm nơi khác. Mặc dù tôi
                                                        sẽ
                                                        nói rằng phiên bản "mới" đã được cài đặt sẵn Marshmallow và bây giờ
                                                        sử dụng bộ xử lý octacore của Qualcomm thay cho Exynos
                                                        được vận chuyển với thế hệ đầu tiên.</p>

                                                    <p class="date-custo font-light">- Ngày 30 thg 4 2024</p>
                                                </div>
                                            </div>

                                            <div class="customer-section">
                                                <div class="customer-profile">
                                                    <img src="../assets/images/inner-page/review-image/2.jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>

                                                <div class="customer-details">
                                                    <h5>Norwalker</h5>
                                                    <ul class="rating my-2 d-inline-block">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="font-light">Ưu điểm: Màn hình lớn (9,7") đẹp. Màu sắc tươi sáng.
                                                        Dễ
                                                        để thiết lập và bắt đầu. Đến đúng giờ. Nhược điểm: khởi động hơi chậm
                                                        phản hồi, nhưng được mong đợi vì máy tính bảng đã có 2 thế hệ. Nhưng hoạt động
                                                        tốt và giá trị tốt cho tiền.</p>

                                                    <p class="date-custo font-light">- Ngày 30 thg 4 2024</p>
                                                </div>
                                            </div>

                                            <div class="customer-section">
                                                <div class="customer-profile">
                                                    <img src="../assets/images/inner-page/review-image/3.jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>

                                                <div class="customer-details">
                                                    <h5>B. Perdue</h5>
                                                    <ul class="rating my-2 d-inline-block">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="font-light">Yêu thích tốc độ xử lý và độ nhạy
                                                        của
                                                        màn hình cảm ứng</p>

                                                    <p class="date-custo font-light">- Ngày 30 thg 4 2024</p>
                                                </div>
                                            </div>

                                            <div class="customer-section">
                                                <div class="customer-profile">
                                                    <img src="../assets/images/inner-page/review-image/4.jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>

                                                <div class="customer-details">
                                                    <h5>MSL</h5>
                                                    <ul class="rating my-2 d-inline-block">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="font-light">Tôi mua Áo vào tháng 5 năm 2017 và bây giờ là tháng 4
                                                        2019
                                                        để sử dụng trong tương lai.
</p>

                                                    <p class="date-custo font-light">- Ngày 30 thg 4 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
   @endif

    <!-- Shop Section end -->

    <!-- product section start -->
    <section class="ratio_asos section-b-space overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-lg-4 mb-3">Khách hàng cũng đã mua những thứ này</h2>
                    <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/front/23.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="details.html">
                                            <img src="http://localhost:8000/assets/images/fashion/product/back/23.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Ít ham muốn hơn</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="details.php" class="font-default">
                                            <h5>Qui Laboriosam Quas Beatae</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Vừa vặn thường xuyên</span>
                                            <p class="font-light">Không có đau khổ vì người khen ngợi phương tiện hay đau khổ.
                                                Người chọn bất kỳ niềm vui nào và Không ai thích anh ấy vì bất cứ điều gì
                                                Tôi sẽ mở chúng. Anh ấy không bao giờ tha thứ cho nỗi đau, anh ấy ghét sự vĩ đại.</p>
                                        </div>
                                        <h3 class="theme-color">20.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Thêm Vào Giỏ Hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/front/6.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/back/6.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Qui Ut</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="details.php" class="font-default">
                                            <h5>Id Expedita Dolorem Sit</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Rerum consequatur sunt placeat qui vero quod.
                                                Voluptatem doloremque commodi quaerat autem fugiat iste. Voluptatem
                                                repudiandae suscipit aut aspernatur maiores repellat corrupti.</p>
                                        </div>
                                        <h3 class="theme-color">390.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/front/12.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="details.html">
                                            <img src="http://localhost:8000/assets/images/fashion/product/back/12.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Blanditiis Error</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="details.php" class="font-default">
                                            <h5>Laborum Debitis Necessitatibus Architecto</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Ullam iure distinctio quaerat nam quasi rerum
                                                nesciunt. Eius ut porro tempore error. Quo quibusdam est praesentium
                                                quam reprehenderit officia vero. Commodi perspiciatis totam rerum
                                                voluptatem.</p>
                                        </div>
                                        <h3 class="theme-color">190.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/front/11.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="details.html">
                                            <img src="http://localhost:8000/assets/images/fashion/product/back/11.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Cupiditate Minus</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="details.php" class="font-default">
                                            <h5>Quidem Architecto Deleniti Hic</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Sit repellat fugit recusandae voluptates et est.
                                                Similique et consequuntur alias officia eos. Quos sed temporibus magnam
                                                est quo aut. Totam at ducimus occaecati sequi sint sed enim.</p>
                                        </div>
                                        <h3 class="theme-color">130.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/front/20.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="details.html">
                                            <img src="http://localhost:8000/assets/images/fashion/product/back/20.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Qui Ut</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="details.php" class="font-default">
                                            <h5>Error Itaque Debitis Commodi</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Quos voluptates aut dolorum. Velit delectus eligendi
                                                quia est. Explicabo sit dolores laboriosam ullam voluptas.</p>
                                        </div>
                                        <h3 class="theme-color">200.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/front/8.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/back/8.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Blanditiis Error</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="details.php" class="font-default">
                                            <h5>Odit Corporis Ut Pariatur</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Corrupti et assumenda saepe natus voluptatem deserunt
                                                aliquam. Non esse nemo exercitationem. Expedita libero quos quibusdam.
                                            </p>
                                        </div>
                                        <h3 class="theme-color">400.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/front/2.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/back/2.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Dolores Et</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="details.php" class="font-default">
                                            <h5>Doloremque Quibusdam Maxime Natus</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Hic fugiat molestiae sed. Impedit iusto nihil odio
                                                eos. Nisi et est aperiam ut non culpa amet. Nemo aut et ipsa pariatur
                                                cumque. Totam eveniet voluptatibus nostrum.</p>
                                        </div>
                                        <h3 class="theme-color">110.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="../assets/images/fashion/product/front/14.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="details.html">
                                            <img src="http://localhost:8000/assets/images/fashion/product/back/14.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Qui Ut</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="details.php" class="font-default">
                                            <h5>Pariatur Qui Mollitia Et</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Vero asperiores error sint soluta. Quia ut corrupti
                                                perferendis quo vero. Recusandae quae et possimus. Aut voluptatem sunt
                                                sit aliquid corporis aliquam.</p>
                                        </div>
                                        <h3 class="theme-color">100.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

@endsection