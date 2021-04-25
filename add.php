<?php 
include 'db.php';
if(isset($_POST['send'])){


$name = htmlspecialchars($_POST['course']);


$sql ="insert into course ('name') values ('$name')";

$val = $db->query($sql);

if($val){

    header('location: index.php');
}
}



?>