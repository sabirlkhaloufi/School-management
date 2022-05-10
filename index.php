<?php
require_once './controllers/HomeController.php';

$home = new HomeController();
// $home->index('home');
$pages = ['home' , 'add','update','delete'];
if(isset($_GET['page'])){
     if(in_array($_GET['page'] , $pages)){
         $home->index($_GET['page']);
     }
     else{
         include('./views/includes/404.php');
     }
}else{
    $home->index('home');
}