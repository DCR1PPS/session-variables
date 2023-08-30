<?php
session_start();

$_SESSION["string"] = "value of string";
echo "The session variable string has been declared";
echo $_SESSION["string"];
?>