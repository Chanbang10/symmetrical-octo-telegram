<!DOCTYPE html>
<html>
<?php include 'db.php'; 

$id=(int)$_GET['id'];

$sql ="select from course where id ='$id";

$rows = $db->query($sql);

$row=$rows->fetch_assoc();
if (isset($_POST['send']))

$course =htmlspecialchars($_POST['course']);
$sql2 ="update  course set name= '$course where id = '$id'";

$db->query($sql);

 header ('location: index.php');
?>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootscrapcdn.com/bootstrap/3.3.7/js/bootscrap.min.js" integrity="sha384-Tc51IQQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA712mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Crud App</title>

</head>
<body>
    <div class="container">

    <div class="row" style="margin-top: 60px;">
        <h1> Update Courses  </h1>
        
    <div class="col-md-10 col-md-offset-1"></div>
        <table class="table"></table>
        <hr><br>

        
                <form method="POST" action="add.php">
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" required name="course" value="<?php echo $row['name'];?>" class="form-control">
                        <input type="submit" name="send" value="Add Course" class="btn btn-success">
                    </div>
                    <a href="index.php" class="btn btn-warning">Back</a>
                </form>
        
        
    </div>
    </div>
</body>
</html>