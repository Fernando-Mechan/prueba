
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col m12">
                    <div class="card black z-depth-3 white-text center-align">
                        <h2>Lista de Zapatos </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
                    <table class="table-responsive z-depth-3">
                        <tr class="black">
                            <th class="white-text center-align">Id</th>
                            <th class="white-text center-align">Precio</th>
                            <th class="white-text center-align">Color</th>
                            <th class="white-text center-align">Estilo</th>
                            <th class="white-text center-align">Talla</th>
                            <th class="white-text center-align">Genero</th>
                            <th class="white-text center-align">Cantidad</th>
                            <th class="white-text center-align">Elimina</th>
                        </tr>
                        <?php foreach ($this->MODEL->listar() as $k){ ?> 
                        <tr>
                            <td><?php echo $k->id_zapato ;?></td>
                            <td><?php echo $k->precio ;?></td>
                            <td><?php echo $k->color ;?></td>
                            <td><?php echo $k->estilo ;?></td>
                            <td><?php echo $k->talla ;?></td>
                            <td><?php echo $k->genero ;?></td>
                            <td><?php echo $k->cantidad ;?></td>
                            <td>
                                <a class="btn red z-depth-3" href="?c=eliminar&id=<?php echo $k->id_zapato ; ?>">Elimina</a>
                            </td>
                        </tr>
                        <?php } ?> 
                    </table>
                    <a href="?c=nuevo" class="btn btn-block black z-depth-3">Nuevo</a>
                </div>
            </div>
        </div>
    </body>
      
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
