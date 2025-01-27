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

                                        <img src="{{ $item->image }}" alt="" class="img-fluid mx-auto d-block">
                                    </div>



                                    <div class="text-center">

                                        <a href="" class="text-dark">
                                            <h5 class="font-size-18 mt-3">{{ $item->name }}</h5>
                                        </a>

                                        <h4 class="mt-3 mb-0">${{ $item->price }}0 <span
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

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="mb-sm-0 mt-2">Page <span class="font-weight-bold">2</span> Of <span
                                                class="font-weight-bold">113</span></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-sm-end">
                                        <ul class="pagination pagination-rounded mb-sm-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i
                                                        class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i
                                                        class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>


    </div>
    <!-- end row -->

</x-layouts.admin-layout>
