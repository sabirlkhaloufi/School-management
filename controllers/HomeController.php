<?php 
class HomeController{
    public function index($page){
        include('views/'.$page.'.php');
    }  
    // public function path(){
    //     $path = $_SERVER['REQUEST_URI'] ?? '/';
    //     return str_contains($path,'?') ? explode('?',$path)[0] : $path;
        // return $path;
    // }

}