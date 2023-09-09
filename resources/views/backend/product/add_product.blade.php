@extends('admin.admin_master')
@section('admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Add Product</h1>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <form action="{{ route('products.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-12">
                                    <input accept="image/*" type="file"
                                        class="form-control @error('image') is-invalid @enderror" name="image"
                                        id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                                <div class="col">
                                    <input type="text" name="price" class="form-control" placeholder="Price">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="product_code" class="form-control"
                                        placeholder="Product Code">
                                </div>
                                <div class="col">
                                    <textarea class="form-control" name="description"
                                        placeholder="Descriptoin"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
