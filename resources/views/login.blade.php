<html>
<head>
    <title> Login </title>
    <style type="text/css">
        .show-error {
            color: white;
            font-weight: bold;
            font-size: 13px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('vendor/ems/css/login.css') }}">
</head>

<body>
        <div class="transparent"></div>
        <div class="principal">

            <div class="logo">
                <div>INVENTARIO <span>ENACO</span></div>
            </div>
            {{-- {{ dump($errors) }} --}}
            <div class="form">
                {!! Form::open(['route' => 'admin.login.submit' , 'method' => 'POST']) !!}
                    {!! Form::text('name' , null , ['placeholder' => 'Usuario', 'autofocus' => true]) !!}
                    @if ($errors->has('name'))
                         <br><span class="show-error">{{ $errors->first('name') }}</span>
                    @endif

                    {!! Form::password('password', ['placeholder' => 'Contraseña']) !!}
                    @if ($errors->has('password'))
                         <br><span class="show-error">{{ $errors->first('password') }}</span>
                    @endif
                    <button type="submit"> INGRESAR </button>
                {!! Form::close() !!}
            </div>

        </div>

</body>
</html>