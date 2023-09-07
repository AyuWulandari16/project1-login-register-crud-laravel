@extends('admin.admin_master')
@section('admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Add User</h1>
        <!-- <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Layouts</li>
            </ol>
        </nav> -->
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Your Name</label>
                                        <input type="name" class="form-control form-control-user" for="name" name="name"
                                        id="name" placeholder=""></div>
                                    <div class="col-12 mt-3">
                                        <label for="inputPassword4" class="form-label">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-user" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-user"
                                        placeholder=""></div>
                                    <!-- <div class="col-12 mt-3">
                                        <label for="inputPassword4" class="form-label">Repeat Password</label>
                                        <input for="password_confirmation" id="password_confirmation" type="password"
                                            name="password_confirmation" class="form-control form-control-user"
                                            placeholder="">
                                    </div> -->
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
