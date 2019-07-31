<?php
require_once "../vendor/autoload.php";
start_session();
//trazendo a lógica de controller
require_once renderControlPage($_GET["control_page"], CONTROL_PATHS);
?>