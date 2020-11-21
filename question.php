<?php
  if(isset($_POST['submit'])){
    session_start();
    require_once('config.php');
    // $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'sashakti');
    $question= $_POST['question'];
    $category= $_POST['category'];
    $qid= uniqid($question);
    $uid= $_SESSION['id'];
    $sql= "INSERT INTO `sashakti`.`questions` (`qid`, `category`, `text`, `uid`,`date`) VALUES ('$qid', '$category', '$question', '$uid',current_timestamp());";
    if($con->query($sql) == true){
      echo "<h3 style='margin-left:400px;margin-top:20px;color:green' >You question was successfully registered</h3>";
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
    <title>Ask a question</title>
  </head>
  <body>
  <form id="qform" method="post" style="margin-top:100px">
  <h2 style="margin-left:650px">Ask a question!!!</h2>
    <div style="margin-top:35px;background-color:#E27D60;border-radius: 5px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);overflow: hidden;width: 400px;max-width: 100%;" class="container">
      <div class="form-row">
          <div class="col">
              <label for="question">Your  Question</label>
              <input type="textarea" class="form-control" placeholder="Your Question" id="question" name="question" required/>
          </div>
      </div>
      <div class="form-row">
          <div class="col">
              <label for="category">Please select a category</label>
              <div class="input-group">
                  <select class="custom-select mb-3" id="category" name="category">
                      <option  selected>Choose</option>
                      <option value="Mindspace">Mindspace</option>
                      <option value="Bodyspace">Bodyspace</option>
                  </select>
              </div>
           </div>
       </div>
       <div class="form-row">
          <div class="col">
            <button  class="btn btn-success" action="submit" name="submit"  style="width:100px;" >Submit</button>
          </div>
        </div>
    </div>
  </form>


  </body>
</html>
