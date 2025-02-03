<x-layouts.admin-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <h4 class="header-title">Add a Category</h4>
                        <p class="card-title-desc">Here you can add a Category in your ecommerce store <code
                                class="highlighter-rouge">live</code> </p>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="e.g Macbook" id="name"
                                    name="category_name">
                                @error('category_name')
                                    <div class="text-danger p-3 rounded-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" placeholder="bootstrap@example.com"
                                    id="example-email-input" name="category_icon">
                                @error('category_icon')
                                    <div class="text-danger p-3 rounded-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary px-5">Add A Category</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div> <!-- end col -->
    </div>

</x-layouts.admin-layout>
