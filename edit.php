<?php 
error_reporting(0);

//Database Connection
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
	  $curriculum=$_POST['curriculum'];
	  $stage=$_POST['stage'];
	  $subject=$_POST['subject'];
	  $topic=$_POST['topic'];
	  $strand=$_POST['strand'];	 
	  $substrand1=$_POST['substrand1'];
	  $substrand2=$_POST['substrand2'];
	  $substrand2=$_POST['substrand2'];
	  $substrand3=$_POST['substrand3'];
	  $substrand4=$_POST['substrand4'];
	  $substrand5=$_POST['substrand5'];
	 
	  $question=$_POST['question'];
	  /*
	  $questionImage=$_POST['questionImage'];
	 */
	 
	  $MCanswer1=$_POST['MCanswer1'];
	  $MCanswer2=$_POST['MCanswer2'];
	  $MCanswer3=$_POST['MCanswer3'];
	  $MCanswer4=$_POST['MCanswer4'];
	  $MCanswer5=$_POST['MCanswer5'];
	  $MCanswerCorrectanswer=$_POST['MCanswerCorrectanswer'];
	  $MAanswer1=$_POST['MAanswer1'];
	  $MAanswer2=$_POST['MAanswer2'];
	  $MAanswer3=$_POST['MAanswer3'];
	  $MAanswer4=$_POST['MAanswer4'];
	  $MAanswer5=$_POST['MAanswer5'];
	  $MAanswer1Correctanswer1=$_POST['MAanswer1Correctanswer1'];
	  $MAanswer1Correctanswer2=$_POST['MAanswer1Correctanswer2'];
	  $trueOrFalse=$_POST['trueOrFalse'];
	 
	  $yesOrNow=$_POST['yesOrNow'];
	  $shortanswer=$_POST['shortanswer'];



	  

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
	
	

<br> <br>  <br> <br> 

	<div class="container-fluid">
		<div class="row" id="edit-row">

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<label> Curriculum </label>
				<input type="text" class="form-control" name="curriculum" value="<?php  echo $row['curriculum'];?>">
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<label> Stage </label>
				<input type="text" class="form-control" name="stage" value="<?php  echo $row['stage'];?>" >
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<label> Subject </label>

				<input type="text" class="form-control" name="subject" value="<?php  echo $row['subject'];?>" >
				</div>

</div>

<br>

					<div class="row" id="edit-row">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

					<label> Topic </label>

				<input type="text" class="form-control" name="topic" value="<?php  echo $row['topic'];?>" >
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<label> Strand </label>

				<input type="text" class="form-control" name="strand" value="<?php  echo $row['strand'];?>" >
			</div>



			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<label> Sub Strand 1 </label>

				<input type="text" class="form-control" name="substrand1" value="<?php  echo $row['substrand1'];?>" >
			</div>
</div>

<br>


				<div class="row" id="edit-row">

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<label> Sub Strand 2 </label>

				<input type="text" class="form-control" name="substrand2" value="<?php  echo $row['substrand2'];?>" >
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<label> Sub Strand 3 </label>

				<input type="text" class="form-control" name="substrand3" value="<?php  echo $row['substrand3'];?>" >
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<label> Sub Strand 4 </label>

				<input type="text" class="form-control" name="substrand4" value="<?php  echo $row['substrand4'];?>" >
			</div>
			</div>
<br>





					<div class="row" id="edit-row">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<label> Sub Strand 5 </label>

				<input type="text" class="form-control" name="substrand5" value="<?php  echo $row['substrand5'];?>" >
			</div>
</div>

<br>
<br>

			<br>

			<div class="row" id="question-row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label> Question </label>
				<input type="text" class="form-control" name="question" value="<?php  echo $row['question'];?>">
			
			
				<section>               <!-- matching 1 -- ("change-image.php") -->
	<div class="form-group">
<img src="profilepics/<?php  echo $row['questionImage'];?>" width="120" height="120">
<a id="matchingimg1-a" href="questionimage.php?userid=<?php echo $row['ID'];?>">Change Question Image </a>
</section>
</div>

			
			</div>
			</div>

						<br> 

				<h3 id="answers-head"> Answers </h3>
<br>
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
<div class="row" id="yesornow-row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<label> Yes/No </label>

<input type="text" class="form-control" name="yesOrNow" value="<?php  echo $row['yesOrNow'];?>" >

</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<label> Short Answer and Paragraph </label>

<input type="text" class="form-control" name="shortanswer" value="<?php  echo $row['shortanswer'];?>" >

</div>


</div>


<br> <br>
								<!-- 
									- matching images - 
								--> 
			<div class="row" id="matching-row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">


			<section>               <!-- matching 1 -- ("change-image.php") -->
	<div class="form-group">
<img src="profilepics/<?php  echo $row['matching1'];?>" width="120" height="120">
<a id="matchingimg1-a" href="change-image.php?userid=<?php echo $row['ID'];?>">Change Image 1</a>
</section>
</div>


<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<section>  			 <!-- matching 2 -- ("matching2.php") -->
<img src="profilepics/<?php  echo $row['matching2'];?>" width="120" height="120">
<a id="matchingimg2-a" href="matching2.php?userid=<?php echo $row['ID'];?>">Change Image 2</a>
</section>
</div>


<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<section>  			 <!-- matching 2 -- ("matching2.php") -->
<img src="profilepics/<?php  echo $row['matching3'];?>" width="120" height="120">
<a id="matchingimg3-a"href="matching3.php?userid=<?php echo $row['ID'];?>">Change Image 3</a>
</section>

</div>
</div>



<br> <br>
<div class="row" id="matching-row">

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<section>  			 <!-- matching 2 -- ("matching2.php") -->
<img src="profilepics/<?php  echo $row['matching4'];?>" width="120" height="120">
<a id="matchingimg4-a" href="matching4.php?userid=<?php echo $row['ID'];?>">Change Image 4</a>
</section>
</div>


<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<section>  			 <!-- matching 2 -- ("matching2.php") -->
<img src="profilepics/<?php  echo $row['matching5'];?>" width="120" height="120">
<a id="matchingimg5-a" href="matching5.php?userid=<?php echo $row['ID'];?>">Change Image 5</a>
</section>
</div>

		</div>

		</div>
		</div>
		</div>







			<br>			<br>









<?php 
}?>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit" id="edit-updatebtn">Update</button>
        </div>
    </form>

</div>
</body>
</html>









		<style>



#edit-row{width:100%!important; }
#question-row {
max-width: 100%!important;
    margin: auto!important;}


#question-row input{
max-width: 65%!important;
   }

   #answers-head{text-align:center!important}

#edit-updatebtn{    max-width: 13%!important;
    margin: auto!important;
    border-radius: 0!important;}



#matchingimg1-a{text-decoration: none!important;
    color: #545454!important;
    font-weight: 600!important;
    margin-left: 19px!important;}
#matchingimg2-a{text-decoration: none!important;
    color: #545454!important;
    font-weight: 600!important;
    margin-left: 19px!important;}
#matchingimg3-a{text-decoration: none!important;
    color: #545454!important;
    font-weight: 600!important;
    margin-left: 19px!important;}
#matchingimg4-a{text-decoration: none!important;
    color: #545454!important;
    font-weight: 600!important;
    margin-left: 19px!important;}
#matchingimg5-a{text-decoration: none!important;
    color: #545454!important;
    font-weight: 600!important;
    margin-left: 19px!important;}





#matching-row{margin-left:40px!important}

#yesornow-row{margin-left:1px!important}


	</style>