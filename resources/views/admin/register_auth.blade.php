<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng Kí</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
  	<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tạo một tài khoản!</h1>
              </div>
              <form class="user"  action="{{URL::to('/register')}}" method="post">
              	{{csrf_field()}}
                    <?php
                      $message = Session::get('message');
                      if ($message){
                        echo $message;
                        Session::put('message',null);
                      }
                    ?>
                <div class="form-group">
                    <input type="text" name="Name" value="{{old('Name')}}" class="form-control form-control-user" id="exampleFirstName" placeholder="Nhập tên tài khoản...">
                </div>
                <div class="form-group">
                  <input type="email" name="Email" value="{{old('Email')}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập email...">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="Password" value="{{old('Password')}}" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mật Khẩu">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="Password" value="{{old('Password')}}" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Nhập Lại Mật Khẩu">
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit"> Đăng Kí</button>
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Đăng Nhập Bằng Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Đăng Nhập Bằng Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
              </div>
              <div class="text-center">
                <a class="small" href="{{URL::to('admin')}}">Bạn đã sẵn sàng để tạo một tài khoản? Đăng nhập!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/backend/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
