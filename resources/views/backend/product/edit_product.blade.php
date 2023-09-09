@extends('admin.admin_master')
@section('admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Edit Product</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <form action="{{ route('products.update', $editData->id) }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title"
                                        value="{{ $editData->title }}">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="text" name="price" class="form-control" placeholder="Price"
                                        value="{{ $editData->price }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Product Code</label>
                                    <input type="text" name="product_code" class="form-control"
                                        placeholder="Product Code" value="{{ $editData->product_code }}">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description"
                                        placeholder="Descriptoin">{{ $editData->description }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-grid">
                                    <button class="btn btn-warning">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

        </div>
    </section>

</main><!-- End #main -->

@endsection