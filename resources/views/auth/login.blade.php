@extends('layouts.laymas')

@section('content')

<body class="hold-transition login-page">
  <div class="login-box">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
      </div>
    @endif

<div class="login-logo">
  <a href=""><b>Property</b></a>
</div>
<!-- /.login-logo -->
<main class="form-signin">
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">LOGIN</p>

    <form action="/login" method="post">
      @csrf
      <div class="input-group mb-3">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
        id="email" placeholder="Masukkan Email"  value="{{ old('email') }}" autofocus required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    {{-- <p class="mb-1">
      <a href="forgot-password.html">I forgot my password</a>
    </p> --}}
    <p class="mb-0">
      <a href="/register" class="text-center">Register</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
</main>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
@endsection
