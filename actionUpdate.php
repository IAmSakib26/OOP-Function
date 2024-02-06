<?php 
include_once('includes/autoLoder.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $up = new Test();
    $up->update($name,$email,$id);
}