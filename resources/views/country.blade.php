<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <title>Country_Php</title>
    <!--Styles -->
    <style>
        html, body {
            font-family: 'Nunito', sans-serif;
            background-color: rgb(228, 225, 225);
        }
        h1{
            text-align: center; color: rgb(83, 71, 71);
        }
        footer {
            background: rgb(77, 76, 76);
            color: white;
            height: 90px;
            text-align: center;
        }
        footer p{
            padding: 30px;
        }
    </style>
</head>
<body>
    <br><h1><b>List Country</b></h1>
<br>
<br>
<br>
<br>
    <table class="table table-Secondary" >
        <tr>
            <th class="text-success">Nombre</th>
            <th class="text-info">Capital</th>
            <th class="text-danger">Moneda</th>
            <th class="text-warning">Población</th>
        </tr>
    @foreach ( $naciones as $nombre => $nacion )
        <tr>
            <td class="table-active Gris"> {{ $nombre }} </td>
            <td class="table-active Gris "> {{ $nacion ["capital"] }} </td>
            <td class="table-active Gris"> {{ $nacion ["moneda"] }} </td>
            <td class="table-active Gris"> {{ $nacion ["poblacion"] }} </td>
        </tr>
    @endforeach

    </table>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <p> Hecho Por Sofía Calderón </p>
</body>
</html>
