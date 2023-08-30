<?php
session_start();
if (isset($_SESSION["string"]))
{
    echo "The value of the session variable string is " . $_SESSION["string"];
} else {
    echo "The session variable string has not been set, run session_create.php";
}
?>