<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.3.0/jquery.js" integrity="sha256-p3VvIf9sVY+YPVN2ByF0r1RujQf4vr4eb3YLL0tTAS0=" crossorigin="anonymous"></script>
    <script>
        //Carga el documento y listo pa' mostrarse 
        $(document).ready(function(){          
            console.log("Hola Paises");
            //elegir el control con id pais
            $("#pais").change(function(){
                //Limpiar select
                   $("#ciudad").html("");
                var idpais = $("#pais").val();
                console.log(idpais);
                //hacer petición a la ruta jsoncities
                $.getJSON('jsoncities/'+ idpais, function(result){
                     // console.log(result);
                      //Recorrer el arreglo de resultado
                      $.each(result, function(indice, objeto_ciudad){
                        //console.log(objeto_ciudad);  

                        //crear una opción y anexarlo al select
                        $('#ciudad').append("<option value='" + objeto_ciudad.city_id + "'>" + objeto_ciudad.city + '<option>');
                      });                    
                });
            });
        });
    </script>
    <title>Document</title>
</head>
<body>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cliente</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Seleccione Pais</label>
  <div class="col-md-5">
    <select id="pais" name="pais" class="form-control">
        @foreach($paises as $pais)
        <option value="{{   $pais->country_id   }}">
            {{  $pais->country  }}
        </option>
        @endforeach

    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Seleccione Ciudad</label>
  <div class="col-md-5">
    <select id="ciudad" name="ciudad" class="form-control">
    </select>
  </div>
</div>

</fieldset>
</form>

</body>
</html>