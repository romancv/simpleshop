@extends('../layout/default')

@section('title', 'Оформление заказа')

@section('content')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Оформить заказ</h2>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="first_name" value="" placeholder="Имя" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="last_name" value="" placeholder="Фамилия" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="company" placeholder="Офис/Компания" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <select disabled class="w-100" id="country">
                                    <option value="ru">Россия</option>
                                    <option value="etc">Другая страна</option>
                                </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control mb-3" id="street_address" placeholder="Адрес" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="city" placeholder="Город" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="zipCode" placeholder="Почтовый индекс" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="number" class="form-control" id="phone_number" min="0" placeholder="Телефон" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Комментарий (если что-то нужно)"></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Создать мне аккаунт</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Без подтверждения</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <x-shop-cart-total-widget />
                </div>
            </div>
        </div>
    </div>
@stop
