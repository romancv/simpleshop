@extends('layout/default')

@section('title', 'Главная')

@section('content')
    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="simpleshopo-pro-catagory clearfix">

            @foreach(App\Models\ProductCategory::all() as $category)
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{ URL::route('shop.catalog', ['category' => $category->id]) }}">
                        <img src="{{ $category->image_href }}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>От {{ number_format($category->minPrice(), 1, ',', '') }} ₽</p>
                            <h4>{{ $category->title }}</h4>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Product Catagories Area End -->
@stop
