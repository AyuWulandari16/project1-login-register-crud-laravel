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

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('products.update', $editData->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                        <div class="col-12">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" value="{{$editData->title}}" class="form-control form-control-user">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label class="form-label">Price</label>
                                            <input type="text" name="price" value="{{$editData->price}}" class="form-control form-control-user"
                                                placeholder="">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product Code</label>
                                            <input type="text" name="product_code" value="{{$editData->product_code}}"
                                                class="form-control form-control-user" placeholder="">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Description</label>
                                            <input type="text" name="description" value="{{$editData->description}}" class="form-control form-control-user"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                                </div>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
