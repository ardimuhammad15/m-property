@extends('dashboard.layouts.main')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 px-3">
            <h1>Edit Kriteria</h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-8 mx-auto">
                <form method="post" action="/dashboard/kelola-kriteria/{{ $kriteria->id }}">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                    <label for="kriteria" class="form-label">Nama Kriteria</label>
                    <input type="text" name="Nama_Kriteria" class="form-control"                        
                    id="exampleInputkriteria" value="{{ $kriteria->Nama_Kriteria }}">
                    </div>
                    <div class="mb-3">
                        <label for="Bobot" class="form-label">Bobot</label>
                        <input type="text" name="Bobot" class="form-control"
                        id="exampleInputbobot" value="{{ $kriteria->Bobot }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>   
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->
@endsection