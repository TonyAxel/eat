@extends('layouts.app')

@section('content')
    <div class="block_contentCart">
        <div class="contentCart">
            <div class="cartShopProducts">
                <div class="shopProductsHeader">
                    <div class="cartShopname">
                        <div class="name">
                            Ашан
                        </div>
                        <div class="map">
                            Показать на карте
                        </div>
                    </div>
                    <div class="vesPrice">
                        <div class="allPriceProducts">
                            <div class="price">Итог: 105P</div>
                        </div>
                        <div class="ves">
                            <div class="price">Вес корзины: 0.65 кг</div>
                        </div>
                    </div>
                </div>
                <div class="shopProductsMain">
                    <div class="product">
                        <div class="imageProduct">
                            <img src="/img/products/bread2.png" alt="">
                        </div>
                        <div class="productDescription-delete">
                            <div class="description">
                                Хлеб Рижский хлеб Бородинский формовой кирпич ржано-пшеничный нарезанный 300 г                            </div>
                            <div class="delete">
                                Удалить
                            </div>
                        </div>
                        <div class="productPrice-count">
                            <div class="productPrice">
                                Цена: 60
                            </div>
                            <div class="productVes">
                                Вес продукта: 300
                            </div>
                            <div class="count_buy_productCart" onclick="event.preventDefault()" data-id="5">
                                <button class="product_sellCart sellCart" data-id="5" type="button">&#8211;</button><div class="count_product" data-id="5">1</div><button class="product_buyCart buy"  data-id="5" type="button">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="imageProduct">
                            <img src="/img/products/bread1.png" alt="">
                        </div>
                        <div class="productDescription-delete">
                            <div class="description">
                                Хлеб Хлебный дом Стройный рецепт без хлебопекарных дрожжей в нарезке 350 г
                            </div>
                            <div class="delete">
                                Удалить
                            </div>
                        </div>
                        <div class="productPrice-count">
                            <div class="productPrice">
                                Цена: 45
                            </div>
                            <div class="productVes">
                                Вес продукта: 350
                            </div>
                            <div class="count_buy_productCart" onclick="event.preventDefault()" data-id="5">
                                <button class="product_sellCart sellCart" data-id="5" type="button">&#8211;</button><div class="count_product" data-id="5">1</div><button class="product_buyCart buy"  data-id="5" type="button">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection