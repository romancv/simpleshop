<li class="nav-item {{ request()->route()->getName() == 'shop.index' ? 'active' : '' }}">
    <a class="nav-link" href="{{ URL::route('shop.index') }}">Главная</a>
</li>
<li class="nav-item {{ request()->route()->getName() == 'shop.catalog' ? 'active' : '' }}">
    <a class="nav-link" href="{{ URL::route('shop.catalog') }}">Каталог</a>
</li>
<li class="nav-item {{ request()->route()->getName() == 'shop.product' ? 'active' : '' }}">
    <a class="nav-link" href="{{ URL::route('shop.product') }}">Карточка</a>
</li>
<li class="nav-item {{ request()->route()->getName() == 'shop.cart' ? 'active' : '' }}">
    <a class="nav-link" href="{{ URL::route('shop.cart') }}">Корзина</a>
</li>
<li class="nav-item {{ request()->route()->getName() == 'shop.checkout' ? 'active' : '' }}">
    <a class="nav-link" href="{{ URL::route('shop.checkout') }}">Оформление</a>
</li>
