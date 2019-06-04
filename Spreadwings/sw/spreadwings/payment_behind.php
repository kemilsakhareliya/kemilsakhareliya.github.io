<?php
session_start();
unset($_SESSION["products"]);
header('location:order_list.php');
?>