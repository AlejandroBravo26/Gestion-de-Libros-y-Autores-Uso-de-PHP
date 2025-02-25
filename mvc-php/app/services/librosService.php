<?php
require_once __DIR__.'/../models/libros.php';
require_once __DIR__.'/../repositories/librosRepository.php';

class librosService{

    private $librosRepository;

    public function __construct($db){
        $this->librosRepository=new librosRepository($db);
    }

    public function getAll(){
        $stmt = $this->librosRepository->readAll();
        $result = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[]=$row;
        }
        return $result;
    }

    public function getById($id){
        $data = $this->librosRepository->readOne($id);
        return $data ? $data:null;
    }

    public function create($data){
        $libros = new libros();
        $libros->setTitulo($data->titulo);
        $libros->setDescripcion($data->descripcion);
        return $this->librosRepository->create($libros);
    }

    public function update($data){
        $libros = new libros();
        $libros->setTitulo($data->titulo);
        $libros->setDescripcion($data->descripcion);
        $libros->setId($data->id);
        return $this->librosRepository->update($libros);
    }

    public function delete($id){
        return $this->librosRepository->delete($id);
    }

    
}
?>