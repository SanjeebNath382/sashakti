<?php
    require_once('config.php');
    // $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'sashakti');
    $bc= 0;
    $mc=0;
    $query= "SELECT * FROM questions";
    $result= $con->query($query);
    $m="Mindspace";
    $b= "Bodyspace";
    while($row= $result->fetch_array()){
        if($row['category']==$m)    $mc=$mc+1;
        else                        $bc=$bc+1;
    }
    
    

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="CSS/home-style.css">
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 40%;
  padding: 0 10px;
  margin-left: 5%;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background: linear-gradient(to bottom, #66ffcc 0%, #ff99cc 100%);
};

</style>
  </head>
  <header id="header">
  <div id="brand">
     <img id="header-img" src="assets/icon.png" href="home.php"/>
  </div>
  <nav id="nav-bar" style="display: flex;">
    <a class="nav-link" href="home.php">Home</a>
    <a class="nav-link" href="FindGroup.php">Events</a>
    <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
    <a class="nav-link" href="Blog.php">Blog</a>
    <a class="nav-link" href="profile.php">Profile</a>
  </nav>
</header>
  <body style="margin-top: 150px;">
    <div style="margin-left: 30%;">
    <h1 style="margin-top:5%;margin-left:5%;color:#ff3256;font-family: Brush Script MT, Brush Script Std, cursive;"><b>Welcome to our Forum!</b></h1><br>
    <a href="question.php"><button style="border-radius:20px; box-shadow: 2px;margin-left:15%; background-color:#27f58e; width:250px">Ask a question</button></a> <br>
</div>
    <!-- <div class="container">
        <div class="d-flex flex-row">
            <h3>List of Categories</h3>
            

        </div>
    </div> -->
   
    <!-- <table class="table table-hover table-bordered">
    <thead>
        <th scope="col">Category</th>
        <th scope="col">Number of questions</th>
        
       
        
      </thead>
      <tbody>
      <tr>
        <td><?php echo "<a href='feed.php?category=".$m."'>Mindspace</a>";?></td>
        <td><?php echo $mc?></td>
      </tr>
      <tr>
        <td><?php echo "<a href='feed.php?category=".$b."'>Bodyspace</a>"?></td>
        <td><?php echo $bc?></td>
      </tr>

      </tbody>

   

    </table> -->
  
    <div class="row" style="margin-top: 2%;">
  <div class="column">
    <div class="card">
      <img src="./assets/mind.png" style="height:200px;width:200px;object-fit:cover;margin-left:29%"></img>
      <p><?php echo "<a href='feed.php?category=".$m."' style='color:white;font-size:50px;'>Mindspace</a>";?></p>
      <p><b> <?php echo $mc?> Questions</b></p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./assets/body.png" style="height:200px;width:200px;object-fit:cover;margin-left:29%"></img>
      <p><?php echo "<a href='feed.php?category=".$b."' style='color:white;font-size:50px;'>Bodyspace</a>";?></p>
      <p><b> <?php echo $bc?> Questions</b></p>
    </div>
  </div>
    </div>
    
  </body>
</html>
