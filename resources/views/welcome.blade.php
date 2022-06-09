<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Вход | Hawaii</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="9srf4IRe4QTzCZN06tniAGffvu7Y8lJiCqLSTmV8">

    <link rel="stylesheet" href="https://admin.kazgor.kz/vendor/adminlte/css/admin-lte.css">

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- iCheck -->
    <link rel="stylesheet" href="https://admin.kazgor.kz/vendor/adminlte/css/auth.css">
</head>

<body class="hold-transition register-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/">
                <b>Hawaii</b>
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Вход в систему</p>

            <form action="{{route('login-admin')}}" method="post">
                <input type="hidden" name="_token" value="9srf4IRe4QTzCZN06tniAGffvu7Y8lJiCqLSTmV8">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" value="" placeholder="Почта" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Пароль">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember">
                                Запомнить меня </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            Вход </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</body>

</html>