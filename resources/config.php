<?php
ob_start ();
session_start ();

defined ("DS") ? null : define ("DS", DIRECTORY_SEPARATOR);

defined ("TEMPLATE_FRONT") ? null : define ("TEMPLATE_FRONT", __DIR__ . DS . "templates_front");

defined ("TEMPLATE_BACK") ? null : define ("TEMPLATE_BACK", __DIR__ . DS . "templates_back");

defined ("DB_HOST") ? null : define ("DB_HOST", "localhost");
defined ("DB_USER") ? null : define ("DB_USER", "root");
defined ("DB_PASS") ? null : define ("DB_PASS", "");
defined ("DB_NAME") ? null : define ("DB_NAME", "ecom_dbs");

$connection = mysqli_connect (DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$connection){
  echo "DATABASE QUERY FAILED";
}

 ?>
