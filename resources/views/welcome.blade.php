@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="main_content">
            <div class="main_blockNavigation">
                <div class="blockCategory">
                    <ul>
                        <li>
                            <a href="">Овощи, фрукты</a>
                        </li>
                        <li>
                            <a href="">Молочные продукты</a>
                        </li>
                        <li>
                            <a href="">Мясо, птица, рыба</a>
                        </li>
                        <li>
                            <a href="">Вода, напитки</a>
                        </li>
                        <li>
                            <a href="">Бакалея</a>
                        </li>
                        <li>
                            <a href="">Заморозка</a>
                        </li>
                    </ul>
                </div>
                <div class="blockSubcategory">
                    asd
                </div>
            </div>
            <div class="main_blockShop blockList">
                <div class="main_head_blockShop headBlock_elem">
                    <h2>Магазины</h2>
                </div>
                <div class="main_content_blockShop content_blockList">
                    <div class="sliderLine sliderLineShop">
                        @foreach ($shops as $shop)
                            <a href="" class="blockShop_item" style="display: inline-block">
                                <div class="item_blockList">
                                    <div class="item_element">
                                        <div class="element_img">
                                            <img src="{{asset("img/shop/$shop->logo_shop")}}" alt="" srcset="">
                                        </div>
                                        <div class="element_name" style="font-size: 24px;">
                                            {{$shop->name_shop}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="main_block_slider">
                    <div class="button_slider_prev">
                        <button id="btn-prevShop"></button>
                    </div>
                    <div class="dots">
                        <div class="dot activeDot">
                        </div>
                        <div class="dot">
                        </div>
                        <div class="dot">
                        </div>
                        <div class="dot">
                        </div>
                    </div>
                    <div class="button_slider_next">
                        <button id="btn-nextShop"></button>
                    </div>
                </div>
            </div>
            <div class="main_blockSalle blockList" style="width: inherit">
                <div class="main_head_blockShop headBlock_elem">
                    <h2>Скидки</h2>
                </div>
                <div class="main_content_blockSalle content_blockList">
                    <div class="sliderLine sliderLineSalle">
                        @foreach ($productsShop as $item)
                            <a href="">
                                <div class="blockSalle_item item_blockList" >
                                    <div class="item_element">
                                        <div class="element_img">
                                            <img src="{{asset("img/products/$item->image")}}" alt="" srcset="" >
                                        </div>
                                        <div class="element_name">
                                            <div class="name_product">
                                                {{$item->name_product}}
                                            </div>
                                            <div class="price_product">
                                                <div class="product_priceSalle">
                                                    {{$item->price_cost}}
                                                </div>
                                                <div class="product_priceOld">
                                                    {{$item->cost}}
                                                </div>
                                            </div>
                                            <button class="product_buy" id="buy_product" type="button" onclick="event.preventDefault()" data-id="1">+</button>
                                            <div class="count_buy_product" onclick="event.preventDefault()" data-id="1">
                                                <button class="product_sell sell" data-id="1" type="button">&#8211;</button><div class="count_product" data-id="1">1</div><button class="product_buy buy"  data-id="1" type="button">+</button>
                                            </div>
                                            <div class="product_shop">
                                                Ашан
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="main_block_slider">
                    <div class="button_slider_prev">
                        <button id="btn-prevSalle"></button>
                    </div>
                    <div class="dots">
                        <div class="dot">
                        </div>
                        <div class="dot">
                        </div>
                        <div class="dot">
                        </div>
                        <div class="dot">
                        </div>
                    </div>
                    <div class="button_slider_next">
                        <button id="btn-nextSalle"></button>
                    </div>
                </div>
            </div>
            <div class="main_blockLiked blockList">
                <div class="main_head_blockShop headBlock_elem">
                    <h2>Вам понравилось</h2>
                </div>
                <div class="main_content_blockLiked content_blockList">
                    <a href="">
                        <div class="blockLiked_item item_blockList" >
                            <div class="item_element">
                                <div class="element_img">
                                    <img src="{{asset('img/shop/aushan_logo.png')}}" alt="" srcset="" >
                                </div>
                                <div class="element_name">
                                    <div class="name_product">
                                        asdasdajgdsadhasdhgfashdfasghf
                                    </div>
                                    <div class="price_product">
                                        <div class="product_priceSalle">
                                            123
                                        </div>
                                        <div class="product_priceOld">
                                            1232
                                        </div>
                                    </div>
                                    <button class="product_buy" id="buy_product" type="button" onclick="event.preventDefault()" data-id="1">+</button>
                                    <div class="count_buy_product" onclick="event.preventDefault()" data-id="1">
                                        <button class="product_sell sell" data-id="1" type="button">&#8211;</button><div class="count_product" data-id="1">1</div><button class="product_buy buy"  data-id="1" type="button">+</button>
                                    </div>
                                    <div class="product_shop">
                                        Ашан
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="blockLiked_item item_blockList" >
                            <div class="item_element">
                                <div class="element_img">
                                    <img src="{{asset('img/shop/aushan_logo.png')}}" alt="" srcset="" >
                                </div>
                                <div class="element_name">
                                    <div class="name_product">
                                        asdasdajgdsadhasdhgfashdfasghf
                                    </div>
                                    <div class="price_product">
                                        <div class="product_priceSalle">
                                            123
                                        </div>
                                        <div class="product_priceOld">
                                            1232
                                        </div>
                                    </div>
                                    <button class="product_buy" id="buy_product" type="button" onclick="event.preventDefault()" data-id="2">+</button>
                                    <div class="count_buy_product" onclick="event.preventDefault()" data-id="2">
                                        <button class="product_sell sell" data-id="2" type="button">&#8211;</button><div class="count_product" data-id="2">1</div><button class="product_buy buy"  data-id="2" type="button">+</button>
                                    </div>
                                    <div class="product_shop">
                                        Ашан
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="blockLiked_item item_blockList" >
                            <div class="item_element">
                                <div class="element_img">
                                    <img src="{{asset('img/shop/aushan_logo.png')}}" alt="" srcset="" >
                                </div>
                                <div class="element_name">
                                    <div class="name_product">
                                        asdasdajgdsadhasdhgfashdfasghf
                                    </div>
                                    <div class="price_product">
                                        <div class="product_priceSalle">
                                            123
                                        </div>
                                        <div class="product_priceOld">
                                            1232
                                        </div>
                                    </div>
                                    <button class="product_buy" id="buy_product" type="button" onclick="event.preventDefault()" data-id="3">+</button>
                                    <div class="count_buy_product" onclick="event.preventDefault()" data-id="3">
                                        <button class="product_sell sell" data-id="3" type="button">&#8211;</button><div class="count_product" data-id="3">1</div><button class="product_buy buy"  data-id="3" type="button">+</button>
                                    </div>
                                    <div class="product_shop">
                                        Ашан
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="blockLiked_item item_blockList" >
                            <div class="item_element">
                                <div class="element_img">
                                    <img src="{{asset('img/shop/aushan_logo.png')}}" alt="" srcset="" >
                                </div>
                                <div class="element_name">
                                    <div class="name_product">
                                        asdasdajgdsadhasdhgfashdfasghf
                                    </div>
                                    <div class="price_product">
                                        <div class="product_priceSalle">
                                            123
                                        </div>
                                        <div class="product_priceOld">
                                            1232
                                        </div>
                                    </div>
                                    <button class="product_buy" id="buy_product" type="button" onclick="event.preventDefault()" data-id="4">+</button>
                                    <div class="count_buy_product" onclick="event.preventDefault()" data-id="4">
                                        <button class="product_sell sell" data-id="4" type="button">&#8211;</button><div class="count_product" data-id="4">1</div><button class="product_buy buy"  data-id="4" type="button">+</button>
                                    </div>
                                    <div class="product_shop">
                                        Ашан
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="blockLiked_item item_blockList" >
                            <div class="item_element">
                                <div class="element_img">
                                    <img src="{{asset('img/shop/aushan_logo.png')}}" alt="" srcset="" >
                                </div>
                                <div class="element_name">
                                    <div class="name_product">
                                        asdasdajgdsadhasdhgfashdfasghf
                                    </div>
                                    <div class="price_product">
                                        <div class="product_priceSalle">
                                            123
                                        </div>
                                        <div class="product_priceOld">
                                            1232
                                        </div>
                                    </div>
                                    <button class="product_buy" id="buy_product" type="button" onclick="event.preventDefault()" data-id="5">+</button>
                                    <div class="count_buy_product" onclick="event.preventDefault()" data-id="5">
                                        <button class="product_sell sell" data-id="5" type="button">&#8211;</button><div class="count_product" data-id="5">1</div><button class="product_buy buy"  data-id="5" type="button">+</button>
                                    </div>
                                    <div class="product_shop">
                                        Ашан
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="main_block_slider">
                    <div class="button_slider_prev">
                        <button id="btn-prev"></button>
                    </div>
                    <div class="dots">
                        <div class="dot">
                        </div>
                        <div class="dot">
                        </div>
                        <div class="dot">
                        </div>
                        <div class="dot">
                        </div>
                    </div>
                    <div class="button_slider_next">
                        <button></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


