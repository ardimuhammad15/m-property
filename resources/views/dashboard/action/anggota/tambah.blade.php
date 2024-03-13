@extends('dashboard.layouts.main')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 px-3">
            <h1>Kelola Anggota</h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h5>Menu Tambah Anggota</h5>
          </div>
            <div class="card-body">
                <div class="col-lg-8 mx-auto">
                <form method="post" action="/dashboard/kelola-anggota">
                    @csrf
                    <div class="mb-3">
                    <label for="NA" class="form-label">NA</label>
                    <input type="integer" name="NA" class="form-control" id="exampleInputNA"
                    placeholder="Masukkan NA">
                    </div>
                    <div class="mb-3">
                        <label for="Nama_Anggota" class="form-label">Nama Anggota</label>
                        <input type="text" name="Nama_Anggota" class="form-control" id="Nama_Anggota"
                        placeholder="Masukkan Nama Anggota">
                    </div>
                    <div class="mb-3">
                        <label for="Tempat_Lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="Tempat_Lahir" class="form-control" id="Tempat_Lahir"
                        placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir">
                    </div>
                    <div class="mb-3">
                      <label for="Status_Pegawai" class="form-label">Status Pegawai/Golongan</label>
                      <select class="form-select" name="Status_Pegawai" aria-label="Default select example">
                        <option selected>Pilih Status</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="Satker" class="form-label">Satuan Kerja</label>
                      <select class="form-select" name="Satker">
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="Alamat_Lengkap" class="form-label">Alamat Rumah/Tinggal</label>
                      <textarea class="form-control" name="Alamat_Lengkap" id="alamat" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Telp" class="form-label">Telepon</label>
                        <input type="tel" name="Telp" class="form-control" id="Telp">
                    </div>
                    <div class="mb-3">
                        <label for="Nomor_Rekening" class="form-label">Nomor Rekening</label>
                        <input type="number" name="Nomor_Rekening" class="form-control" id="Nomor_Rekening">
                    </div>
                    <div class="mb-3">
                        <label for="Bank" class="form-label">Bank</label>
                        <input type="text" name="Bank" class="form-control" id="Bank">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Anggota</button>
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