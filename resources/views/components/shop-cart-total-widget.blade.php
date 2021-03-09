<div class="cart-summary">
    <ul class="summary-table">
        <li class="total"><span>итого:</span> <span>{{ number_format(Cart::getTotal(), 1, ',', '') }} ₽</span></li>
        <li><span>товары:</span> <span> {{ number_format(Cart::getSubtotal(), 1, ',', '') }} ₽</span></li>
        <li><span>доставка:</span> <span>Бесплатно</span></li>
    </ul>

    @if(request()->is('checkout'))
        <div class="payment-method">
            <!-- Cash on delivery -->
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="cod" checked>
                <label class="custom-control-label" for="cod">Наличными</label>
            </div>
            <!-- Paypal -->
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="paypal">
                <label class="custom-control-label" for="paypal">Картой <img class="ml-15" src="img/core-img/paypal.png" alt=""></label>
            </div>
        </div>

        <div class="cart-btn mt-100">
            <a href="#" class="btn simpleshopo-btn w-100">Заказать</a>
        </div>
    @else
        <div class="cart-btn mt-100">
            <a href="/checkout" class="btn simpleshopo-btn w-100">Оформить</a>
            <a href="/clearCart" class="btn simpleshopo-btn active">Очистить</a>
        </div>
    @endif
</div>
