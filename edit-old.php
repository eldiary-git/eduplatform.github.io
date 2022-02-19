<?php 
//Database Connection
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];

	  $curriculum=$_GET['curriculum'];

	  $stage=$_GET['stage'];
	  $subject=$_GET['subject'];
	 
	  $topic=$_GET['topic'];
	  $strand=$_GET['strand'];
	  $substrand1=$_GET['substrand1'];
	  $substrand2=$_GET['substrand2'];
	  $substrand3=$_GET['substrand3'];
	  $substrand4=$_GET['substrand4'];
	  $substrand5=$_GET['substrand5'];

	  $question=$_GET['question'];
	  $questionImage=$_GET['questionImage'];
	  $answer1=$_GET['answer1'];
	  $answer1image=$_GET['answer1image'];
	  $answer3=$_GET['answer2'];
	  $answer2image=$_GET['answer2image'];
	  $answer3=$_GET['answer3'];
	  $answer3image=$_GET['answer3image'];
	  $answer4=$_GET['answer4'];
	  $answer4image=$_GET['answer4image'];
	  $answer5=$_GET['answer5'];
	  $answer5image=$_GET['answer5image'];
	  $correctanswer1=$_GET['correctanswer1'];
	  $correctanswer2=$_GET['correctanswer2'];






  	//Getting Post Values

	  /*
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
*/
    //Query for data updation
     $query=mysqli_query($con, "update  tblusers set curriculum='$curriculum', stage='$stage', subject='$subject', topic='$topic', 
	 strand='$strand', substrand1='$substrand1', substrand2='$substrand2', substrand3='$substrand3', substrand4='$substrand4', substrand5='$substrand5',
	 question='$question', questionImage='$questionImage', answer1='$answer1', answer1image='$answer1image', answer2='$answer2',
	 answer2image='$answer2image', answer3='$answer3image', answer4='$answer4image', answer5='$answer5', answer5image='$answer5image',
	 correctanswer1='$correctanswer1', correctanswer2='$correctanswer2' where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>PHP Crud Operation!!</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblusers where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
		<h2>Update </h2>
		<p class="hint-text">Update your info.</p>

	<div class="form-group">
<img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="120" height="120">
<a href="change-image.php?userid=<?php echo $row['ID'];?>">Change Image</a>
		</div>

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="curriculum" value="<?php  echo $row['curriculum'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="stage" value="<?php  echo $row['stage'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="subject" value="<?php  echo $row['subject'];?>" ></div>


				<div class="col"><input type="text" class="form-control" name="topic" value="<?php  echo $row['topic'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="strand" value="<?php  echo $row['strand'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="substrand1" value="<?php  echo $row['substrand1'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="substrand2" value="<?php  echo $row['substrand2'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="substrand3" value="<?php  echo $row['substrand3'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="substrand4" value="<?php  echo $row['substrand4'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="substrand5" value="<?php  echo $row['substrand5'];?>" ></div>

				<div class="col"><input type="text" class="form-control" name="question" value="<?php  echo $row['question'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="questionImage" value="<?php  echo $row['questionImage'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer1" value="<?php  echo $row['answer1'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer1image" value="<?php  echo $row['answer1image'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer2" value="<?php  echo $row['answer2'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer2image" value="<?php  echo $row['answer2image'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer3" value="<?php  echo $row['answer3'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer3image" value="<?php  echo $row['answer3image'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer4" value="<?php  echo $row['answer4'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer4image" value="<?php  echo $row['answer4image'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer5" value="<?php  echo $row['answer5'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="answer5image" value="<?php  echo $row['answer5image'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="correctanswer1" value="<?php  echo $row['correctanswer1'];?>" ></div>
				<div class="col"><input type="text" class="form-control" name="correctanswer2" value="<?php  echo $row['correctanswer2'];?>" ></div>

			</div>        	
        </div>
<?php 
}?>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
</body>
</html>










             <div class="form-group">
        	<input type="file" class="form-control" name="profilepic"  required="true">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>      
      








        