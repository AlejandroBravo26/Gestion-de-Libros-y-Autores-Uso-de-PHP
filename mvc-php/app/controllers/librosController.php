<?php
require_once __DIR__.'/../services/librosService.php';
require_once __DIR__.'/../../config/database.php';

class librosController{

    private $librosService;

    public function __construct(){
        $database = new Database();
        $db = $database->conectar();
        $this->librosService = new librosService($db);
    }

    public function index(){
        $result = $this->librosService->getAll();
        echo json_encode($result);
    }
    
    public function show($id){
        $result = $this->librosService->getById($id);
        if($result ){
            echo json_encode($result);
        }else{
            http_response_code(404);
            echo json_encode(['mensaje'=>'autor no encontrado']);
        }
    }
}

?>