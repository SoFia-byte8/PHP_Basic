<?php //templeat de php ?>
<!--Texto-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- LIBRERIA DE  JCNJ "Creo" PARA HALLADIR BOOTSTRAP STYLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
</head>
<body style="padding:20px;">
    <h1 style="text-align:center; padding-top:30px;">Lista de paises</h1>
    <br>
    <table class="table table-bodered ">
        <tr>
            <th class="table-dark">#</th>
            <th class="table-warning text-danger ">Nombre</th>
            <th class="table-warning text-primary" >Capital</th>
            <th class="table-primary ">Moneda</th>
            <!--<th class="table-danger ">Población</th>-->
        </tr>
        <tr>
            <!--INDICAR QUE ARRELGO DEBE TRAER-->
            @foreach ($naciones as $nombre => $pais)
                <tr>
                    <!--MOSTACHOS { { } } "METE PROBLEMA SI ESTAN JUNTOS los corchetes"-->
                    <td class="table-dark"> {{ $pais["#"] }} </td>
                    <td class="table-warning"> {{ $nombre }}</td>
                    <td class="table-warning"> {{ $pais["capital"] }} </td>
                    <td class="table-primary"> {{ $pais["moneda"] }} </td>
                    <td class="table-danger"> {{ $pais["poblacion"] }} </td>
                </tr>
            @endforeach
        </tr>
    </table>
</body>
</html>
