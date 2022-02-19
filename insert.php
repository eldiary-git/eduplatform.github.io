<?php 
error_reporting(0);

$ID = '';

$curriculum = '';
$stage = '';
$subject = '';
$topic = '';


$strand = '';

$substrand1 = '';
$substrand2 = '';
$substrand3 = '';
$substrand4 = '';
$substrand5 = '';

$question = '';
$questionImage = '';

$MCanswer1 = '';
$MCanswer2 = '';
$MCanswer3 = '';
$MCanswer4 = '';
$MCanswer5 = '';

$MCanswerCorrectanswer = '';


$MAanswer1 = '';
$MAanswer2 = '';
$MAanswer3 = '';
$MAanswer4 = '';
$MAanswer5 = '';
$MAanswer1Correctanswer1 = '';
$MAanswer1Correctanswer2 = '';

$matching1 = '';
$matching2 = '';
$matching3 = '';
$matching4 = '';
$matching5 = '';


$trueOrFalse = '';


$yesOrNow = '';

$shortanswer = '';

$quesImage = '';


/*
$question = '';
$questionImage = '';

$answerone = '';
$answer1image = '';

$core = '';

$answer2 = '';
$answer2image = '';

$answerthree = '';
$answer3image = '';

$answerfour= '';
$answer4image = '';

$answerfive = '';
$answer5image = '';

$correctanswer1 = '';
$correctanswer2 = '';
*/


/*
error_reporting(0);
*/
//Databse Connection file
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values


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



 
/*
 $question=$_POST['question'];
 $questionImage=$_POST['questionImage'];
 $answerone=$_POST['answerone'];
 $answer1image=$_POST['answer1image'];

 $core=$_POST['core'];

 $answertwo=$_POST['answer2'];
 $answer2image=$_POST['answer2image'];
 $answerthree=$_POST['answerthree'];
 $answer3image=$_POST['answer3image'];
 $answerfour=$_POST['answerfour'];
 $answer4image=$_POST['answer4image'];
 $answerfive=$_POST['answerfive'];
 $answer5image=$_POST['answer5image'];
 $correctanswer1=$_POST['correctanswer1'];
 $correctanswer2=$_POST['correctanswer2'];

*/

	  /*
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
	*/



 
  
  $questionImage=$_FILES["questionImage"]["name"];


$matching1=$_FILES["matching1"]["name"];
$matching2=$_FILES["matching2"]["name"];
$matching3=$_FILES["matching3"]["name"];
$matching4=$_FILES["matching4"]["name"];
$matching5=$_FILES["matching5"]["name"];

   $ppic=$_FILES["profilepic"]["name"];

   
// get the image extension
$newextension = substr($questionImage,strlen($questionImage)-4,strlen($questionImage));

$newextension = substr($matching1,strlen($matching1)-4,strlen($matching1));

$newextension = substr($matching2,strlen($matching2)-4,strlen($matching2));
$newextension = substr($matching3,strlen($matching3)-4,strlen($matching3));
$newextension = substr($matching4,strlen($matching4)-4,strlen($matching4));
$newextension = substr($matching5,strlen($matching5)-4,strlen($matching5));

$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));

// allowed extensions

$allowed_extensions = array(".jpg","jpeg",".png",".gif", ".JPG");

// Validation for allowed extensions .in_array() function searches an array for a specific value.
if (isset($_POST['submit'])) {
  
//rename the image file
$questionImage=md5($questionImage).time().$questionImage;

$matching1=md5($matching1).time().$matching1;

$matching2=md5($matching2).time().$matching2;
$matching3=md5($matching3).time().$matching3;
$matching4=md5($matching4).time().$matching4;
$matching5=md5($matching5).time().$matching5;

$imgnewfile=md5($imgfile).time().$extension;


move_uploaded_file($_FILES["questionImage"]["tmp_name"],"profilepics/".$questionImage);

move_uploaded_file($_FILES["matching1"]["tmp_name"],"profilepics/".$matching1);


move_uploaded_file($_FILES["matching2"]["tmp_name"],"profilepics/".$matching2);
move_uploaded_file($_FILES["matching3"]["tmp_name"],"profilepics/".$matching3);
move_uploaded_file($_FILES["matching4"]["tmp_name"],"profilepics/".$matching4);
move_uploaded_file($_FILES["matching5"]["tmp_name"],"profilepics/".$matching5);

// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"profilepics/".$imgnewfile);
// Query for data insertion



/*
$query=mysqli_query($con, "insert into tblusers(curriculum, stage, subject, topic, strand, substrand1, substrand2, substrand3, substrand4, substrand5, question, questionImage, answerone, answer1image, core, answer2, answer2image, answerthree, answer3image, answerfour, answer4image, answerfive, answer5image, correctanswer1, correctanswer2, ProfilePic) value('$curriculum', '$stage', '$subject', '$topic', '$strand', '$substrand1', '$substrand2', '$substrand3', '$substrand4', '$substrand5', '$question', '$questionImage', '$answerone', '$answer1image', '$core', '$answer2', '$answer2image', '$answerthree', '$answer3image',  '$answerfour', '$answer4image', '$answerfive', '$answer5image', '$correctanswer1', '$correctanswer2', '$core', '$imgnewfile')");
*/



$query=mysqli_query($con, "insert into tblusers(curriculum, stage, subject, topic, strand, substrand1, substrand2, substrand3, substrand4, substrand5, question, questionImage, MCanswer1, MCanswer2, MCanswer3, MCanswer4, MCanswer5, MCanswerCorrectanswer, MAanswer1, MAanswer2, MAanswer3, MAanswer4, MAanswer5, MAanswer1Correctanswer1, MAanswer1Correctanswer2, matching1, matching2, matching3, matching4, matching5, yesOrNow, trueOrFalse, shortanswer, ProfilePic, quesImage) value('$curriculum', '$stage', '$subject', '$topic', '$strand', '$substrand1', '$substrand2', '$substrand3', '$substrand4', '$substrand5', '$question', '$questionImage', '$MCanswer1', '$MCanswer2', '$MCanswer3', '$MCanswer4', '$MCanswer5', '$MCanswerCorrectanswer', '$MAanswer1', '$MAanswer2', '$MAanswer3', '$MAanswer4', '$MAanswer5', '$MAanswer1Correctanswer1', '$MAanswer1Correctanswer2', '$matching1', '$matching2', '$matching3', '$matching4', '$matching5', '$yesOrNow', '$trueOrFalse', '$shortanswer', '$imgnewfile', '$quesImage')");




 if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/style.css" rel="stylesheet">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title> FORM</title>





<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<!-- 
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

-->
</head>
<body>




    <form  method="POST" enctype="multipart/form-data" >

		<div class="container-fluid">
<div class="row" id="questionsform-row">



<!-- 
    * header Dropdowns *

-->


<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<label> Curriculum </label>
<select class="form-select" id="questionform-select" name="curriculum" >
            <option value="">select</option>
            <option >0-100</option> <!-- first option contains value="" -->
            <option >100-200</option> 
            <option >200-300</option> 
        </select>


</div>





<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<label> Stage </label>
<select class="form-select" name="stage" id="questionform-select" >
            <option value="">select</option>
            <option >0-100</option> <!-- first option contains value="" -->
            <option >100-200</option> 
            <option >200-300</option> 
        </select>



</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">


<label> Subject </label>
<select class="form-select" name="subject" id="questionform-select" >
            <option value="">select</option>
            <option >0-100</option> <!-- first option contains value="" -->
            <option >100-200</option> 
            <option >200-300</option> 
        </select>


</div>

</div>



<div class="row" id="questionsform-row2">

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">


<label> Topic </label>
<select class="form-select" name="topic" id="questionform-select" >
            <option value="">select</option>
            <option >0-100</option> 
            <option >100-200</option> 
            <option >200-300</option> 
        </select>

</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<label> Question Difficulty Level </label>
<select class="form-select" name="questionDifficulty" id="questionform-select" >
            <option value="">select</option>
            <option >0-100</option> 
            <option >100-200</option> 
            <option >200-300</option> 
        </select>



</div>







<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<label> Question Type </label>
									<!-- click on dropdown item to open another content below " -->


                  <ul  name="questionType" id="questiontype-ul">
  <li class="dropdown"> <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" id="questiontype-ul-li-a"> select </a>

    <ul class="dropdown-menu" role="menu" aria-labelledby="drop2" id="questiontype-ul-dropdown">

    <nav id="questiontype-nav"> 
    <li role="presentation" id="questiontype-ul-li"><a  href="#one">Multiple Choice  <input  onmousedown="move()" style="position:relative; opacity:0!important" />  </a>

      </li>
      
      <li role="presentation" id="questiontype-ul-li"><a href="#two" id="questiontype-ul-li">Multiple Answer   <input  onmousedown="move()" style="position:relative; opacity:0!important"/>  </a>
      </li>


      <li role="presentation" id="questiontype-ul-li"><a  href="#three" > Matching   <input  onmousedown="move()" style="position:relative; opacity:0!important"/>  </a>


      </li>
      <li role="presentation"  id="questiontype-ul-li"><a href="#four">True/False  <input  onmousedown="move()" style="position:relative; opacity:0!important"/>   </a>

      </li>

      </li>
      <li role="presentation"  id="questiontype-ul-li"><a href="#five">Yes/No   <input  onmousedown="move()" style="position:relative; opacity:0!important"/> </a>

      </li>

      </li>
      <li role="presentation" id="questiontype-ul-li"><a href="#six" >Short Answer and Paragraph   <input  onmousedown="move()" style="position:relative; opacity:0!important"/> </a>

      </li>


      </nav>

    </ul>
  </li>


</div>
</div>









<script type="text/javascript">

$(document).ready(function() {
$('.dropdown-menu input').click(function(e) {
e.stopPropagation();
});

$('.dropdown a').click(function() {
$('.dropdown').addClass("open");
});
$('.dropdown-menu li').click(function() {

$('.dropdown-toggle b').remove().appendTo($('.dropdown-toggle').text($(this).text()));
});
});
</script>




<script type="text/javascript">

let links = document.querySelectorAll("nav li a");


for (let link of links) {
link.addEventListener('click', function(e) {
let sections = document.getElementsByTagName("section");
for (let section of sections) {
if ("#" + section.id === link.getAttribute("href")) {
section.style.display = "block";
} else {
section.style.display = "none";
}
}
});
}


</script>





<div class="row" id="questionsform-row3">

<!-- 
<input type="text" name="answertwo">
-->
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<label> Strand </label>
<select class="form-select"  name="strand" id="questionform-select" > 
            <option value="">select</option>
            <option >0-100</option> 
            <option >100-200</option> 
            <option >200-300</option> 
        </select>


</div>



<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                                              <!-- * multi select Dropdown * -->
<label> Sub Strand </label>

<section id="substrand-selects"> 

<br> <br> 
<br> 
<br>

<select class="form-select" name="substrand1" multiple aria-label="multiple select example"  id="sustrand1-select">
  <option >One</option>
</select>
<select class="form-select" name="substrand2"  multiple aria-label="multiple select example" id="sustrand2-select">
  <option >Two</option>
</select>
<select class="form-select" name="substrand3" multiple aria-label="multiple select example"  id="sustrand3-select" >
  <option >Two</option>
</select>
<select class="form-select" name="substrand4" multiple aria-label="multiple select example"  id="sustrand4-select" >
  <option >Two</option>
</select>
<select class="form-select"  name="substrand5" multiple aria-label="multiple select example" id="sustrand5-select" >
  <option >Two</option>
</select>














</section>



</div>



</div>











<div class="form-group" id="question-sec">
            <label> Question </label>
    <input type="text" name="question" value="<?php echo $question; ?>"  class="form-control" placeholder="enter your name">
    <input type="file" name="questionImage">
<br>

    </div>




    <section id="one" style="display:none!important;">

    <input type="text" name="MCanswer1" id="div2" style=" border:1px solid silver"
  placeholder="Answer 1"/>

<br>

<input type="text" name="MCanswer2" id="div2" style=" border:1px solid silver"
  placeholder="Answer 2"/>

<br>

<input type="text" name="MCanswer3" id="question3" style=" border:1px solid silver"
placeholder="Answer 3"/>

<br>

<input type="text" name="MCanswer4" id="question4" style=" border:1px solid silver"
      placeholder="Answer 4"/>

<br>


<input type="text" name="MCanswer5" id="question4" style=" border:1px solid silver;"
      placeholder="Answer 5"/>
    
<br>

<br>

<input type="text" name="MCanswerCorrectanswer" id="question5" style="border:1px solid silver; margin-bottom:50px"
    placeholder="Correct Answer 1"/>


<br>

</section>      







<section id="two" style="display:none!important">


<input type="text" name="MAanswer1" id="div1" style=" border:1px solid silver"
      placeholder="Answer 1"/>
<br>
<input type="text" name="MAanswer2" id="div2" style=" border:1px solid silver"
  placeholder="Answer 2"/>

<br>

<input type="text" name="MAanswer3" id="question3" style=" border:1px solid silver"
placeholder="Answer 3"/>

<br>

<input type="text" name="MAanswer4" id="question4" style=" border:1px solid silver"
      placeholder="Answer 4"/>

<br>

<input type="text" name="MAanswer5" id="question5" style="border:1px solid silver"
    placeholder="Answer 5"/>

<br>
<br>

<input type="text" name="MAanswer1Correctanswer1" id="question5" style="border:1px solid silver"
    placeholder="Correct Answer 1"/>

    <br> 
    <input type="text" name="MAanswer1Correctanswer2" id="question5" style="border:1px solid silver"
    placeholder="Correct Answer 2"/>

</section>




<section id="three" style="display:none">



Select image to upload:
<input type="file" name="matching1">
<br>

<br>

<input type="file" name="matching2">
<br>
<br>

<input type="file" name="matching3">
<br>
<br>

<input type="file" name="matching4">
<br>
<br>

<input type="file" name="matching5">
<br>
<br>

</section>





<section id="four" style="display:none">

<select class="form-control" name="trueOrFalse">
<option value="" selected disabled hidden>Select</option>
<option>True </option>
  <option>False </option>

</select>
</section>


                            <!-- 
                              ####################
                              ##################

                              [ True or False answer ]

                            -->

                            <section id="five" style="display:none">

<select class="form-control" name="yesOrNow">
<option value="" selected disabled hidden>Select</option>
<option>yes</option>
  <option>No</option>

</select>
</section>

                         <!-- 
                              ####################
                              ##################

                              [ Short Answer and Paragraph  ]

                            -->



                            
 <section id="six" style="display:none">
<input type="text" name="shortanswer"/> 
</section>







<br> 









<!-- 
<label> image 1 </label>
<input type="file" name="imageA">

    <label> image 2 </label>
    <input type="file" name="imageB">


    -->


<br> 








      
<!-- 
        
        <div class="form-group" id="image-form">
        	<input type="file" class="form-control" name="matching1">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>     
   
      <br> 
      <div class="form-group" id="image-form">
        	<input type="file" class="form-control" name="matching2">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>     
        <br> 
      <div class="form-group" id="image-form">
        	<input type="file" class="form-control" name="matching3">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>     
        <br> 
      <div class="form-group" id="image-form">
        	<input type="file" class="form-control" name="matching4">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>     
        <br> 
      <div class="form-group" id="image-form">
        	<input type="file" class="form-control" name="matching5">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>     

-->


		<div class="form-group" id="submit-form">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit" id="insert-submitbtn">Submit</button>
        </div>
    </form>
</div>





<style>

#questionsform-row{ 
    margin: auto;
    justify-content: center;
    text-align: center!important;}

    #questionsform-row2{ 
    margin: auto;
    justify-content: center;
    text-align: center!important;}

    #questionsform-row3{ 
    margin: auto;
    justify-content: center;
    text-align: center!important;}



    section {
height: 200px;
width: 20%;
}
nav {

top:10px;
left: 20px
}





#answerstable-results{
    text-overflow: ellipsis!important;
    overflow: hidden!important;
    font-size: 12px!important; word-break: break-all!important;   width: 850px!important; max-width: 800px!important;
    border: 1px solid silver;}



    #answers-deletebtn{margin-top:10px!important}


    #questionform-select{font-size:1.4rem!important; text-align: center!important; width:60%!important; 
        margin-top: 5px!important;     cursor: pointer!important;}


    #questionsform-row{padding-top: 30px!important;}

    #questionsform-row2{padding-top: 35px!important;  }

    #questionsform-row3{padding-top: 35px!important;  }


    #substrand-selects{display: -webkit-box!important}

    #substrand-selects:nth-of-type(2){border:2px solid yellow}

#sustrand1-select, #sustrand2-select, #sustrand3-select, #sustrand4-select, #sustrand5-select{ max-height: 34px!important; 
    width: 105px !important;
    font-size: 1.4rem!important;
    text-align: center!important;
    padding-top: 8px!important; cursor:pointer!important}


#sustrand2-select, #sustrand3-select, #sustrand4-select, #sustrand5-select{margin-left: 20px!important;}



                            /*
                            ############
                            question type ul design */ 


    #questiontype-ul{    display: block;
        width: 60%;
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        /*
        vertical-align: middle;
        */
        background-color: #fff;
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none; height: 30.5px!important;}

        

            #questiontype-ul li a{
            line-height: 1.5!important;
    color: #212529!important; text-decoration: none!important;}

    
    
    
    #questiontype-ul-li-a{
        width: 100%!important;
        position: absolute!important;
        text-align: center;
        text-decoration: none!important;
        color: #212529;
        font-size: 1.4rem; }

     #questiontype-ul-li{text-align: center!important;}

     #questiontype-ul-li a{line-height: 0;}



     #questiontype-ul-dropdown{margin-top: 29px!important}


     #questiontype-ul li::marker{display: none!important;}


     #questiontype-ul li{text-decoration: none!important;
        list-style-type: none!important;}

        .dropdown{text-decoration: none!important;
            list-style-type: none!important;}
    
      
            #questiontype-nav{    padding-top: 15px!important;}



#questiontype-ul-li-a::after{top: 8px!important;
    margin-top: 9px!important;     margin-left: -1.745em!important; float:right!important}


                                  /* multiply chooise */ 

    #one{margin-bottom: 152px!important;}


    #one input{    display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;}


                    /* multiply answers */ 
        #two{margin-bottom: 195px!important;

font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    background-image: url(download.svg);
    text-indent: -23px;
    font-size: 1rem!important;
    text-align: center!important;
    /* width: 36%!important; */
    /* margin-top: 5px!important; */
    cursor: pointer!important;
    font-weight: 400;
    line-height: 1.5;
    color: #343d45;
    vertical-align: middle;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    /* border: 1px solid #ced4da; */
    /* border-radius: 0.25rem; */
    top: 0px!important;
    margin-top: -4px!important;
    appearance: none!important;
    text-decoration: none!important;}


        #two input{    display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
            -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;}

/*
            #img#answersImage{max-width: 60px!important; max-height: 60px!important;}
            */

        


            #questionform-select{  margin-left:11px!important;

              font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    padding: 7px;
    -webkit-appearance: none;
    /*
    background-image: url(data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e)!important;
    */

    background-image: url("download.svg");

    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 1em;
    text-indent: -23px;
    font-size: 1rem!important;
    text-align: center!important;
    width: 36%!important;
    margin-top: 5px!important;
    cursor: pointer!important;
    font-weight: 400;
    line-height: 1.5;
    color: #343d45;
    vertical-align: middle;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;

  }

  #questiontype-ul {
    display: block;
    width: 36%!important;
    margin-left: 148px!important; height:40px!important;     padding: 0.7rem 1.75rem 0.375rem 0.75rem}

#questiontype-ul-li-a {
    width: 157px!important;
    position: absolute!important;

    margin-left: -70px!important;



    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    background-image: url(download.svg);
    text-indent: -23px;
    font-size: 1rem!important;
    text-align: center!important;
    /* width: 36%!important; */
    /* margin-top: 5px!important; */
    cursor: pointer!important;
    font-weight: 400;
    line-height: 1.5;
    color: #343d45;
    vertical-align: middle;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    /* border: 1px solid #ced4da; */
    /* border-radius: 0.25rem; */
    top: 0px!important;
    margin-top: -4px!important;
    appearance: none!important;
    text-decoration: none!important;


}
#questiontype-ul-li-a::after{display:none!important}

#questiontype-ul-dropdown {
    margin-top: 10px!important;} 


    section#substrand-selects {
    width: 100%!important;
    display: flex!important;
}

#sustrand1-select{    max-height: 44px!important;
    width: 105px !important;
    font-size: 1rem!important;
    text-align: center!important; appearance: none!important;
    overflow-x: hidden;
    overflow-y: hidden;  margin-top: 7px!important; }

    #sustrand1-select option{    height: 215px!important;
    padding: 8px!important;
    margin-top: -9px!important;}


    #sustrand2-select{    max-height: 44px!important;
    width: 105px !important;
    font-size: 1rem!important;
    text-align: center!important; appearance: none!important;
    overflow-x: hidden;
    overflow-y: hidden; margin-top: 7px!important; } 

    #sustrand2-select option{    height: 215px!important;
    padding: 8px!important;
    margin-top: -9px!important;}


    #sustrand3-select{    max-height: 44px!important;
    width: 105px !important;
    font-size: 1rem!important;
    text-align: center!important; appearance: none!important;
    overflow-x: hidden;
    overflow-y: hidden;  margin-top: 7px!important; }

    #sustrand3-select option{    height: 215px!important;
    padding: 8px!important;
    margin-top: -9px!important;}


    #sustrand4-select{    max-height: 44px!important;
    width: 105px !important;
    font-size: 1rem!important;
    text-align: center!important; appearance: none!important;
    overflow-x: hidden;
    overflow-y: hidden;  margin-top: 7px!important; }

    #sustrand4-select option{    height: 215px!important;
    padding: 8px!important;
    margin-top: -9px!important;}



    #sustrand5-select{    max-height: 44px!important;
    width: 105px !important;
    font-size: 1rem!important;
    text-align: center!important; appearance: none!important;
    overflow-x: hidden;
    overflow-y: hidden;  margin-top: 7px!important; }

    #sustrand5-select option{    height: 215px!important;
    padding: 8px!important;
    margin-top: -9px!important;}

#question-sec{max-width: 90%!important;
    margin: auto!important;
    margin-bottom: 40px!important}


    
#question-sec .form-control{ width: 55%!important; height:50px!important; margin-bottom: 15px!important;}


#three input{    border: 1px solid #bebebe!important;
    height: 40px!important;
    line-height: 31px!important;}


#one{ margin-left:72px!important; margin-bottom: 209px!important;}
#two{ margin-left:72px!important ; margin-bottom: 258px!important}
#three{ margin-left:72px!important ; margin-bottom: 173px!important;}
#four{ margin-left:72px!important;     margin-bottom: -100px!important; }
#five{ margin-left:72px!important;  margin-bottom: -100px!important; }
#six{ margin-left:72px!important}



#six input{width: 713px!important;
    height: 142px!important;}


    div#image-form {
    margin-top: -58px!important;}


#insert-submitbtn{    max-width: 162px!important;
    margin: auto!important; border-radius:none!important}

</style>
















</body>
</html>