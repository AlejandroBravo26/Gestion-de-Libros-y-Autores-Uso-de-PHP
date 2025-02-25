<?php

//incluir el modelo categoria
require_once __DIR__.'/../models/libros.php';

///encapsula las operaciones del CRUD en la base de datos para categoria
class librosRepository{

    private $conn;
    private $table_name="libros";

    public function __construct($db){
        $this->conn=$db;
    }

    public function create(Categoria $libros){
        $query = "INSERT INTO {$this->table_name} (titulo,descripcion) VALUES (:titulo,:descripcion)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":titulo",$libros->getTitulo());
        $stmt->bindParam(":descripcion",$libros->getDescripcion());
        return $stmt->execute();
    }

    public function readAll(){
        $query = "SELECT * FROM {$this->table_name}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update(Categoria $libros){
        $query = "UPDATE {$this->table_name} SET titulo = :titulo, descripcion = :descripcion WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":titulo",$libros->getTitulo());
        $stmt->bindParam(":descripcion",$libros->getBiografia());
        $stmt->bindParam(":id",$libros->getId());
        return $stmt->execute();
    }

    public function delete($id){
        $query = "DELETE FROM {$this->table_name} WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id",$id);
        return $stmt->execute();
    }

    public function readOne($id){
        $query = "SELECT * FROM {$this->table_name} WHERE id=:id LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>