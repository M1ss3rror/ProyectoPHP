<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Lista de Categorías</title>
</head>
<body>
<table class="table table-dark table-hover">
        <thead>
            <tr>
                <th colspan="2">
                    Nombre de Categoría
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $c)  
                <tr>
                    <td>
                        {{ $c->name   }}
                    </td>
                    <th>
                        <a href="{{ url('categorias/edit/'.$c->category_id) }}">Actualizar</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
          {{    $categorias->links()    }}
</body>
</html>