@extends('admin.admin_master')
@section('admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Edit Film</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('films.update', $editData->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                    <div class="col-12">
                                        <label class="form-label">Judul</label>
                                        <input type="text" name="judul" value="{{$editData->judul}}" class="form-control form-control-user"></div>
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Tahun</label>
                                        <input type="text" name="tahun"value="{{$editData->tahun}}" class="form-control form-control-user" placeholder="">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Sutradara</label>
                                        <input type="text" name="sutradara" value="{{$editData->sutradara}}" class="form-control form-control-user"
                                        placeholder=""></div>
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
