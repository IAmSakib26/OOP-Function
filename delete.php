<?php
include_once('includes/autoLoder.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = new Test();
    $delete->delete($id);
}