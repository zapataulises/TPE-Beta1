<?php
require_once "./Model/DropsModel.php";
require_once "./View/DropsView.php";
require_once "./Helper/logHelper.php";

class DropsController{

    private $model;
    private $view;

    //Constructor
    function __construct(){
        $this->model = new DropsModel();
        $this->view = new DropsView();
        $this->logHelper = new logHelper();
    }
    
    function showProducts(){
        if (!isset ($_POST['marcaFilter'])||($_POST['marcaFilter']=="all")) {
            $products = $this->model->getProducts();
        }
        else{
            $filter=$_POST['marcaFilter'];
            $products = $this->model->getProductsFilter($filter);
            
        }
        
        $marcas=$this->model->getMarcas();    
        $this->view->showProducts($marcas, $products);
    }
    
    function dropProduct($id){
        $product = $this-> model-> getSneakers($id);
        $this->view->showProduct($product); 
    }

    function addProduct(){
        $this->logHelper->checkLogIn();
        if(!isset($_POST['stock'])){
            $stock = 0;
        }else{
            $stock = 1;
        }

        $this->model->addProduct($_POST['Marca'], $_POST['Modelo'],$_POST['Precio'], $stock);
        $this->view->showHome($_POST['marcaFilter']);

    }

    function delProduct($id){
        $this->logHelper->checkLogIn();
        $this->model->delProduct($id);
        $this->view->showHome();
    }

    function updateProduct($updAct, $id){
        $this->logHelper->checkLogIn();
        if ($updAct=="addStock") {
            $updAct=1;
        }
        else{
            $updAct=0;
        }
        $this->model->updateProduct($updAct, $id);
        $this->view->showHome();

    }



}