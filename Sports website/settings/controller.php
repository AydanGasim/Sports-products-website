<?php
session_start();

ob_start();
date_default_timezone_set("Asia/Baku");
require_once "helper.php";
require_once "crud.php";
$currentPage = basename($_SERVER['PHP_SELF']);


$CRUD = new CRUD();
$HELPER = new Helper();


$currentPage = basename($_SERVER['PHP_SELF']);


if($currentPage==="products.php"){
    $allData = $CRUD->Select("sports", true);

};
if($currentPage==="shoes.php"){
    $allData = $CRUD->Select("shoes", true);

};
if($currentPage==="equipments.php"){
    $allData = $CRUD->Select("equipments", true);

};
