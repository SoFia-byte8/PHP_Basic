<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        h2{color:green;
        margin-bottom: 20px;}

        body{
            font-family:Arial, Helvetica, sans-serif;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-content: center  ;
            text-align: center;
            flex-flow: column wrap;
            margin:auto;
            padding: 30px;
        }

        table{
        border-radius: 10px;
        border:1px grey solid;
        }

        th{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 800;
        }

        .y{
            background-color: rgb(250, 250, 210);
        }
        .n{
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
        }

        .b{
            background-color: rgb(127, 217, 247);
        }

        .balert{
            background-color: rgb(177, 233, 247);
        }

        .r{
            background-color: rgb(247, 184, 184);
        }

        .ralert{
            background-color: rgb(252, 213, 213);
            color:red;
            font-weight: 900;
        }

        .pagination{
            margin: auto;
        }

    </style>
</head>
<body>
    <h2>Catalogo de Artistas</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="y">Artista</th>
                <th class="b">Número Canciones</th>
                <th class="r">Albums</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artistas as $a)
                <tr>
                    <td class="y n" rowspan="{{ $a->discos->count() > 0 ? $a->discos->count() : 1 }}">
                        {{ $a->Name }}
                    </td>

                    @if ( $a->canciones->count() == 0)
                        <th class="b balert" >Sin canciones</th>
                    @else
                        <td class="b " rowspan="{{ $a->discos->count() > 0 ? $a->discos->count() : 1 }}">
                            {{ $a->canciones->count() }}
                        </td>
                    @endif

                    @if ( $a->discos->count() == 0 )
                    <th class="r ralert">
                        Sin discos
                    </th>
                    @else
                        @foreach ($a->discos as $d)
                            <td class="r">
                                {{ $d->Title }}
                            </td>
                        </tr><!--ES EL MISMO DE AFUERA COMMENT-->
                            @endforeach
                    @endif
                {{-- </tr> --}}
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $artistas->links() }}
    </div>
</body>
</html>
