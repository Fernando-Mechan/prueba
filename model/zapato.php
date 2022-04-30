
    <?php
        class zapato{
            public $CNX;
            public $id_zapato;
            public $precio;
            public $color;
            public $id_estilo;
            public $id_talla;
            public $id_genero;
            public $cantidad;
            public function __construct() {
                try{
                    $this->CNX= conexion::conectar();
                } catch (Exception $ex) {
                   die($ex->getMessage());
                }
            } 
            public function listar(){
                try {
                    $query="SELECT z.id_zapato,z.precio,z.color,e.estilo,t.talla,g.genero,z.cantidad "
                            . "FROM dbozapato z INNER JOIN dboestilo e ON z.id_estilo=e.id_estilo "
                            . "INNER JOIN dbotalla t ON z.id_talla=t.id_talla INNER JOIN dbogenero g ON z.id_genero=g.id_genero;";
                    $smt= $this->CNX->prepare($query);
                    $smt->execute();
                    return $smt->fetchAll(PDO::FETCH_OBJ);
                } catch (Exception $ex) {
                   die($ex->getMessage()); 
                }
            }
            
            public function cargarestilo(){
                try {
                    $query="select * from dboestilo";
                    $smt= $this->CNX->prepare($query);
                    $smt->execute();
                    return $smt->fetchAll(PDO::FETCH_OBJ);
                } catch (Exception $ex) {
                   die($ex->getMessage()); 
                }
            }
            
            public function cargartalla(){
                try {
                    $query="select * from dbotalla";
                    $smt= $this->CNX->prepare($query);
                    $smt->execute();
                    return $smt->fetchAll(PDO::FETCH_OBJ);
                } catch (Exception $ex) {
                   die($ex->getMessage()); 
                }
            }
            public function cargargenero(){
                try {
                    $query="select * from dbogenero";
                    $smt= $this->CNX->prepare($query);
                    $smt->execute();
                    return $smt->fetchAll(PDO::FETCH_OBJ);
                } catch (Exception $ex) {
                   die($ex->getMessage()); 
                }
            }
            public function delete($id){
                try {
                    $query="delete from dbozapato where id_zapato=?";
                    $this->CNX->prepare($query)->execute(array($id));
                } catch (Exception $ex) {
                   die($ex->getMessage()); 
                } 
            }

                        public function registrar (zapato $data){
                 try {
                    $query="insert into dbozapato(precio,color,id_estilo,id_talla,id_genero,cantidad)"
                            . " values (?,?,?,?,?,?)";
                    $this->CNX->prepare($query)->execute(array($data->precio,$data->color,$data->id_estilo,$data->id_talla,$data->id_genero,$data->cantidad));
                   
                } catch (Exception $ex) {
                   die($ex->getMessage()); 
                }   
            }
            
            
        }
        
        
    ?>

