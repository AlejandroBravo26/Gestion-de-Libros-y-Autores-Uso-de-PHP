<?php
require_once __DIR__.'/../services/autoresService.php';
require_once __DIR__.'/../../config/database.php';

class autoresController{

    private $autoresService;

    public function __construct(){
        $database = new Database();
        $db = $database->conectar();
        $this->autoresService = new autoresService($db);
    }

    public function index(){
        $result = $this->autoresService->getAll();
        echo json_encode($result);
    }
    
    public function show($id){
        $result = $this->autoresService->getById($id);
        if($result ){
            echo json_encode($result);
        }else{
            http_response_code(404);
            echo json_encode(['mensaje'=>'autor no encontrado']);
        }
    }
}

?>