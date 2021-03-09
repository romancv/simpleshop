<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Категории</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                @foreach(\App\Models\ProductCategory::get() as $category)
                    <li class="{{ request()->get('category') == $category->id ? 'active' : '' }}">
                        <a href="{{ URL::route('shop.catalog', ['category' => $category->id]) }}">
                            {{ $category->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <x-shop-filters />
</div>
