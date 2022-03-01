<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Aplikasi Sarpras - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet')}}" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
  <link href="css/form.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

  <div class="loginBody">
    <div class="cardBody d-flex">
      <div class="banner">
        <div class="text">
          <h1>Selamat Datang</h1>
          <p class="text-center">Silahkan login untuk mengakses akun anda.</p>
        </div>
        <img src="{{url('assets/img/banner.jpg')}}" alt="">
      </div>
      <div class="form flex-column d-flex p-5">
        <div class="form-header text-center">
          <h2>LOGIN</h2>
          <p>Silahkan isi data dibawah ini</p>
        </div>
        <div class="form-item">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="username">
              <input type="username" id="username" @error('username') is-invalid @enderror name="username" value="{{ old('username') }}"  autocomplete="off" required >
              <label for="username" class="label-name">
                <span class="content-name">Username</span>
              </label>
            </div>

            @error('username')
                <strong style="color:red">{{ $message }}</strong>
            @enderror



            <div class="password">
              <input type="password" id="password" @error('password') is-invalid @enderror name="password"   autocomplete="off" required >
              <label for="password" class="label-name">
                <span class="content-name">Password</span>
              </label>
            </div>

            @error('password')
                <strong>{{ $message }}</strong
            @enderror


            <button type="submit" class="btn btn-dark btn-user btn-block">
              {{ __('Login') }}
            </button>

          </form>
        </div>
        <div class="form-footer">
          <hr>
          <div class="text-center">
            <a class="small" href="register">Create an Account!</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>

</body>
