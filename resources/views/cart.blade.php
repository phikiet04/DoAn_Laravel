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
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Giỏ Hàng</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="cart-section section-b-space">
    <div class="container">
        @if ($cartItems->count() > 0)
            <div class="row">
                <div class="col-md-12 text-center">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên Sản Phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Tổng cộng</th>
                            <th scope="col">Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>
                                    @if ($item->options->image)
                                        <a href="{{ route('shop.product.details', ['slug' => $item->id]) }}">
                                            <img src="{{ asset('assets/images/fashion/product/front/' . $item->options->image) }}" class="blur-up lazyloaded" alt="{{ $item->name }}">
                                        </a>
                                    @else
                                        <p>Sản phẩm không có</p>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->name)
                                        <a href="{{ route('shop.product.details', ['slug' => $item->id]) }}">{{ $item->name }}</a>
                                    @else
                                        <p>Sản phẩm không có</p>
                                    @endif
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <form action="{{ route('cart.update') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                                        <input type="number" name="quantity" class="form-control input-number" value="{{ $item->qty }}">
                                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->price * $item->qty }}</td>
                                <td>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <a href="{{ route('cart.clear') }}" class="text-decoration-underline theme-color d-block text-capitalize">Xóa tất cả các mục</a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="{{ route('shop.index') }}" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Tiếp tục mua sắm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="promo-section">
                                <form class="row g-3" method="POST" action="{{ route('cart.applyCoupon') }}">
                                    @csrf
                                    <div class="col-7">
                                        <input type="text" class="form-control" name="coupon_code" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-solid-default rounded btn" type="submit">Áp dụng phiếu giảm giá</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="checkout-button">
                                <a href="{{ route('checkout.index') }}" class="btn btn-solid-default btn fw-bold">
                                    Thanh Toán <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Tổng số giỏ hàng</h3>
                                            <h6>Tổng phụ<span>{{Cart::subtotal()}}đ</span></h6>
                                            <h6>Thuế <span>{{Cart::tax()}}đ</span></h6>
                                            <h6>Tổng cộng<span>{{Cart::total()}}đ</span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="{{ route('checkout.index') }}">Quy trình thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Your cart is empty</h2>
                    <h5 class="mt-3">Add items to it now.</h5>
                    <a href="{{route('shop.index')}}" class="btn btn-warning">Shop Now</a>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
