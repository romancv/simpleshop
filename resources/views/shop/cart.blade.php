@extends('../layout/default')

@section('title', 'Корзина')

@section('content')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Корзина</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Название</th>
                                    <th>Цена</th>
                                    <th>Кол-во</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach(Cart::getContent() as $item)
                                <tr id="cart-item-{{ $item->id }}">
                                    <td class="cart_product_img">
                                        <a href="{{ URL::route('shop.product', ['product' => $item->associatedModel->id]) }}">
                                            <img src="{{ $item->associatedModel->imageHref() }}">
                                        </a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{ $item->name }}</h5>
                                    </td>
                                    <td class="price">
                                        <span>{{ number_format($item->price, 1, ',', '') }} ₽</span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <p>Кол-во</p>
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="qtyPlus({{ $item->id }})"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty-{{ $item->id }}" step="1" min="1" max="300" name="quantity-{{ $item->id }}" value="{{ $item->quantity }}">

                                                <span class="qty-plus" onclick="qtyMinus({{ $item->id }})"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <x-shop-cart-total-widget />
                </div>
            </div>
        </div>
    </div>

@stop
