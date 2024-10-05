<?php
session_start();

session_unset();  
session_abort();

require("controller/app.php");

redirect('login.php') ; 