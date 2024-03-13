@extends('dashboard.layouts.main')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 px-3">
            <h1>Edit Data Anggota</h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-8 mx-auto">
                <form method="post" action="/dashboard/matriks-awal/{{ $matriks->id }}">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                    <label for="NA" class="form-label">NA</label>
                    <input type="integer" name="NA" class="form-control"                        
                    id="NA" value="{{ $matriks->NA }}">
                    </div>
                    <div class="mb-3">
                        <label for="Nama_Anggota" class="form-label">Nama Anggota</label>
                        <input type="text" name="Nama_Anggota" class="form-control"
                        id="Nama_Anggota" value="{{ $matriks->Nama_Anggota }}">
                    </div>
                    <div class="mb-3">
                      <label for="Simpanan" class="form-label">Simpanan</label>
                      <input type="integer" name="Simpanan" class="form-control"                        
                      id="Simpanan" value="{{ $matriks->Simpanan }}">
                      </div>
                      <div class="mb-3">
                        <label for="Pinjaman" class="form-label">Pinjaman</label>
                        <input type="integer" name="Pinjaman" class="form-control"                        
                        id="Pinjaman" value="{{ $matriks->Pinjaman }}">
                        </div>
                        <div class="mb-3">
                          <label for="C1" class="form-label">C1</label>
                          <input type="integer" name="C1" class="form-control"                        
                          id="C1" value="{{ $matriks->C1 }}">
                          </div>
                          <div class="mb-3">
                            <label for="C2" class="form-label">C2</label>
                            <input type="integer" name="C2" class="form-control"                        
                            id="C2" value="{{ $matriks->C2 }}">
                            </div>
                            <div class="mb-3">
                              <label for="C3" class="form-label">C3</label>
                              <input type="integer" name="C3" class="form-control"                        
                              id="C3" value="{{ $matriks->C3 }}">
                              </div>
                              <div class="mb-3">
                                <label for="C4" class="form-label">C4</label>
                                <input type="integer" name="C4" class="form-control"                        
                                id="C4" value="{{ $matriks->C4 }}">
                                </div>
                                <div class="mb-3">
                                  <label for="C5" class="form-label">C5</label>
                                  <input type="integer" name="C5" class="form-control"                        
                                  id="C5" value="{{ $matriks->C5 }}">
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