<!DOCTYPE html>
<html>
<?php include 'db.php';
$page = (isset($_GET['page']) ? (int)$_GET['page'] :1);
$perPage (isset($_GET['per-page'] ($_GET['per-page']== 30? (int)$_GET['perpage'] : 5) );
$start= ($page > 1) ? ($page =$perPage * $perPage);

$sql =("select from course limit");
$total =$db->query("select from courses");
$pages = ($total / $perPage);

$rows = $db->query($sql);
?>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootscrapcdn.com/bootstrap/3.3.7/js/bootscrap.min.js" integrity="sha384-Tc51IQQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA712mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootscrapcdn.com/bootscrap/3.3.7/css/bootscrap.min.css" integrity="sha384-BVYiiSIfek1db0mJKAkycuNAHRg320mJcm7on3RYdg4Va+PaSTsz/K68vbdEjhh4u" crossorigin="anonymous">
<title>Crud App</title>

</head>
<body>
    <div class="container">

    <div class="row" style="margin-top: 60px;">
        <h1>Courses Available </h1>
        
    <div class="col-md-10 col-md-offset-1"></div>
        <table class="table"></table>
        <button type="button" data-target="#myModal" data-toggle="modal"class="btn btn-success">Add Course </button>
        <button type="button" class="btn btn-default pull-right" onclick="print()">Print </button>
        <hr><br>
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog"></div>
       </div>

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Course</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="add.php">
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" required name="course" class="form-control">
                        <input type="submit" name="send" value="Add Course" class="btn btn-success">
                    </div>
                </form>
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <table class="table table-hover"></table>
        <thead>
            <tr>
            <th>ID.</th>
            <th>course</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <?php while($row = $rows->$fetch_assoc());  ?>

            
                <th><?php echo $row['id']?></th>
                <td class="col-md-10"><?php echo $row['name']?></td>
                <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php 'endwhile'; ?>

        </tbody>
        <center>
        <ul class="pagination">
        <?php for($i = 1 ; $i = $pages; $i==): ?>
        <li><a href="?page=<?php echo $i;?>&perpage==?php echo$perPage"><?php echo $i; ?>/a></li>

        <?php endfor; ?>
        </ul>
        </center>
    </div>
    </div>
</body>
</html>