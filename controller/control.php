
    <?php
  
     include_once 'model/zapato.php';
     class control{
         public $MODEL;  
         public function __construct() {
             $this->MODEL= new zapato();  
         }

         public function index () {
             include_once 'view/home.php';
         }
         public function nuevo(){
             include_once 'view/save.php';
         }
         public function guardar(){
             $alm= new zapato();
             $alm->precio=$_POST['textprecio'];
             $alm->color=$_POST['textcolor'];
             $alm->id_estilo=$_POST['cmbestilo'];
             $alm->id_talla=$_POST['cmbtalla'];
             $alm->id_genero=$_POST['cmbgenero'];
             $alm->cantidad=$_POST['textcantidad'];
             $this->MODEL->registrar($alm);
             header("location:index.php");
         }
         public function eliminar(){
              $this->MODEL->delete($_REQUEST['id']);
              header("location:index.php");
         }
     }
    ?>

