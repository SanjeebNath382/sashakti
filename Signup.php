<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
width:50%;
margin:auto;
margin-top:5%;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=tel], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #ff3256;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
#form-img{
    max-width:20%;
    margin:2%;
}
#form-head{
    display:flex;
    justify-content:flex-start;
    align-items:center;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  clear: both;
}
.container input{
  width: 100%;
  clear: both;

}
</style>
</head>
<?php
  
  session_start();
  if(isset($_POST['submit'])){
    require_once('./config.php');
    $name=$_POST['f_name'];
    $u_name= $_POST['u_name'];
    $pass= $_POST['pass'];
    $uid= uniqid($u_name);
    $securepass= crypt($pass,$u_name);
    $sql= "INSERT INTO `sashakti`.`users` (`userid`, `username`, `password`, `name`) VALUES ('$uid', '$u_name', '$securepass', '$name');";
    if($con->query($sql) == true){
      echo "<h3 style='margin-left:400px;margin-top:20px;color:green' >You have successfully registered<a href='Login.php'>Go back to Login Page</a></h3>";
      
  }
  else{
     echo "ERROR: $con->error";
  }
  $con->close();

  }
?>
<body>
<div id="form-head">
    <img src="assets/icon.png" id="form-img"></img>
    <h2 style="text-align: center; font-size:40px; color:#ff3256; margin:2%;">Signup</h2>
</div>

<div class="container">
  <form method="post">
        <label for="f_name">Full Name</label>
        <input type="text" id="u_name" name="f_name" placeholder="Your full name">
        <br>
        <label for="u_name">User Name</label>
        <input type="text" id="u_name" name="u_name" placeholder="Username">
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="pass" placeholder="Your password">
        <br>
        <br>
        <input type="submit" name="submit" action="submit">
  </form>
</div>

</body>
</html>
