<?php
class Producto
    {
        private $id;
        private $Codigo;
        private $Descripcion;
        private $Costo;
        private $Stock;
        private $Foto;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }