<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" integrity="sha512-t38vG/f94E72wz6pCsuuhcOPJlHKwPy+PY+n1+tJFzdte3hsIgYE7iEpgg/StngunGszVMrRfvwZinrza0vMTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title></title>
    </head>
    <body>
        <div class="container">
            <form method="post" action="?c=guardar">
                <div class="row">
                    <div class="col m12">
                        <div class="card black z-depth-3 white-text center-align">
                            <h2>Lista de Zapatos </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m3"></div>
                    <div class="col m3">Precio:</div>
                    <div class="col m3">
                        <input type="text" name="textprecio">
                    </div>
                </div>
                 <div class="row">
                    <div class="col m3"></div>
                    <div class="col m3">Color:</div>
                    <div class="col m3">
                        <input type="text" name="textcolor">
                    </div>
                </div>
                <div class="row">
                    <div class="col m3"></div>
                    <div class="col m3">Estilos:</div>
                    <div class="col m3">
                        <select name="cmbestilo">
                           <?php foreach ($this->MODEL->cargarestilo() as $k){ ?>
                            <option value= "<?php echo $k->id_estilo; ?>"> <?php echo $k->estilo;?></option>
                           <?php } ?>
                        </select>
                    </div>
                </div>
                  <div class="row">
                    <div class="col m3"></div>
                    <div class="col m3">Talla:</div>
                    <div class="col m3">
                        <select name="cmbtalla">
                          <?php foreach ($this->MODEL->cargartalla() as $e){ ?>
                            <option value= "<?php echo $e->id_talla; ?>"> <?php echo $e->talla; ?></option>
                           <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col m3"></div>
                    <div class="col m3">Genero:</div>
                    <div class="col m3">
                        <select name="cmbgenero">
                            <?php foreach ($this->MODEL->cargargenero() as $e){ ?>
                            <option value= "<?php echo $e->id_genero; ?>"> <?php echo $e->genero; ?></option>
                           <?php } ?>
                        </select>
                    </div>
                </div>
                 <div class="row">
                    <div class="col m3"></div>
                    <div class="col m3">Cantidad:</div>
                    <div class="col m3">
                        <input type="text" name="textcantidad">
                    </div>
                </div>
                 <div class="row">
                    <div class="col m3"></div>
                    <div class="col m6">
                        <input type="submit" name="ntym" value="guardar" class="btn red z-depth-3">
                    </div>
                </div>
            </form>
        </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script  >
          $(document).ready(function(){
                $('select').formSelect();
              });

     </script> 
        
    </body>   
</html>

