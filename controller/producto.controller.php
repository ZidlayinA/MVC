<?php
require_once 'model/producto.entidad.php';
require_once 'model/producto.model.php';
class ProductoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ProductoModel();
    }
    
    public function Home(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        
        $alm = new Producto();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
        
    }
    
    public function Guardar(){
        $alm = new Producto();
        
        $alm->__SET('id',              $_REQUEST['id']);
        $alm->__SET('Codigo',          $_REQUEST['Codigo']);
        $alm->__SET('Descripcion',     $_REQUEST['Descripcion']);
        $alm->__SET('Costo',           $_REQUEST['Costo']);
        $alm->__SET('Stock',           $_REQUEST['Stock']);
        $alm->__SET('Foto',            $_REQUEST['Foto']);
        
        if( !empty( $_FILES['Foto']['name'] ) ){
            $foto = date('ymdhis') . '-' . strtolower($_FILES['Foto']['name']);
            move_uploaded_file ($_FILES['Foto']['tmp_name'], 'uploads/' . $foto);
            
            $alm->__SET('Foto', $foto);
        }

        if($alm->__GET('id') != '' ? 
           $this->model->Actualizar($alm) : 
           $this->model->Registrar($alm));
        
        header('Location: home.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: home.php');
    }
}