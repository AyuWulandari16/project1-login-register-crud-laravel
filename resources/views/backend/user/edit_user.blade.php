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

                        <form action="{{ route('users.update', $editData->id) }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Title"
                                        value="{{ $editData->name }}">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Price"
                                        value="{{ $editData->email }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Update</button>
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
