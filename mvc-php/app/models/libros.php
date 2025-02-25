<?php
class Producto{

    private $id;
    private $titulo;
    private $descripcion;
    private $año;
    private $precio;
    private $autores_id

    public function __construct($id, $nombre, $descripcion, $precio, $categoria_id) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->año = $año;
        $this->precio = $precio;
        $this->autores_id = $autores_id;
    }

    public function __construct($nombre=null, $descripcion=null, $precio=null, $categoria_id=null) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->año = $año;
        $this->precio = $precio;
        $this->autores_id = $autores_id;
    }

    ///getters y setters

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
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    public function getAño() {
        return $this->año;
    }

    public function setPrecio($añoo) {
        $this->año = $año;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getCategoriaId() {
        return $this->autores_id;
    }

    public function setCategoriaId($categoria_id) {
        $this->autores_id = $autores_id;
    }
}

?>