<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Lista de pelícuas </h1>
    <table>
        <thead>
            <tr>Título</tr>
            <tr>Clasificación</tr>
            <tr>Idioma</tr>
            <tr>Categoría</tr>
        </thead>
        <tbody>
            @foreach(peliculas as $p)
                <tr>
                    <td>{{  $p->title   }}</td>
                    <td>{{  $p->rating   }}</td>
                    <td>{{  $p->idioma()->first()->name   }}</td>
                    <td>
                        @foreach($p->categorias()->getresults() as $categoria)
                        {{  $categoria->name  }},
                        @endforeach

                    </td>
                    <td>
                        @foreach($p->actor()->getresults() as $actor)
                        {{  $actor->first_name   }},
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>