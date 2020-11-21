<?php
   $category= $_GET['category'];
   require_once('config.php');
  //  $server= "localhost";
  //   $username="root";
  //   $password="";
    // $con= mysqli_connect($server,$username,$password,'sashakti');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?php echo$category?></title>
  </head>
  <body>
    <h1 style="margin-top:5%;margin-left:43%;color:#ff3256;font-family: Brush Script MT, Brush Script Std, cursive;">Questions</h1>
    <?php
        $query= "SELECT * FROM questions WHERE category='$category'";
        $result= $con->query($query);
        while($row= $result->fetch_array()){
            $qid= $row['qid'];
            $question= $row['text'];
            $uid= $row['uid'];
            $q= "SELECT * FROM users WHERE userid='$uid'";
            $res= $con->query($q);
            $ans= $res->fetch_array();
            $askdby= $ans['username'];
            $date= $row['date'];
            $num=0;
            $q2= "SELECT * FROM answers WHERE qid='$qid'";
            $res2= $con->query($q2);
            while($anns= $res2->fetch_array()){
              $num=$num+1;
            }
            echo "
            <div class='container' style='background:linear-gradient(to bottom, #66ffcc 0%, #ff99cc 100%);text-align:center;width:800px;margin: 30px auto; border-radius: 15px; box-shadow: 0px 2px 2px #ff3256;border: 2px solid;overflow:none'>
            <h2 style='font-family:Arial, Helvetica, sans-serif;'><b>$question</b></h2>
            <h6>Posted By: $askdby</h6>
            <h6>Posted On: $date</h6>
            <a href='showAnswers.php?questionid=".$qid."'><p style='color:white;'><b>$num answered</b></p></a>
            <a href='answer.php?questionid=".$qid."' class='btn btn-outline-success' style='margin-bottom: 10px;border-radius: 18px'>Answer</a>

            </div>

            ";

        }

    ?>
    <!-- <div class='container' style='width:800px;margin: 30px auto; border-radius: 15px; box-shadow: 0px 2px 2px rgb(240,39,11);border: 2px solid;'>
        <h1>Question</h1>
        <h3>Aked By: XYZ</h3>
        <h3>Asked On</h3>
        <button class='btn btn-outline-success' style='margin-bottom: 10px;border-radius: 18px'>Answer</button>

    </div> -->

  </body>
</html>
