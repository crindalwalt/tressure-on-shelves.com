<x-layouts.master>
    <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Checkout</h2>
                <ul>
                    <li>
                        <a href="index.html">Home </a>
                    </li>
                    <li><span> > </span></li>
                    <li>
                        <a href="index.html">Product </a>
                    </li>
                    <li><span> > </span></li>
                    <li class="active"> Checkout </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cart-check-order-link-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ms-auto me-auto">
                    <div class="cart-check-order-link">
                        <a href="cart.html">Shopping Cart</a>
                        <a class="active" href="checkout.html">Check Out</a>
                        <a href="order-complete.html">Order Complete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-area bg-gray pt-160 pb-160">
        <form action="{{ route('checkout.post') }}" method="POST">
            @csrf

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-left-wrap">
                            <div class="login-guest-top">
                                {{-- <div class="checkout-tab nav">
                                <a href="#checkout-login" data-bs-toggle="tab">
                                    Log In
                                </a>
                                <a class="active" href="#checkout-guest" data-bs-toggle="tab">
                                    Buy as a Guest
                                </a>
                            </div> --}}
                                <div class="tab-content">
                                    <div id="checkout-login" class="tab-pane">
                                        <div class="checkout-login-wrap">
                                            <h4>Shoping as</h4>
                                            <div class="checkout-login-style">

                                                <input type="text" name="user-name" placeholder="Username">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <div class="checkout-button-box">
                                                    <div class="checkout-login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit">Login</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="checkout-guest" class="tab-pane active">
                                        <div class="checkout-guest-wrap">
                                            <h4>Contact information</h4>
                                            <div class="checkout-guest-style">

                                                <input type="text" name="user-name"
                                                    placeholder="Enter Mobile Number or Email"
                                                    value="{{ auth()->user()->email }}" readonly>
                                                <div class="guest-login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>Keep me up to date on news and exclusive offers</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shipping-address-wrap">
                                <h4 class="checkout-title">Shipping address</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Fast Name"
                                                name="first_name">
                                            @error('first_name')
                                                <div class="text-danger small">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Last Name"
                                                name="last_name">
                                            @error('last_name')
                                                <div class="text-danger small">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Address" name="address">
                                            @error('address')
                                                <div class="text-danger small">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Address More"
                                                name="address_2">
                                            @error('address_2')
                                                <div class="text-danger small">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="nice-select nice-select-style-3 cart-tax-select" name="province">
                                            <option>Select Country </option>
                                            <option>Bangladesh</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>India</option>
                                            <option>Barbados</option>
                                        </select>
                                        @error('province')
                                            <div class="text-danger small">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Postal Code"
                                                name="postel_code">
                                            @error('postel_code')
                                                <div class="text-danger small">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12">
                                    <div class="checkout-save-info">
                                        <input class="checkout-checkbox2" type="checkbox">
                                        <span>Save this information for next time</span>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment-details mb-40">
                            <h4 class="checkout-title">Payment Deatails</h4>
                            <ul>
                                <li>{{ $product->name }} <span>${{ $product->price }}</span></li>
                                <li>Shipping and Handing <span>${{ $shipping }}</span></li>
                                <li>Vat <span>${{ $vat_calc }}({{ $vat }}%)</span></li>
                            </ul>
                            <div class="total-order">
                                <ul>
                                    <li>Order Total <span>${{ $total }}</span></li>
                                    <input type="hidden" name="total_cost" value="{{ $total }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                </ul>
                            </div>
                        </div>
                        <div class="payment-details">
                            <h4 class="checkout-title">Payment Deatails</h4>
                            <div class="payment-method">
                                <div class="pay-top sin-payment">
                                    <input class="input-radio" type="radio" value="cash_on_delivery"
                                        checked="checked" name="payment_method">
                                    <label for="payment_method_1"> Cash On Delivery </label>

                                </div>
                                <div class="pay-top sin-payment">
                                    <input class="input-radio" type="radio" value="bank_wire"
                                        name="payment_method">
                                    <label for="payment-method-2">Bank Wire </label>
                                    {{-- <div class="payment-box payment_method_bacs">

                                            <input type="text" required="" placeholder="Enter Your Card Email"
                                                name="name">

                                    </div> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="back-continue-wrap">
                    <button type="submit">Please Order</button>
                </div>
            </div>
        </form>
    </div>

</x-layouts.master>
