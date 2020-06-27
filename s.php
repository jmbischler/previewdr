<?php
session_start();

$_SESSION['mail'] = $_GET["mail"];


if($_SESSION['mail']){
header("Location: index2.php"); 
} 
else{
header("Location: index.php");
}
?>