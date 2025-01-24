 {{-- Product Card Starts --}}
 <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
    <div class="product-wrap mb-50 me-1">
        <div class="product-img product-img-zoom mb-25">
            <a href="{{ route("product.single",$product->id) }}">
                <img src="{{ $product->image }}" alt="">
            </a>
        </div>
        <div class="product-content">
            <h4><a href="product-details.html">{{ $product->name }}</a>
            </h4>
            <div class="product-price">
                <span>$ {{ $product->price }}</span>
                <span class="old-price">$ {{ $product->old_price }}</span>
            </div>
        </div>
        <div class="product-action-position-1 text-center">
            <div class="product-content">
                <h4><a
                        href="product-details.html">{{ $product->name }}</a>
                </h4>
                <div class="product-price">
                    <span>$ {{ $product->price }}</span>
                    <span class="old-price">$
                        {{ $product->old_price }}</span>
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
