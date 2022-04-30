
    <?php
      class conexion{
          public static function conectar(){
              $x=new PDO("mysql:host=localhost:33065;dbname=zapato;charset=utf8","root","");
              $x->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              return $x;
          }
      }
    ?>

