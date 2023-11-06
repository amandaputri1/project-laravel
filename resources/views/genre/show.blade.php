@extends('layouts.master')
@section('title', 'Genre')
@section('content')
    <div class="content-wrapper">
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
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Genret</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Masukan Nama" value="{{ $genres[0]->nama}}" disabled>
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Umur</label>
              <input type="number" class="form-control" name="umur" id="exampleInputPassword1" placeholder="Masukan umur" value="{{ $genres[0]->umur}}" disabled>
            </div>
          <!-- textarea -->
          <div class="form-group">
                <label>Biografi</label>
                <textarea class="form-control" name="bio" rows="3" placeholder="Masukan bio" disabled>{{ $genres[0]->bio}}</textarea>
              </div>
            </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Next</button>
        </div>
      
    </div>

@endsection