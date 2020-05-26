<!DOCTYPE html>
<html>
<header>
    <title> LISTA DE PAISES </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
</header>
<center>
    <body>
        <h1 class="text-danger">LISTA DE PAISES</h1>
            <table class="table table-bordered">
                <thead>
                    <tr >
                        <th>PAÍS</th>
                        <th>CAPITAL</th>
                        <th>MONEDA</th>
                        <th>POBLACIÓN</th>
                        <th>CIUDADES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Paises as $Pais=>$infopais)
                    <tr>
                        <td>
                            {{  $Pais   }}
                        </td>
                        <td>
                            {{  $infopais["Capital"]   }}
                        </td>
                        <td>
                            {{  $infopais["Moneda"]   }}
                        </td>
                        <td>
                            {{  $infopais["Población"]   }}
                        </td>
                        <td>
                         <ul>
                           
                                @foreach($infopais["Ciudades"] as $ciudad)
                               <li> {{   $ciudad     }} </li>
                                @endforeach
                            
                        </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </body>
</center>
</html>