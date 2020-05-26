<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Edit</title>
</head>
    <body>
        <form class="form-horizontal" method="POST" action="{{ url('categorias/update/'.$categoria->id_category   ) }}">
        @csrf
        <input type="hidden" value="{{  $categoria->category_id  }}">
        <fieldset>
            <!-- DWtwctar si la variable tiene un valor -->   
            @if(session("exito")):
                <div class="alert-success">{{ session("exito" )}}</div>
            @endif
        <!-- Form Name -->
        <legend>Editar Categoria</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="nombre">Edite su categoría</label>  
        <div class="col-md-4">
        <input id="textimput" name="nombre" value="{{   $categoria->name   }}" type="text" class="form-control input-md">
        <strong class="text-danger"> {{  $errors->first('nombre')  }} </strong>
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
            <button id="" name="" type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </div>

        </fieldset>
        </form>

    </body>
</html>