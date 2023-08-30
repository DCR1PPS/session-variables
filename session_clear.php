<?php
session_start();

session_unset();
session_destroy();
echo "The session has been destroyed";
?>