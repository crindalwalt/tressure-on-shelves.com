<x-layouts.admin-layout>


    <div class="row">



        <div class="col-lg-12">
            <div class="row">

                @if ($products->isNotEmpty())
                    @foreach ($products as $item)
                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-img">
                                        {{-- <div class="product-ribbon  bg-primary">
                                            25% Off
                                        </div> --}}

                                        <img src="{{ asset("$item->image") }}" alt="" class="img-fluid mx-auto d-block">
                                    </div>



                                    <div class="text-center">

                                        <a href="" class="text-dark">
                                            <h5 class="font-size-18 mt-3">{{ $item->name }}</h5>
                                        </a>

                                        <h4 class="mt-3 mb-0">${{ $item->price }} <span
                                                class="font-size-14 text-muted me-2"><del>
                                                    ${{ $item->old_price }}

                                                </del></span></h4>

                                        <div class="mt-3">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    @if ($item->rating)
                                                        @for ($index = 0; $index < $item->rating; $index++)
                                                            <i class="mdi mdi-star text-warning"></i>
                                                        @endfor
                                                    @endif


                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>
                        No data found
                    </div>
                @endif


            </div>
            {{ $products->links() }}


        </div>


    </div>
    <!-- end row -->

</x-layouts.admin-layout>
