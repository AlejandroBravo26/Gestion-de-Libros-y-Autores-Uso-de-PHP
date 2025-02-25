<?php
class autores {
    private $id;
    private $nombre;
    private $biografia;

    //constructor opcional
    public function __construct($nombre=null, $biografia=null) {
        $this->nombre = $nombre;
        $this->biografia = $biografia;
    }

    //getters y setters

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->biografia;
    }

    public function setDescripcion($descripcion) {
        $this->biografia = $biografia;
    }

}
?>