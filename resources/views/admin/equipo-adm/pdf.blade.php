<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
    <link rel="stylesheet" href="{{ public_path('vendor/ems/css/estilos.css') }}">
</head>
<body>
    <B class="verde">ENACO S.A.</B>
    <p class="Centrar">ASIGANCIONES</p>
    <p>Fecha: <?php echo date("Y-m-d");?></p>
    <hr>
    <table id="tabla1">
        <tbody>
            <tr>
                <td>Colaborador:</td>
                <td>{{ $element->d_equipo }}</td>
            </tr>
            <tr>
                <td>Ubicación:</td>
                <td>{{ $element->serie_equipo }}</td>
            </tr>
        </tbody>
    </table>


                
</body>
</html>