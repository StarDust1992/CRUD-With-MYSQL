<?php
require("controller/app.php");
$title = "PHP FUNDAMENTALS:" ;
$view_bag =[
    "title"=> "Glossary",
    "heading"=> "Home Page"
] ;

if (isset($_GET["search"])){
  
    $items = Data::search_terms($_GET["search"]) ;
    $view_bag["heading"] = "search result for:".$_GET["search"] ;

}else{
    $items = Data::get_terms();
}
    
view(name:"index",model:$items);
?>

