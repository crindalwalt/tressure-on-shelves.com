<x-layouts.master>

    <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Fashion Shop</h2>
                <p class="left">Seamlessly predominate enterprise metrics without performance based process
                    improvements.</p>
            </div>
        </div>
        <div class="breadcrumb-img-2">
            <img src="{{ asset("assets/images/banner/shop-banner.jpg") }}" alt="shop banner">
        </div>
    </div>
    <div class="categorie-area">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="custom-col-8">
                    <div class="single-categories-5 text-center">
                        <div class="single-categories-5-img">
                            <a href="shop.html"><img class="inject-me" src="assets/images/icon-img/furniture-dress.svg"
                                    alt=""></a>
                        </div>
                        <div class="categorie-content-6">
                            <h4><a class="color-light" href="shop.html">Fashion</a></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-col-8">
                    <div class="single-categories-5 text-center">
                        <div class="single-categories-5-img">
                            <a href="shop.html"><img class="inject-me"
                                    src="assets/images/icon-img/furniture-headphone.svg" alt=""></a>
                        </div>
                        <div class="categorie-content-6">
                            <h4><a class="color-light" href="shop.html">Gadget</a></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-col-8">
                    <div class="single-categories-5 text-center">
                        <div class="single-categories-5-img">
                            <a href="shop.html"><img class="inject-me" src="assets/images/icon-img/furniture-chair.svg"
                                    alt=""></a>
                        </div>
                        <div class="categorie-content-6">
                            <h4><a class="color-light" href="shop.html">Furniture</a></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-col-8">
                    <div class="single-categories-5 text-center">
                        <div class="single-categories-5-img">
                            <a href="shop.html"><img class="inject-me"
                                    src="assets/images/icon-img/furniture-chair-2.svg" alt=""></a>
                        </div>
                        <div class="categorie-content-6">
                            <h4><a class="color-light" href="shop.html">Chair</a></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-col-8">
                    <div class="single-categories-5 text-center">
                        <div class="single-categories-5-img">
                            <a href="shop.html"><img class="inject-me" src="assets/images/icon-img/furniture-book.svg"
                                    alt=""></a>
                        </div>
                        <div class="categorie-content-6">
                            <h4><a class="color-light" href="shop.html">Book</a></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-col-8">
                    <div class="single-categories-5 text-center">
                        <div class="single-categories-5-img">
                            <a href="shop.html"><img class="inject-me" src="assets/images/icon-img/autos.svg"
                                    alt=""></a>
                        </div>
                        <div class="categorie-content-6">
                            <h4><a class="color-light" href="shop.html">Autos</a></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-col-8">
                    <div class="single-categories-5 text-center">
                        <div class="single-categories-5-img">
                            <a href="shop.html"><img class="inject-me" src="assets/images/icon-img/bicycle.svg"
                                    alt=""></a>
                        </div>
                        <div class="categorie-content-6">
                            <h4><a class="color-light" href="shop.html">Bicycle </a></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-col-8">
                    <div class="single-categories-5 text-center">
                        <div class="single-categories-5-img">
                            <a href="shop.html"><img class="inject-me" src="assets/images/icon-img/fitness.svg"
                                    alt=""></a>
                        </div>
                        <div class="categorie-content-6">
                            <h4><a class="color-light" href="shop.html">Fitness</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area pt-160 pb-160">
        <div class="container">

            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div id="shop-categorie-1" class="tab-pane active ">
                            <div class="shop-top-bar">
                                <div class="shop-top-bar-left">
                                    <div class="shop-tab nav">
                                        <a href="#shop-1" class="active" data-bs-toggle="tab"><img class="inject-me"
                                                src="assets/images/icon-img/shop-grid.svg" alt=""></a>
                                        <a href="#shop-2" data-bs-toggle="tab"><img class="inject-me"
                                                src="assets/images/icon-img/shop-list.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="shop-top-bar-right">
                                    <div class="shop-page-list">
                                        <ul>
                                            <li>Show</li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">6</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content pt-30">
                                <div id="shop-1" class="tab-pane active">
                                    {{-- Products Holder Start --}}
                                    <div class="row">
                                        @if ($products->isNotEmpty())
                                            @foreach ($products as $item)
                                                {{-- Product Card Starts --}}
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <div class="product-wrap mb-50">
                                                        <div class="product-img product-img-zoom mb-25">
                                                            <a href="{{ route("product.single",$item->id) }}">
                                                                <img src="{{ $item->image }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h4><a href="product-details.html">{{ $item->name }}</a>
                                                            </h4>
                                                            <div class="product-price">
                                                                <span>$ {{ $item->price }}</span>
                                                                <span class="old-price">$ {{ $item->old_price }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-action-position-1 text-center">
                                                            <div class="product-content">
                                                                <h4><a
                                                                        href="product-details.html">{{ $item->name }}</a>
                                                                </h4>
                                                                <div class="product-price">
                                                                    <span>$ {{ $item->price }}</span>
                                                                    <span class="old-price">$
                                                                        {{ $item->old_price }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-action-wrap">
                                                                <div class="product-action-cart">
                                                                    <button title="Add to Cart">Add to cart</button>
                                                                </div>
                                                                {{-- <button data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="icon-zoom"></i></button>
                                                                <button title="Add to Compare"><i
                                                                        class="icon-compare"></i></button>
                                                                <button title="Add to Wishlist"><i
                                                                        class="icon-heart-empty"></i></button> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Product Card Ends --}}
                                            @endforeach
                                        @else
                                            <div>no data to show</div>
                                        @endif

                                    </div>
                                    {{-- Products Holder Ends --}}
                                </div>

                                <div class="pro-pagination-style text-center mt-50">
                                    <ul>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-sidebar-style">
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Subcategories</h4>
                            <div class="sidebar-widget-categori mt-45 mb-70">
                                <ul>
                                    <li><a href="#">All</a> </li>
                                    @if ($categories->isNotEmpty())
                                        @foreach ($categories as $item)
                                            <li>
                                                <a href="#">
                                                    {{ $item->name }}
                                                </a>

                                            </li>
                                        @endforeach
                                    @else
                                        No Category to show
                                    @endif
                                    {{-- <li><a class="active" href="#">Clothing</a> </li>
                                    <li><a href="#">Shoes</a> </li>
                                    <li><a href="#">Watches</a> </li>
                                    <li><a href="#">Jewelry</a> </li>
                                    <li><a href="#">Accessories</a> </li>
                                    <li><a href="#"> Big & Tall </a> </li>
                                    <li><a href="#">Contemporary</a></li> --}}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layouts.master>
