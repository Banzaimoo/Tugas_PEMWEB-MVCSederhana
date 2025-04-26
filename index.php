<?php
require "Controller.php";
$controller = new Controller;

$page = (isset($_GET["page"])) ? $_GET["page"] : "load";
if($page == "insert"){
    $controller->insert();
}else if($page == "update"){
    $controller->update();
}else if($page =="delete"){
    $controller->delete();
}else{
    $controller->load();
}  
?>
