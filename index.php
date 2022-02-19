<!doctype html>
<html>
  <head>
    <meta content="0; url=log.php">
  </head>
  <body>
  </body>
</html>



<?php 
/*
error_reporting(0);
*/

session_start();


include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>




<div class="container d-flex justify-content-center align-items-center"
id="log-container"
      style="min-height: 100vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- For Admin -->





<?php
//database conection  file
include('dbconnection.php');
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="profilepics"."/".$profilepic;
$sql=mysqli_query($con,"delete from tblusers where ID=$rid");
unlink($ppicpath);
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'index.php'</script>";     
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Elegant Table Design</title>
<link href="css/style.css" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title select {
    border-color: #ddd;
    border-width: 0 0 1px 0;
    padding: 3px 10px 3px 5px;
    margin: 0 5px;
}
.table-title .show-entries {
    margin-top: 7px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 200px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}
.search-box .input-group-addon {
    border: none;
    border: none;
    background: transparent;
    position: absolute;
    z-index: 9;
}
.search-box input {
    height: 34px;
    padding-left: 28px;     
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 8px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    padding: 0 10px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
}
.pagination li a:hover {
    color: #666;
}   
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
</style>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                       <div class="col-sm-7" align="right">
                        <a href="insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <!-- 
                        <th>Profile Pic</th>
                            -->
                        <th>Question</th>                       
                        <th> Answer1</th>
                        <th> Answer2</th>
                        <th> Answer3</th>
                        <th> Answer4</th>
                        <th> Answer5</th>
                        <th> Correct Answer1</th>
                        <th> Correct Answer2</th>   
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from tblusers");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->




                    <tr>               
                        <td style="max-width:115px; font-size: 12px;"> <?php  echo $row['ID'];?></td>
                        <td style="max-width:115px; word-break: break-word; font-size: 12px;"><?php  echo $row['question'];?>

                    <img src="profilepics/<?php echo $row['questionImage'];?>" width="80" height="80" onerror="this.style.display='none'"> </td>

                                            <!-- answer 1 --> 

                        <td style="max-width:115px; word-break: break-word; font-size: 12px;">
                        <img src="profilepics/<?php  echo $row['matching1'];?>" width="80" height="80" onerror="this.style.display='none'"> 
                    <?php  echo $row['MCanswer1'];?>
                    <?php  echo $row['MAanswer1'];?>
                    <?php  echo $row['trueOrFalse'];?>
                    <?php  echo $row['yesOrNow'];?>

                    </td>      
                    
                        <!-- answer 2 --> 
                    <td style="max-width:115px; word-break: break-word; font-size: 12px;">
                    <img src="profilepics/<?php  echo $row['matching2'];?>" width="80" height="80" onerror="this.style.display='none'"> 
                    <?php  echo $row['MCanswer2'];?>
                    <?php  echo $row['MAanswer2'];?>

                    </td>  

                        <!-- answer 3 --> 
                        <td style="max-width:115px; word-break: break-word; font-size: 12px;">
                        <img src="profilepics/<?php  echo $row['matching3'];?>" width="80" height="80" onerror="this.style.display='none'"> 
                    <?php  echo $row['MCanswer3'];?>
                    <?php  echo $row['MAanswer3'];?>
                    </td>  

                        <!-- answer 4 --> 
                        <td style="max-width:115px; word-break: break-word; font-size: 12px;">
                        <img src="profilepics/<?php  echo $row['matching4'];?>" width="80" height="80" onerror="this.style.display='none'"> 
                    <?php  echo $row['MCanswer4'];?>
                    <?php  echo $row['MAanswer4'];?>

                    </td>  


                              <!-- answer 5 --> 
       <td style="max-width:115px; word-break: break-word; font-size: 12px;">
       <img src="profilepics/<?php  echo $row['matching5'];?>" width="80" height="80" onerror="this.style.display='none'"> 
                    <?php  echo $row['MCanswer5'];?>
                    <?php  echo $row['MAanswer5'];?>

                    </td>  

                              <!-- Correct Answer 1 --> 

                    <td style="max-width:115px; word-break: break-word; font-size: 12px;">
                    <?php  echo $row['MCanswerCorrectanswer'];?>
                    <?php  echo $row['MAanswer1Correctanswer1'];?>

                    </td>
                 
                              <!-- Correct Answer 2 --> 

                              <td style="max-width:115px; word-break: break-word; font-size: 12px;">
                    <?php  echo $row['MAanswer1Correctanswer2'];?>

                    </td>

                    
                     
                <td style="max-width:115px; word-break: break-word; font-size: 12px;">
  

                <a id="viewpage-icon" href="read.php?viewid=<?php echo htmlentities ($row['ID']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                   
                
                <style>
                    /* remove view page */
#viewpage-icon{display:none!important}
</style>



                <a href="edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="index.php?delid=<?php echo ($row['ID']);?>&&ppic=<?php echo $row['ProfilePic'];?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
                
                </tbody>
            </table>
       
        </div>
    </div>
</div>     
</body>
</html>


</div>
</div>
</div>
</div>

</div>








<div class="card" style="width: 18rem;">
<!-- 
			  <img src="img/admin-default.png" 

			       class="card-img-top" 
			       alt="admin image">
                   -->
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
			<div class="p-3">







      
				<?php include 'php/members.php';
        
                 if (mysqli_num_rows($res) > 0) {?>
                  

			






				  

				<?php }?>
			</div>
      	<?php }else { ?>
      		<!-- FORE USERS -->
              </div>

     <style> 
     #log-container{display:none!important} 
     </style>        
<?php
            include_once "insert.php"
     ?>


              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </div>










      		<div class="card" style="width: 18rem;">
			  <img src="img/user-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
      	<?php } ?>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>






