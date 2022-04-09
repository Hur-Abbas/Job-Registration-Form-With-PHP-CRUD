<?php
include "db.php";
$id = $_GET['id'];

$deleteQuery = "DELETE FROM `jobsregistration` WHERE id=$id";

$query = mysqli_query($con,$deleteQuery);

if($query){
    echo '<div class="alert container alert-success alert-dismissible fade show" role="alert">
    <strong>Delete successful!</strong>Data Deleted Successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else{
    echo '<div class="alert container alert-danger alert-dismissible fade show" role="alert">
    <strong>Delete unsuccess!</strong> Data Delete 404!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
 
header('location:display.php');
?>