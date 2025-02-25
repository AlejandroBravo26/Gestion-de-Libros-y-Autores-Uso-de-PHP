<?php
require_once __DIR__.'/../models/autores.php';
require_once __DIR__.'/../repositories/autoresRepository.php';

class autoresService{

    private $autoresRepository;

    public function __construct($db){
        $this->autoresRepository=new autoresRepository($db);
    }

    public function getAll(){
        $stmt = $this->autoresRepository->readAll();
        $result = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[]=$row;
        }
        return $result;
    }

    public function getById($id){
        $data = $this->autoresRepository->readOne($id);
        return $data ? $data:null;
    }

    public function create($data){
        $autores = new autores();
        $autores->setNombre($data->nombre);
        $autores->setBiografia($data->biografia);
        return $this->autoresRepository->create($autores);
    }

    public function update($data){
        $autores = new Categoria();
        $autores->setNombre($data->nombre);
        $autores->setBiografia($data->biografia);
        $autores->setId($data->id);
        return $this->autoresRepository->update($autores);
    }

    public function delete($id){
        return $this->autoresRepository->delete($id);
    }

    
}
?>