@extends('layouts.master')
@section('title', 'Genre')
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
                          <li class="breadcrumb-item active">Genre</li>
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
            <div class="card card-warning">
              <div class="card-header">
              <h3 class="card-title">Data Genre</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route ('genre.update', $genre->id)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="exampleInputPassword1" placeholder="Masukan Nama" value="{{$genre->nama}}">
                </div>
                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <!-- textarea -->
               
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                <input type="button" class="btn btn-danger" value="kembali" onclick="history.back()">

              </div>
            </form>
          </div>
    @endsection