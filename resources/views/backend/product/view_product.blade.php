@extends('admin.admin_master')

@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Product</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-3">Data Product</h5>
                            <a href="{{ route('product.add') }}" class="btn btn-primary mb-3">+ Add Product</a>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Product Code</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allDataProduct as $key => $product)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$product->title}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>{{$product->product_code}}</td>
                                                    <td>{{$product->description}}</td>                                                    
                                                    <td>
                                                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-rounded btn-warning">Edit</a>
                                                        <a href="{{route('products.delete', $product->id)}}" id="delete" class="btn btn-rounded btn-danger">Delete</a>
                                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
