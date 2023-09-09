@extends('admin.admin_master')

@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active">View Product</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">

                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold">List Product</h5>
                        <a href="{{ route('product.add') }}" class="btn btn-primary mb-3">+ Add
                            Product</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Product Code</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allDataProduct as $key => $product)
                                        <tr>
                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>{{ $product->title }}</td>
                                            <td>@currency( $product->price )</td>
                                            <td>{{ $product->product_code }}</td>
                                            <!-- <td>{{ $product->description }}</td> -->
                                            <td>
                                                <a href="{{ route('product.detail', $product->id) }}"
                                                    class="btn btn-rounded btn-secondary">Detail</a>
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="btn btn-rounded btn-warning">Edit</a>
                                                <form
                                                    action="{{ route('products.delete', $product->id) }}"
                                                    method="POST" type="button" class="btn btn-danger p-0"
                                                    onsubmit="return confirm('Are you sure to delete?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-0">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
