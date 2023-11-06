@extends('layouts.master')
@section('title', 'Peran')
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
                          <li class="breadcrumb-item active">Peran</li>
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
              <h3 class="card-title">Tambah Data Genre</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route ('peran.store', $film->id)}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Enter judul Film" value="{{ $film->judul }}" disabled>
                </div>
                <div class="form-group">
                    <label for="cast">cast</label>
                    <select name="cast_id" id="cast" class="form-control">
                      <option disabled selected>--Pilih Salah Satu--</option>
                        @forelse ($casts as $cast )
                          <option value="{{ $cast->id }}">{{ $cast->nama }}</option>
                        @empty
                          <option disabled>--Data Masih Kosong--</option>
                        @endforelse 
                        {{-- ($casts as $key => $value) --}}
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="peran">Nama Peran</label>
                    <input type="text" name="nama" id="peran" class="form-control" placeholder="Enter nama peran" >
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