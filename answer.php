<?php
    $qid= $_GET['questionid'];
    // $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'sashakti');
    require_once('config.php');
    $query= "SELECT * FROM questions WHERE qid='$qid'";
    $result= $con->query($query);
    $row= $result->fetch_array();
    $question= $row['text'];
    if(isset($_POST['submit'])){
      session_start();
      $ans= $_POST['ans'];
      $uid= $_SESSION['id'];
      $username= $_SESSION['username'];
      $aid= uniqid($uid);
      $sql= "INSERT INTO `sashakti`.`answers` (`ansid`, `qid`,`answeredBy`, `text`,`date`) VALUES ('$aid', '$qid','$username', '$ans',current_timestamp());";
      if($con->query($sql) == true){
        header('location: ./forum.php');

      }
      else{
        echo "ERROR: $con->error";
      }
      $con->close();
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Answer</title>
  </head>
  <body>
    <form  method="post">
      <div class="container" style="align-content: center;margin-top:2%">
        <h1 style="color: #ff3256;"><center><?php echo  $question?></center></h1>
        <textarea name="ans" rows="15" cols="150"  placeholder="Type your answer here......"></textarea>
        <br />
        <button class="btn btn-primary" type="submit" action="submit" name="submit">Answer</button>

      </div>


    </form>


  </body>
</html>
