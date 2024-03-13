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
                <form method="post" action="/dashboard/kelola-anggota/{{ $anggota->id }}">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                    <label for="NA" class="form-label">NA</label>
                    <input type="integer" name="NA" class="form-control"                        
                    id="NA" value="{{ $anggota->NA }}">
                    </div>
                    <div class="mb-3">
                        <label for="Nama_Anggota" class="form-label">Nama Anggota</label>
                        <input type="text" name="Nama_Anggota" class="form-control"
                        id="Nama_Anggota" value="{{ $anggota->Nama_Anggota }}">
                    </div>
                    <div class="mb-3">
                      <label for="Tempat_Lahir" class="form-label">Tempat Lahir</label>
                      <input type="text" name="Tempat_Lahir" class="form-control"                        
                      id="Tempat_Lahir" value="{{ $anggota->Tempat_Lahir }}">
                    </div>
                    <div class="mb-3">
                      <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" name="Tanggal_Lahir" class="form-control"                        
                      id="Tanggal_Lahir" value="{{ $anggota->Tanggal_Lahir }}">
                      </div>
                    <div class="mb-3">
                      <label for="Status_Pegawai" class="form-label">Status Pegawai</label>
                      <select class="form-select" name="Status_Pegawai" aria-label="Default select example">
                        <option selected>{{ $anggota->Status_Pegawai }}</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="Satker" class="form-label">Satker</label>
                      <select class="form-select" name="Satker" id="Satker">
                        <option selected>{{ $anggota->Satker }}</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="Alamat_Lengkap" class="form-label">Alamat_Lengkap</label>
                      <input type="text" name="Alamat_Lengkap" class="form-control"                        
                      id="Alamat_Lengkap" value="{{ $anggota->Alamat_Lengkap }}">
                    </div>
                    <div class="mb-3">
                      <label for="Telp" class="form-label">Nomor Telepon</label>
                      <input type="tel" name="Telp" class="form-control"                        
                      id="Telp" value="{{ $anggota->Telp }}">
                    </div>
                    <div class="mb-3">
                      <label for="Nomor_Rekening" class="form-label">Nomor Rekening</label>
                      <input type="integer" name="Nomor_Rekening" class="form-control"                        
                        id="Nomor_Rekening" value="{{ $anggota->Nomor_Rekening }}">
                    </div>
                    <div class="mb-3">
                      <label for="Bank" class="form-label">Bank</label>
                      <input type="text" name="Bank" class="form-control"                        
                        id="Bank" value="{{ $anggota->Bank }}">
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