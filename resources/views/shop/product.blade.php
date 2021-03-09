@extends('layout/default')

@section('title', 'Карточка товара')

@section('content')
    <!-- Product Details Area Start -->
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item">
                                <a href="{{ URL::route('shop.catalog', ['category' => $product->category->id]) }}">
                                    {{ $product->category->title }}
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($product->images as $i => $image)
                                    <li class="{{ $i == 0 ? 'active' : '' }}" data-target="#product_details_slider" data-slide-to="{{ $i }}" style="background-image: url({{ $image->href }});">
                                    </li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($product->images as $i => $image)
                                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                        <a class="gallery_img" href="{{ $image->href }}">
                                            <img class="d-block w-100" src="{{ $image->href }}">
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">{{ number_format($product->price, 1, ',', '') }} ₽</p>
                            <a href="product">
                                <h6>{{ $product->title }}</h6>
                            </a>
                            <!-- Ratings & Review -->
                            <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="review">
                                    <a href="#">Написать отзыв</a>
                                </div>
                            </div>
                            <!-- Avaiable -->
                            <p class="avaibility"><i class="fa fa-circle"></i> В наличии</p>
                        </div>

                        <div class="short_overview my-5">
                            <p>{{ $product->body }}</p>
                        </div>

                        <!-- Add to Cart Form -->
                        <form class="cart clearfix" method="post" action="{{ URL::route('shop.addToCart') }}">
                            <div class="cart-btn d-flex mb-50">
                                <p>Кол-во</p>
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            @csrf
                            <button type="submit" name="product" value="{{ $product->id }}" class="btn simpleshopo-btn">В корзину</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->
@stop
