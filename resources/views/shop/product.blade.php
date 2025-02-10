<x-layouts.master>


    <div class="product-details-area slider-mt-7 pb-160">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="bg-gray product-details-2-img-wrap pt-40 text-center">
                        <div class="product-details-3-img-slider dot-style-8">
                            <div class="product-details-2-img text-center">
                                <img src="{{ $product->image }}" alt="">
                            </div>
                            <div class="product-details-2-img text-center">
                                <img src="assets/images/product-details/product-details-slider-2.png" alt="">
                            </div>
                            <div class="product-details-2-img text-center">
                                <img src="assets/images/product-details/product-details-img-1.png" alt="">
                            </div>
                        </div>
                        <div class="product-details-shape pro-dec-shape3">
                            <img src="assets/images/product-details/product-details-shape.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-content quickview-content product-details-content-3">
                        <h2>{{ $product->name }}</h2>
                        <div class="product-ratting-review-wrap">
                            <div class="product-ratting-digit-wrap">
                                <div class="product-ratting">
                                    <i class="icon-rating"></i>
                                    <i class="icon-rating"></i>
                                    <i class="icon-rating"></i>
                                    <i class="icon-rating"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                                <div class="product-digit">
                                    <span>4.0</span>
                                </div>
                            </div>
                            <div class="product-review-order">
                                <span>62 Reviews</span>
                                <span>242 orders</span>
                            </div>
                        </div>
                        <p class="pro-dec-paragraph-1">
                            {{ $product->description }}
                        </p>
                        <div class="pro-details-price">
                            <span>US ${{ $product->price }}</span>
                            <span class="old-price">US ${{ $product->old_price }}</span>
                        </div>

                        <div class="product-details-meta">
                            <ul>
                                <li><span>Model:</span> <a href="#">Odsy-1000</a></li>
                                <li><span>Ship To</span> <a href="#">2834 Laurel Lane</a>, <a
                                        href="#">Mentone</a> , <a href="#">Texas</a></li>
                            </ul>
                        </div>
                        <div class="pro-details-action-wrap">
                            <div class="pro-details-buy-now">
                                <a href="{{ route("checkout",$product->id) }}">Buy Now</a>
                            </div>
                            <div class="pro-details-action">
                                <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                <div class="product-dec-social">
                                    <a class="facebook" title="Facebook" href="#"><i
                                            class="icon-social-facebook-square"></i></a>
                                    <a class="twitter" title="Twitter" href="#"><i
                                            class="icon-social-twitter"></i></a>
                                    <a class="instagram" title="Instagram" href="#"><i
                                            class="icon-social-instagram"></i></a>
                                    <a class="pinterest" title="Pinterest" href="#"><i
                                            class="icon-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-wrapper pb-155">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dec-review-topbar nav mb-65">
                        <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                        <a data-bs-toggle="tab" href="#des-details2">Specification</a>
                        <a data-bs-toggle="tab" href="#des-details3">Meterials </a>
                        <a data-bs-toggle="tab" href="#des-details4">Reviews and Ratting </a>
                    </div>
                    <div class="tab-content dec-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="description-wrap">
                                <p>Crafted in premium watch quality, fenix Chronos is the first Garmin timepiece to
                                    combine a durable metal case with integrated performance GPS to support navigation
                                    and sport. In the tradition of classic tool watches it features a tough design and a
                                    set of modern meaningful tools like Elevate wrist heart rate, various sports apps.
                                </p>
                                <p> advanced performance metrics for endurance sports, Garmin quality navigation
                                    features and smart notifications. In fenix Chronos top-tier performance meets
                                    sophisticated design in a highly evolved timepiece that fits your style anywhere,
                                    anytime. Solid brushed 316L stainless steel case with brushed stainless steel bezel
                                    and integrated EXOTM antenna for GPS + GLONASS support. High-strength scratch
                                    resistant sapphire crystal. Brown vintage leather strap with hand-sewn contrast
                                    stitching and nubuck inner lining and quick release mechanism.</p>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="width1">Name</td>
                                            <td>Salwar Kameez</td>
                                        </tr>
                                        <tr>
                                            <td>SKU</td>
                                            <td>0x48e2c</td>
                                        </tr>
                                        <tr>
                                            <td class="width1">Models</td>
                                            <td>FX 829 v1</td>
                                        </tr>
                                        <tr>
                                            <td class="width1">Categories</td>
                                            <td>Digital Print</td>
                                        </tr>
                                        <tr>
                                            <td class="width1">Size</td>
                                            <td>60’’ x 40’’</td>
                                        </tr>
                                        <tr>
                                            <td class="width1">Brand </td>
                                            <td>Individual Collections</td>
                                        </tr>
                                        <tr>
                                            <td class="width1">Color</td>
                                            <td>Black, White</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="width1">Top</td>
                                            <td>Cotton Digital Print Chain Stitch Embroidery Work</td>
                                        </tr>
                                        <tr>
                                            <td>Bottom</td>
                                            <td>Cotton Cambric</td>
                                        </tr>
                                        <tr>
                                            <td class="width1">Dupatta</td>
                                            <td>Digital Printed Cotton Malmal With Chain Stitch</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="des-details4" class="tab-pane">
                            <div class="review-wrapper">
                                <h2>1 review for Sleeve Button Cowl Neck</h2>
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="assets/images/product-details/client-1.png" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h5><span>John Snow</span> - March 14, 2019</h5>
                                            </div>
                                            <div class="review-rating">
                                                <i class="yellow icon-rating"></i>
                                                <i class="yellow icon-rating"></i>
                                                <i class="yellow icon-rating"></i>
                                                <i class="yellow icon-rating"></i>
                                                <i class="yellow icon-rating"></i>
                                            </div>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna
                                            molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam
                                            egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <span>Add a Review</span>
                                <p>Your email address will not be published. Required fields are marked <span>*</span>
                                </p>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="star-box-wrap">
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                        <a href="#"><i class="icon-rating"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                    <label>Your review <span>*</span></label>
                                                    <textarea name="Your Review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-155">
        <div class="container">
            <div class="section-title-8 mb-65">
                <h2>You May Like Also</h2>
            </div>
            <div class="product-slider-active-4">


                @if ($similar_product->isNotEmpty())
                    @foreach ($similar_product as $product)
                    {{-- <div class="mx-1"> --}}
                        <x-utils.product-card :product="$product" />

                    {{-- </div> --}}
                    @endforeach
                    @else
                    No Similar product found
                @endif


            </div>
        </div>
    </div>
</x-layouts.master>
