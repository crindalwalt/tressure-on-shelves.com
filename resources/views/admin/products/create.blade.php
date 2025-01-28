<x-layouts.admin-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <h4 class="header-title">Add a Product</h4>
                        <p class="card-title-desc">Here you can add a product in your ecommerce store <code
                                class="highlighter-rouge">live</code> </p>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="e.g Macbook" id="name"
                                    name="product_name">
                                @error('product_name')
                                    <div class="text-danger p-3 rounded-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="search" placeholder="How do I shoot web"
                                    id="example-search-input" name="product_description">
                                @error('product_description')
                                    <div class="text-danger p-3 rounded-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" placeholder="bootstrap@example.com"
                                    id="example-email-input" name="price">
                                @error('price')
                                    <div class="text-danger p-3 rounded-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-url-input" class="col-sm-2 col-form-label">Old Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" placeholder="https://getbootstrap.com"
                                    id="example-url-input" name="old_price">
                                @error('old_price')
                                    <div class="text-danger p-3 rounded-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-number-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" value="42" id="example-number-input"
                                    name="product_image">
                                @error('product_image')
                                    <div class="text-danger p-3 rounded-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    <option selected value="null">Select the category</option>
                                    @if ($categories->isNotEmpty())
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    @endif

                                </select>
                            </div>
                            @error('category')
                                <div class="text-danger p-3 rounded-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary px-5">Add A product</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div> <!-- end col -->
    </div>

</x-layouts.admin-layout>
