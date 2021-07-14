<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Online examination </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
<link rel="stylesheet" href="css/main.css">
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>


 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
 <br> 
<span class="logo"><img src="image/learnerstacklogo.png" width="40%"></span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1">&nbsp;</span> <a href="account.php?q=1" class="log log1">'.$name.'&nbsp;&nbsp;<i class="fas fa-chevron-circle-down"></i></a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><i class="fas fa-sign-out-alt"></i>&nbsp;Signout</button></a></span>';
}?>
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span aria-hidden="true"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span  aria-hidden="true"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></span>&nbsp;History</a></li>
		<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span  aria-hidden="true"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <rect width="4" height="5" x="1" y="10" rx="1"/>
  <rect width="4" height="9" x="6" y="6" rx="1"/>
  <rect width="4" height="14" x="11" y="1" rx="1"/>
</svg></span>&nbsp;Ranking</a></li></ul>
            
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row" >
<div class="col-md-12">

<!--home start-->
<?php if(@$_GET['q']==1) {
if(!isset($_SESSION['key'])){
$student_class=$_SESSION['class'];
$result = mysqli_query($con,"SELECT * FROM quiz WHERE class='$student_class' ORDER BY date DESC") or die('Error');
}
else{
  $result = mysqli_query($con,"SELECT * FROM quiz  ORDER BY date DESC") or die('Error');
}
echo  '<div  align="center"><table class=" custom_table" >
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'&time='.$time.'" class="pull-right btn sub1" style="background-color: lightgreen;color:black; padding:5px; border-radius:5px;" >&nbsp;<span class="title1"><b>Start</b></span>&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></b></td></tr>';
}
else
{
  echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'&time='.$time.'" class="pull-right btn sub1" style="background-color: #f9d56e;color:black; padding:5px; border-radius:5px;" >&nbsp;<span class="title1"><b>Re-start</b></span>&nbsp;&nbsp;<i class="fas fa-redo-alt"></i></a></b></td></tr>';
}
}
$c=0;
echo '</table></div>';

}?>

 <script>


    
    

   
    function update_quiz_time(time){
      const currentTimestamp=new Date().getTime();
      const finalTimestamp=currentTimestamp+(time*60*1000);
      sessionStorage.setItem('quiz_final_timestamp',finalTimestamp);
      var countdownTimer = setInterval('timeleft()', 1000);
    }

    function submit_quiz(){

        const quiz_eid=sessionStorage.getItem('quiz_eid');
        window.location.replace("account.php?q=result");

    }


    function timeleft() {

            const finaltime=sessionStorage.getItem('quiz_final_timestamp');
            const currenttime=new Date().getTime();
            var seconds = ( finaltime- currenttime) / 1000;
            var minutes = Math.round((seconds - 30)/60);
            var remainingSeconds = Math.round(seconds % 60);
            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }
            document.getElementById('countdown').innerHTML = minutes + " Minutes " +    remainingSeconds+" Seconds";

            console.log(seconds);
            if (seconds <= 0) {
                
              document.getElementById("regForm").submit();
              return false;

            } 
           else {    
                seconds--;
            }

    }

   

</script> 

<!--home closed-->

<!--quiz start-->
<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$time=@$_GET['time'];

if($sn==1){

    
   $_SESSION['eid']=$eid;

   echo "<script>update_quiz_time('$time')</script>";


}



$total=@$_GET['t'];
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid'  " );
echo '<div  class="panel" style="padding:3%">
<span id="countdown_span"><span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></span>  <span id="countdown" class="timer"></span></span>';
echo '<form action="account.php?q=result" method="POST"  id="regForm" class="form-horizontal">
';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
$question_number=$row['sn'];
echo '<div class="tab"><br>';
echo '<div class="quiz_header"><span>Question &nbsp;'.$question_number.'&nbsp;</span></span><br></div><br/>';
echo '<b >'.$qns.'</b><br />';

$question_options=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );


while($row=mysqli_fetch_array($question_options) )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<div >
<label class="quiz_option" onclick="change_color(this)">
<input type="radio"  name="'.$question_number.'"  value="'.$optionid.'">&nbsp '.$option.'
</label>
</div>';
}
echo '</div>';
}

echo '
<br>
<br>
<div style="overflow:auto;">
<div style="float:right;">
  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next<span><i class="fas fa-arrow-right"></i></span></button>
</div>
</div>';

echo '<div style="text-align:center;margin-top:40px;">';

for($i=0;$i<$total;$i++){

  echo '<span class="step"></span>';
}

echo   '</div>';




echo '</form></div>';


//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}


//result display
if(@$_GET['q']== 'result') 
{
//session containing all the options selected by user 




$eid=$_SESSION['eid'];

$query_questions=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid'");

echo  '<div class="panel" id="pdf_report">
<center><h1 class="title" style="font-family:arial;">Quiz Overview</h1><center><br /><table class="table  title1" style="font-size:20px;font-weight:1000;">
<tr><th>Question</th><th>Your Answer</th><th>Correct Answer</th><th> </th></tr>';

$count=1;
$right_answer_count=0;
$wrong_answer_count=0;
$not_attempted_count=0;
while($row=mysqli_fetch_array($query_questions)){

   

   $question=$row['qns'];
   $question_id=$row['qid'];
   if(isset($_POST[$count]))
   {
    $choice_optionid=$_POST[$count];
   }
   else{
       
    $choice_optionid="";
    $not_attempted_count++;

   }
   

   $query_choice=mysqli_query($con,"SELECT * FROM options WHERE optionid='$choice_optionid'");
 
   $result_choice=mysqli_fetch_array($query_choice);


   $query_answer=mysqli_query($con,"SELECT * FROM options WHERE optionid IN(SELECT ansid FROM answer WHERE qid IN(SELECT qid FROM questions WHERE qid='$question_id'))");
   
   $result=mysqli_fetch_array($query_answer);

   if($choice_optionid==$result['optionid'])
   {

    $right_answer_count++;
    echo '<tr style="font-size:15px;color:grey"><td >'.$question.'</td><td>'.$result_choice['option'].'</td><td >'.$result['option'].' </td><td><span  style="color:#99cc32"  aria-hidden="true"><i class="fas fa-check-circle"></i></span></td></tr>';

   }
   else{

    $wrong_answer_count++;
    echo '<tr style="font-size:15px;color:grey"><td >'.$question.'</td><td>'.$result_choice['option'].'</td><td >'.$result['option'].' </td><td><span style="color:red"  aria-hidden="true"><i class="fas fa-times-circle"></i></span></td></tr>';

   }


   

  $count++;

}

echo '</table></div>';

//logic to calucate all quiz result
$q=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid' " );
while($row=mysqli_fetch_array($q) )
{
$sahi=$row['sahi'];
$wrong=$row['wrong'];
}
$total_score=(($right_answer_count*$sahi)-($wrong_answer_count*$wrong));
$q=mysqli_query($con,"INSERT INTO history VALUES('$email','$eid' ,$total_score,$count,$right_answer_count,$wrong_answer_count,NOW())")or die('Error');

if(!isset($_SESSION['key']))
{
$q=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
}
$q=mysqli_query($con,"SELECT * FROM rank WHERE email='$email'" )or die('Error161');
$rowcount=mysqli_num_rows($q);
if($rowcount == 0)
{
$q2=mysqli_query($con,"INSERT INTO rank VALUES('$email','$s',NOW())")or die('Error165');
}
else
{
while($row=mysqli_fetch_array($q) )
{
$sun=$row['score'];
}
$sun=$s+$sun;
$q=mysqli_query($con,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
}}



echo  '<div class="panel" id="pdf_report_overview">

<center><h1 class="title" style="font-family:arial;">Result</h1><center><br />
<div id="piechart"></div>
<table class="table  title1" style="font-size:20px;font-weight:1000;">';

echo '<tr style=""><td>Total Questions</td><td>'.$count.'</td></tr>
      <tr style="color:#99cc32"><td>Right Answer&nbsp;<span  aria-hidden="true"><i class="fas fa-check-circle"></i></span></td><td>'.$right_answer_count.'</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span  aria-hidden="true"><i class="fas fa-times-circle"></i></span></td><td>'.$wrong_answer_count.'</td></tr>
    <tr style="color:#66CCFF"><td>Score&nbsp;<span  aria-hidden="true"></span></td><td>'.$total_score.'</td></tr>';

  



$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}

echo '<tr><div><button  style="border:0px;padding:10px;border-radius:3px;color: white;background-color:blue" class="btn_report_download" onclick="convert_report_to_pdf()" >Download Report <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zm-.5 3.5a.5.5 0 0 0-1 0v3.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 11.293V7.5z"/>
</svg></span></button></div></tr>"';
echo '</table></div>';

// echo "<script type='text/JavaScript'>  
//         drawChart('$right_answer_count','$wrong_answer_count','$not_attempted_count');
//      </script>";

unset($_SESSION['eid']); 
}
?>
<!--quiz end-->
<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="title" align="center">

<table class="custom_table  title1" >
<tr ><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td><td><b>Attempted On</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$date=$row['date'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td><td>'.$date.'</td></tr>';
}
echo'</table></div>';
}

//ranking start
if(@$_GET['q']== 3) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class=" title" align="center">
<table class="custom_table  title1" >
<tr ><td><b>Rank</b></td><td><b>Name</b></td><td><b>School</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$college=$row['school'];
}
$c++;
echo '<tr><td ><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
}
echo '</table></div>';}
?>



</div></div></div></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>


<script type="text/javascript">

function convert_report_to_pdf() {

  let currenttimestamp=new Date().getTime();
  let pdfname=currenttimestamp+".pdf";

  var pdf = new jsPDF('p', 'pt', 'a4');
  pdf.addHTML(document.body, function() {
  pdf.save(currenttimestamp);
   });

  

}
</script>

<!-- <script type="text/javascript">

// Load google charts
google.charts.load('current', {'packages':['corechart']});


// Draw the chart and set the chart values
function drawChart(right_answer,wrong_answer,not_attempted) {
  // Load google charts
  alert("shubham kumar");
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Friends', 2]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}



</script> -->

<script type="text/javascript">

$(function () {

var specialElementHandlers = {
    '#editor': function (element,renderer) {
        return true;
    }
};

  
});

</script>
<script>


function change_color(e){

  e.classList.add("answer_checked");
  $(".answer_checked").not($(e)).removeClass('answer_checked');


}

</script>

<script type="text/javascript">

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

</script>


</body>
</html>
