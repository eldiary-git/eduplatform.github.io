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
	  $substrand2=$_GET['substrand2'];
	  $substrand3=$_GET['substrand3'];
	  $substrand4=$_GET['substrand4'];
	  $substrand5=$_GET['substrand5'];
	 
	  $question=$_GET['question'];
	  /*
	  $questionImage=$_POST['questionImage'];
	 */
	 
	  $MCanswer1=$_GET['MCanswer1'];
	  $MCanswer2=$_GET['MCanswer2'];
	  $MCanswer3=$_GET['MCanswer3'];
	  $MCanswer4=$_GET['MCanswer4'];
	  $MCanswer5=$_GET['MCanswer5'];
	  $MCanswerCorrectanswer=$_GET['MCanswerCorrectanswer'];
	  $MAanswer1=$_GET['MAanswer1'];
	  $MAanswer2=$_GET['MAanswer2'];
	  $MAanswer3=$_GET['MAanswer3'];
	  $MAanswer4=$_GET['MAanswer4'];
	  $MAanswer5=$_GET['MAanswer5'];
	  $MAanswer1Correctanswer1=$_GET['MAanswer1Correctanswer1'];
	  $MAanswer1Correctanswer2=$_GET['MAanswer1Correctanswer2'];
	  $trueOrFalse=$_GET['trueOrFalse'];
	 
	  $yesOrNow=$_GET['yesOrNow'];
	  $shortanswer=$_GET['shortanswer'];
	 

  	//Getting Post Values

	  /*
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
*/
    //Query for data updation
     $query=mysqli_query($con, "update  tblusers set curriculum='$curriculum', stage='$stage', subject='$subject', topic='$topic', strand='$strand', 
	 substrand1='$substrand1', substrand2='$substrand2', substrand3='$substrand3', substrand4='$substrand4', substrand5='$substrand5', question='$question', 
	  MCanswer1='$MCanswer1', MCanswer2='$MCanswer2', MCanswer3='$MCanswer3', MCanswer4='$MCanswer4', MCanswer5='$MCanswer5',
	   MCanswerCorrectanswer='$MCanswerCorrectanswer', MAanswer1='$MAanswer1', MAanswer2='$MAanswer2', MAanswer3='$MAanswer3', MAanswer4='$MAanswer4',
	 MAanswer5='$MAanswer5', MAanswer1Correctanswer1='$MAanswer1Correctanswer1', MAanswer1Correctanswer2='$MAanswer1Correctanswer2', trueOrFalse='$trueOrFalse',
	 yesOrNow='$yesOrNow', shortanswer='$shortanswer' where ID='$eid'");
     



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

	<div class="container-fluid">
		<div class="row" id="edit-row">

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<input type="text" class="form-control" name="curriculum" value="<?php  echo $row['curriculum'];?>">
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<input type="text" class="form-control" name="stage" value="<?php  echo $row['stage'];?>" >
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

				<input type="text" class="form-control" name="subject" value="<?php  echo $row['subject'];?>" >
				</div>

</div>

<br>

					<div class="row" id="edit-row">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">


				<input type="text" class="form-control" name="topic" value="<?php  echo $row['topic'];?>" >
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

				<input type="text" class="form-control" name="strand" value="<?php  echo $row['strand'];?>" >
			</div>



			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

				<input type="text" class="form-control" name="substrand1" value="<?php  echo $row['substrand1'];?>" >
			</div>
</div>



				<div class="row" id="edit-row">

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

				<input type="text" class="form-control" name="substrand2" value="<?php  echo $row['substrand2'];?>" >
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<input type="text" class="form-control" name="substrand3" value="<?php  echo $row['substrand3'];?>" >
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<input type="text" class="form-control" name="substrand4" value="<?php  echo $row['substrand4'];?>" >
			</div>
			</div>
<br>





					<div class="row" id="edit-row">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

				<input type="text" class="form-control" name="substrand5" value="<?php  echo $row['substrand5'];?>" >
			</div>
</div>

<br>
<br>

			<br>

			<div class="row" id="question-row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label> Question </label>
				<input type="text" class="form-control" name="question" value="<?php  echo $row['question'];?>" >
			</div>
			</div>

						<br> 

				<h3 id="answers-head"> Answers </h3>

				<div class="row" id="edit-row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<label> Multiple Choice </label>

				<input type="text" class="form-control" name="MCanswer1" value="<?php  echo $row['MCanswer1'];?>" >
				<input type="text" class="form-control" name="MCanswer2" value="<?php  echo $row['MCanswer2'];?>" >
				<input type="text" class="form-control" name="MCanswer3" value="<?php  echo $row['MCanswer3'];?>" >
				<input type="text" class="form-control" name="MCanswer4" value="<?php  echo $row['MCanswer4'];?>" >
				<input type="text" class="form-control" name="MCanswer5" value="<?php  echo $row['MCanswer5'];?>" >

			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<label> Multiple Answer </label>

				<input type="text" class="form-control" name="MAanswer1" value="<?php  echo $row['MAanswer1'];?>" >
				<input type="text" class="form-control" name="MAanswer2" value="<?php  echo $row['MAanswer2'];?>" >
				<input type="text" class="form-control" name="MAanswer3" value="<?php  echo $row['MAanswer3'];?>" >
				<input type="text" class="form-control" name="MAanswer4" value="<?php  echo $row['MAanswer4'];?>" >
				<input type="text" class="form-control" name="MAanswer5" value="<?php  echo $row['MAanswer5'];?>" >

			</div>


			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<label> True/False </label>

				<input type="text" class="form-control" name="trueOrFalse" value="<?php  echo $row['trueOrFalse'];?>" >
			</div>

</div>

</div>

<br> <br>
<div class="row" id="edit-row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<label> Yes/No </label>

<input type="text" class="form-control" name="yesOrNow" value="<?php  echo $row['yesOrNow'];?>" >

</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<label> Short Answer and Paragraph </label>

<input type="text" class="form-control" name="shortanswer" value="<?php  echo $row['shortanswer'];?>" >

</div>


</div>
								<!-- 
									- matching images - 
								--> 


			<div class="row" id="edit-row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">





	<div class="form-group">
<img src="profilepics/<?php  echo $row['matching1'];?>" width="120" height="120">

<img src="profilepics/<?php  echo $row['matching2'];?>" width="120" height="120">

<img src="profilepics/<?php  echo $row['matching3'];?>" width="120" height="120">

<img src="profilepics/<?php  echo $row['matching4'];?>" width="120" height="120">

<img src="profilepics/<?php  echo $row['matching5'];?>" width="120" height="120">

<a href="change-image.php?userid=<?php echo $row['ID'];?>">Change Image</a>
		</div>

		</div>
		</div>







			<br>








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
      

		<style>



#edit-row{width:100%!important; }
#question-row {
max-width: 100%!important;
    margin: auto!important;}


#question-row input{
max-width: 65%!important;
   }

   #answers-head{text-align:center!important}



	</style>