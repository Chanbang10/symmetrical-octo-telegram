<!Doctype html>
<html lang="em">
<?php
include 'db.php';

$id=$_GET['id'];
$sql ="select from course where id ='$id";
 $rows = $db->query($sql);
 $row=$rows->fetch_assoc();
 if (isset($_POST['send']))
?>

header('location: index.php')
    <head>
<title>Dashboard</title>
<link rel="stylesheet" href="flat/bootstrap.min.css">
<link rel="stylesheet" href="flat/bootstrap.min.js">
<link rel="stylesheet" href="flat/jquery-J.4.1.js">
    </head>
    <body>
<nav class="navbar navbar expand1g navbar light ng grey" style="background-color: #bf2fff;">
<div class="collapse navbar-collapse nr auto" id='navbarsupportContact'>
    <ul class="navbar-nav nr-2">
        <li class="nav Item active">
            <a class= "nav link" href="a"> Dashboard<span class="sr only"(current)></span></a> 
        </li>
        <li class= "nav-Item">
            <a class="nav-link"href="#">Link</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="#">Disable</a>
        </li>

        INPUT GROUP
        <div class="input group nr-2 nr-auto"> 
            <input type="text"[class="form-control" placeholder="SEARCH HERE...." #la-label="name" #la-describedby="basic-addon2">
          <ul class=input-group-append>
              <span class="input-test" id="has1< addon">search</span>
          </ul>
        </div>
    END OF INPUT GROUP

    Component
    <div class="dropdown">
        <button class="btn btn-secondary dropdown toggle" type="button" id="dropdownbutton" data-toggle="dropdown" #la-hashpopup="true" #la aria-expanded="false">
            PROFILE MENU</button>
            <div class="dropbox menu" #la labelledby="dropboxmenubutton">
            <ul class="list-group dropdown-item" style="text-align: center;">

            LIST GROUP
            <li class="list-group-item d-flex justify content between align-item-center dropdown item" >
            Profile
            <span class="badge badgeprimary badge pill">14</span>
            </li>
            <li class="list-group-item d-flex justify content between align-item-center dropdown item" >
               Message 
               <span class="badge badgeprimary badge pill">14</span>
            </li>
            <li class="list-group-item d-flex justify content between align-item-center dropdown item" >
            Notification
            <span class="badge badgeprimary badge pill">14</span>
            </li>
            END OF LIST GROUP

           LOGOUT BUTTON 
           <a  class="dropdown item"href="" >LOGOUT</a>

        </ul>
            </div>
    </div>

    END OF Component
    </ul>
</div>
</nav>
    </body>
</html>