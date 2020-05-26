<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Document</title>
</head>
    <body>
        <form class="form-horizontal" method="POST" action="{{ url('categorias/store') }}">
        @csrf
        <fieldset>
            <!-- DWtwctar si la variable tiene un valor -->   
            @if(session("exito")):
                <div class="alert-success">{{ session("exito" )}}</div>
            @endif
        <!-- Form Name -->
        <legend>Categoria</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="nombre">Ingrese su categoría</label>  
        <div class="col-md-4">
        <input id="textimput" name="nombre" value="{{old('categorias/store')}}" type="text" class="form-control input-md">
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