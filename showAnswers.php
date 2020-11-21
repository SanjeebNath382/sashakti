<?php 
    $qid= $_GET['questionid'];
    // $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'sashakti');
    require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>answers</title>
  </head>
  <body>
  <h1 style="margin-left:45%;margin-top:5%;color:#ff3256;font-family: Brush Script MT, Brush Script Std, cursive;"><b>Discussion</b></h1><br>
  <!-- this is for question -->
  <?php
      $query = "SELECT * FROM questions WHERE qid='$qid'";
      $res= $con->query($query);
      $row= $res->fetch_array();
      $question= $row['text'];
      echo "
      <div class='container' style='background:linear-gradient(to bottom, #66ffcc 0%, #ff99cc 100%);text-align:center;width:800px;margin: 30px auto; border-radius: 15px; box-shadow: 0px 2px 2px #ff3256;border: 2px solid;overflow:none'>
      <h2 style='font-family:Arial, Helvetica, sans-serif;'><b>$question</b></h2>

      </div>
      "

  ?>
  <!-- <div class='container' style='background:linear-gradient(to bottom, #66ffcc 0%, #ff99cc 100%);text-align:center;width:800px;margin: 30px auto; border-radius: 15px; box-shadow: 0px 2px 2px #ff3256;border: 2px solid;overflow:none'>
            <h2 style='font-family:Arial, Helvetica, sans-serif;'><b>$question</b></h2>

  </div> -->
  <!-- this is for answer -->
  <?php 
    $query= "SELECT * FROM answers WHERE qid='$qid'";
    $res= $con->query($query);
    while($row= $res->fetch_array()){
      $answer= $row['text'];
      $ansdby= $row['answeredBy'];
      $date= $row['date'];
      echo "
      <div class='container' style='background:linear-gradient(to bottom, #3399ff 0%, #99ff99 100%);text-align:center;width:800px;margin: 30px auto; border-radius: 15px; box-shadow: 0px 2px 2px #ff3256;border: 2px solid;overflow:none'>
            <h4>Answered By: <p>$ansdby</p></h4>
            <h4>Answered On: <p>$date</p></h4>
            <p style='font-family:Arial, Helvetica, sans-serif;'>$answer</p>

        </div> 
      ";

    }
  ?>
  
   
                     
  </body>
</html>
