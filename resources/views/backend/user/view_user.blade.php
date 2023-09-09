@extends('admin.admin_master')

@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">View User</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-3">Data User</h5>
                            <a href="{{ route('user.add') }}" class="btn btn-primary mb-3">+ Add
                                User</a>
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allDataUser as $key => $user)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-info">Edit</a>
                                            <a href="{{ route('users.delete', $user->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
