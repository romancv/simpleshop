@extends('layout/default')

@section('title', 'Каталог')

@section('content')
    <x-shop-catalog-sidebar />

    <div class="simpleshopo_product_area section-padding-100">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                        <!-- Total Products -->
                        <div class="total-products">
                            <p>Показываем 1-{{ count($products) }} из {{ count($products) }}</p>
                            <div class="view d-flex">
                                <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Sorting -->
                        <div class="product-sorting d-flex">
                            <div class="sort-by-date d-flex align-items-center mr-15">
                                <p>Порядок</p>
                                <form action="#" method="get">
                                    <select disabled name="select" id="sortBydate">
                                        <option value="value">Новые</option>
                                        <option value="value">Рейтинг</option>
                                        <option value="value">Популярные</option>
                                    </select>
                                </form>
                            </div>
                            <div class="view-product d-flex align-items-center">
                                <p>На странице</p>
                                <form action="#" method="get">
                                    <select disabled name="select" id="viewProduct">
                                        <option value="value">12</option>
                                        <option value="value">24</option>
                                        <option value="value">48</option>
                                        <option value="value">96</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach($products as $product)
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <a href="{{ URL::route('shop.product', ['product' => $product->id]) }}">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{ $product->imageHref() }}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img" src="{{ $product->imageHref(true) }}" alt="">
                                </div>
                            </a>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">{{ number_format($product->price, 1, ',', '') }} ₽</p>
                                    <a href="{{ URL::route('shop.product', ['product' => $product->id]) }}">
                                        <h6>{{ $product->title }}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        @foreach(range(0, 5) as $i)
                                            @if($product->rating >= $i)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="cart">
                                        <form class="cart clearfix" method="post" action="{{ URL::route('shop.addToCart') }}">
                                            @csrf
                                            <button type="submit" name="product" value="{{ $product->id }}" href="cart" data-toggle="tooltip" data-placement="left" title="В корзину">
                                                <img src="img/core-img/cart.png" alt="">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination justify-content-end mt-50">
                            <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                            <li class="page-item"><a class="page-link" href="#">02.</a></li>
                            <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            <li class="page-item"><a class="page-link" href="#">04.</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@stop
