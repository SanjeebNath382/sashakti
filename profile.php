<?php 
 session_start();
  require_once('config.php');
  $uid= $_SESSION['id'];
  $query="SELECT * FROM users WHERE userid='$uid'";
  $res= $con->query($query);
  $row= $res->fetch_array();
  $name= $row['name'];
?>
<html>
<head>
<link rel="stylesheet" href="CSS/home-style.css">
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 2px 8px 0 rgba(5, 3, 3, 0.6);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: turquoise;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

</head>
<header id="header">
  <div id="brand">
     <img id="header-img" src="assets/icon.png" href="home.php"/>
  </div>
  <nav id="nav-bar">
    <a class="nav-link" href="home.php">Home</a>
    <a class="nav-link" href="FindGroup.php">Events</a>
    <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
    <a class="nav-link" href="Blog.php">Blog</a>
    <a class="nav-link" href="profile.php">Profile</a>
  </nav>
</header>
<body style="margin-top: 100px;">

<h1 style="margin-left:42%;margin-top:5%;color:#ff3256;font-family: Brush Script MT, Brush Script Std, cursive;font-size:50px"><b>My Profile</b></h1><br>
<div class="card">
 <!-- <img src="person-icon-female-user-profile-avatar-vector-18833553.jpg" alt="User" style="width:100%"> -->
  <br>
  <h2><?php echo $name;?></h2>
  <p class="title">Student</p>
  <p>Email- admin@gmail.com</p>
  <div style="margin: 24px 0;">
  </div>
  <p><button >Contact</button></p>
</div>
<br>
<div class="card" style="background-color: #ff3256;padding:0.5%">
  <h1 style="color:white; font-size:25px;"><a  style="text-decoration:none;color:antiquewhite" href="MedicalHistory.php">Record <br>Medical History</a></h1>
  </div>

</body>
</html>