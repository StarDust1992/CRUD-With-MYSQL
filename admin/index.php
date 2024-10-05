<?php
require("../controller/app.php");
session_start();


ensure_user_is_authenticated();


view("admin/index", Data::get_terms());

// Call get_terms() and pass the returned data to the view() function

?>

<!-- Bootstrap CSS link (optional) -->
