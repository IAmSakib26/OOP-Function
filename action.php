<?php 
include_once('includes/autoLoder.php');

$name = $_POST['name'];
$email = $_POST['email'];

$crt = new Test();
$crt->create($name,$email);