@extends('admin.admin_master')
@section('admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Edit User</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <form class="row g-3" action="{{ route('users.update', $editData->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Your Name</label>
                                        <input type="name" value="{{$editData->name}}" class="form-control form-control-user" for="name" name="name"
                                        id="name" placeholder=""></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" value="{{$editData->email}}" id="email" name="email" class="form-control form-control-user"
                                        placeholder=""></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
