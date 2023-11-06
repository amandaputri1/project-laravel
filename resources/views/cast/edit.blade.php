@extends('layouts.master')
@section('title', 'Cast')
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
                          <li class="breadcrumb-item active">Cast</li>
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
              <h3 class="card-title">Cast</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('cast.update', $casts[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror"  name="nama" id="exampleInputPassword1" placeholder="Masukan Nama" value="{{ $casts[0]->nama}}">
                </div>
                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputPassword1">Umur</label>
                    <input type="number" class="form-control @error('nama') is-invalid @enderror" name="umur" id="exampleInputPassword1" placeholder="Masukan umur" value="{{ $casts[0]->umur}}">
                  </div>
                  @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <!-- textarea -->
                <div class="form-group">
                      <label>Biografi</label>
                      <textarea class="form-control @error('nama') is-invalid @enderror" name="bio" id="bio" placeholder="Input biografi">{{ $casts[0]->bio }}</textarea>
                    </div>
                    @error('bio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-warning">update</button>
              </div>
            </form>
          </div>
    @endsection