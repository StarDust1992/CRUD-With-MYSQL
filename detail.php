<?php 
require("controller/app.php");

if (!isset($_GET["term"])){
    redirect("index.php");
    die();  
}

$data = Data::get_term($_GET["term"]);

if($data === false){
    view("notfound", ""); // Redirect to notfound view
    die();
};

if (!property_exists((object)$data, 'term')) {
    echo "NOT FOUND!";
    die();
}

$term = $data->term  ; // Use null coalescing operator to handle missing property

if ($term !== null) {
    echo $term;
    die();
}


$view_bag = ["title" => " Detail For $term "] ;

view("detail", $data);

