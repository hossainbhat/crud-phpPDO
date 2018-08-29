<?php
include "../../vendor/autoload.php";

//print_r($_POST); 
use App\Mobile\Mobile;
$obj= new Mobile;
$obj->setData($_POST);
$obj->store();


?>