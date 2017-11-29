<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="{{ asset('imagenes/empresa/molinstec.png') }}">
    <!-- Bootstrap 3.3.7 -->
    {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}
    <!-- Ionicons -->
    {!!Html::style('bower_components/Ionicons/css/ionicons.min.css')!!}
    <!-- Theme style -->
    {!!Html::style('dist/css/AdminLTE.min.css')!!}
    {!!Html::style('plugins/iCheck/square/blue.css')!!}
    {!!Html::style('css/select.css')!!}
    {!!Html::style('css/input.css')!!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="imagenes/empresa/logo.png">
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Iniciar Sesión</p>
            {!! Form::open(['route' => 'login.store','method' => 'POST']) !!}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="rut_usuario" placeholder="Rut" id="Identificacion" required onKeyPress="return SoloNumeros(event);">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <p style="color: red;">Ingresar el rut sin puntos, con guión y dígito verificador</p>
                    @if ($errors->has('rut_usuario'))
                        <span class="help-block">
                            <p style="color: red">{{ $errors->first('rut_usuario') }}</p>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <p style="color: red;">{{ $errors->first('password') }}</p>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> Ingresar</button>
                </div>
            {!! Form::close() !!}
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <!-- jQuery 3 -->
    {!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
    <!-- Bootstrap 3.3.7 -->
    {!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
    <!-- iCheck -->
    {!!Html::script('plugins/iCheck/icheck.min.js')!!}
    {!!Html::script('js/rut_vista.js')!!}
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>
</html>
