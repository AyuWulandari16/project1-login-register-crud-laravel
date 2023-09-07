@extends('admin.admin_master')

@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Film</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-3">Data Film</h5>
                            <a href="{{ route('film.add') }}" class="btn btn-primary mb-3">+ Add User</a>
                        </div>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Sutradara</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allDataFilm as $key => $film)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$film->judul}}</td>
                                                    <td>{{$film->tahun}}</td>
                                                    <td>{{$film->sutradara}}</td>                                                    
                                                    <td>
                                                        <a href="{{route('films.edit', $film->id)}}" class="btn btn-rounded btn-warning">Edit</a>
                                                        <a href="{{route('films.delete', $film->id)}}" id="delete" class="btn btn-rounded btn-danger">Delete</a>
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
