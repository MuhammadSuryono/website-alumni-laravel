<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ikatan Alumni SMAN 6 Lubuklinggau | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("template/admin/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset("template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("template/admin/dist/css/adminlte.min.css") }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/auth/login"><img src="{{url("template/images/logo-alumni.png")}}"></a><br/>
        IKATAN ALUMNI SMAN 6 LUBUKLINGGAU
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masuk Untuk Memulai</p>

            <form action="/admin/dashboard" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user-secret"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ url("template/admin/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url("template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ url("template/admin/dist/js/adminlte.min.js") }}"></script>
</body>
</html>
