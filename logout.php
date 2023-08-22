<?php
session_start();
include_once('./connection/connection.php');
session_destroy();
header('Location:index.php');
?>