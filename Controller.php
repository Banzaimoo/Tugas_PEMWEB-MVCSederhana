<?php
class Controller{
    public function loadModel(){
        include_once "Model.php";
        return new Model;
    }

    public function loadView($viewName, $data = []){
        include "$viewName.php";
    }

    function load(){
        $model = $this->loadModel();
        $data = $model->load();
        $this->loadView('view_load', $data);
    }
    
    function insert(){
        $this->loadView('view_insert',[]);
        if(isset($_POST["insert"])){
            $model = $this->loadModel();
            if($model->insert($_POST)){
                echo "<script>alert('Data berhasil ditambahkan');</script>";
            }else {
                echo "<script>alert('Data gagal ditambahkan');</script>";
            }
            echo "<script>window.location.href='index.php?page=load';</script>";
        }
    }
    
    function delete(){
        $model = $this->loadModel();
        if($model->delete($_GET["nim"])){
            echo "<script>alert('Data berhasil Dihapus');</script>";
        }else {
            echo "<script>alert('Data gagal Dihapus');</script>";
        }
        echo "<script>window.location.href='index.php?page=load';</script>";
    }
    
    function update(){
        $model = $this->loadModel();
        $data = $model->takeRow($_GET['nim']);
        $this->loadView('view_update',$data);
        if(isset($_POST["update"])){
            if($model->update($_POST)){
                echo "<script>alert('Data berhasil Diupdate');</script>";
            }else {
                echo "<script>alert('Data gagal Diupdate');</script>";
            }
            echo "<script>window.location.href='index.php?page=load';</script>";
        }
    }
}
?>