<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: readypage.php");
exit(); }
?>