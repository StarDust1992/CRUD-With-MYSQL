<?php 
require_once("../controller/app.php");
session_start() ; 
ensure_user_is_authenticated();
if (is_post()){
    $term = sanitize($_POST["term"]);
    $definition = sanitize($_POST["definition"]);

    if(empty($term) || empty($definition)){
        echo "error message" ; 
    }else{
        Data::add_term($term,$definition);
        redirect("index.php");
    }
}

 view("admin/create");
