<?php

//incluir el modelo categoria
require_once __DIR__.'/../models/autores.php';

///encapsula las operaciones del CRUD en la base de datos para categoria
class autoresRepository{

    private $conn;
    private $table_name="autores";

    public function __construct($db){
        $this->conn=$db;
    }

    public function create(Categoria $autores){
        $query = "INSERT INTO {$this->table_name} (nombre,biografia) VALUES (:nombre,:biografia)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nombre",$autores->getNombre());
        $stmt->bindParam(":biografia",$autores->getBiografia());
        return $stmt->execute();
    }

    public function readAll(){
        $query = "SELECT * FROM {$this->table_name}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update(Categoria $autores){
        $query = "UPDATE {$this->table_name} SET nombre = :nombre, biografia = :biografia WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nombre",$autores->getNombre());
        $stmt->bindParam(":biografia",$autores->getBiografia());
        $stmt->bindParam(":id",$autores->getId());
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