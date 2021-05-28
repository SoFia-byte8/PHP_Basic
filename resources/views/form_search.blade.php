<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" />
    <style>
        html, body {
            font-family: 'Nunito', sans-serif;
            background-color: rgb(228, 225, 225);
        }
        h1, .form-group{
            text-align: center;
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
    <form class="form-horizontal"
    method="POST" action="{{ url ("search") }}"
        class="form-horizontal">
        @csrf
    <fieldset>
        <legend><br><h1><b>Búsqueda en varios motores</b></h1></legend><br>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Ingrese un término">-- Ingrese el Término de Búsqueda :</label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">
          </div>
        </div><br>

        <div class="form-group"><br>
            <label class="col-md-6 control-label" for="motores">-- Seleccione Por que Medio desea su Búsqueda. </label>
            <div class="col-md-12">
                <div class="radio">
                <label for="motores-0">
                    <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
                    Google
                </label>
                    </div>
                <div class="radio">
                <label for="motores-1">
                    <input type="radio" name="motores" id="motores-1" value="2">
                    Youtube
                </label>
                </div>
                <div class="radio">
                <label for="motores-2">
                    <input type="radio" name="motores" id="motores-2" value="3">
                    Yahoo
                </label>
                </div>
                <div class="radio">
                <label for="motores-3">
                    <input type="radio" name="motores" id="motores-3" value="4">
                    Youtube
                </label>
                </div>
                <div class="radio">
                <label for="motores-4">
                    <input type="radio" name="motores" id="motores-4" value="5">
                    Baidu
                </label>
                </div>
            </div>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-dark">Buscar!</button>
          </div>
        </div>

    </fieldset>
    </form>
    <br><br><br><br><br><br><br><br><br><br><br>

    <footer>
        <p> Hecho Por Sofía Calderón </p>
    </body>
</body>
</html>
