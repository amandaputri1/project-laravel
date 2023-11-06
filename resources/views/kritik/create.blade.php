@extends('layouts.master')
@section('title', 'Kritik')
    @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0"></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Kritik</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              <h3 class="card-title">Tambah Kritik</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route ('kritik.store', $film[0]->id)}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter nama peran" value="{{ auth()->user()->name}}" disabled>
                </div>
                  <input type="hidden" name="user_id" value="{{ auth()->user()->id}}">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Enter judul Film" value="{{ $film[0]->judul }}" disabled>
                </div>
                <div class="form-group">
                  <input type="hidden" name="film_id" value="{{ $film[0]->id}}">
                    <label for="content">Content kritik</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Enter Kritik Film"></textarea>
                </div>
                <div class="form-group">
                    <label for="point">Point</label>
                    <input type="text" name="point" id="point" class="form-control" placeholder="Enter point">
                </div>

                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Next</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    @endsection