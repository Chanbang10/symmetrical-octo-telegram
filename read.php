<?php 
include 'db.php';
if(isset($_POST['read'])){


$name = htmlspecialchars($_POST['course']);


$sql ="insert into course ('name') values ('$name')";

$val = $db->query($sql);

if($val){

    header('location: index.php');
}
}



?>