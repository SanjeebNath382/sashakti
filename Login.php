<?php
    session_start();
    if(isset($_POST['submit'])){
        require_once('config.php');
        // $server= "localhost";
        // $username="root";
        // $password="";
        // $con= mysqli_connect($server,$username,$password,'sashakti');
        $u_name= $_POST['u_name'];
        $pass= $_POST['pass'];
        $password1= crypt($pass,$u_name);
        $query = "SELECT * FROM users where username='$u_name'";
        $result = $con->query($query);
   
  
        $row= $result->fetch_array();
        if($row['username']!= $u_name){
     
            echo "<p style='color:red'>No such user</p>";
          }
          else{
            if($row['password']== $password1 ){
              
              header('location: ./home.php');
              $_SESSION['username']= $row['username'];
              $_SESSION['id']=$row['userid'];
            }
            else{
              
              echo "<h3>Incorrect Password</h3>";
            }
          }
          
        
          $con->close();
        
    }
?>
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
            margin:1%;
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
    
    <body>
        <div id="form-head">
            <img src="assets/icon.png" id="form-img"></img>
            <h2 style="text-align: center; font-size:40px; color:#ff3256; margin:2%;">Login</h2>
        </div>

        <div class="container">
            <form method="post">
            <label for="u_name">Username</label>
                <input type="text" id="u_name" name="u_name" placeholder="Your username">

                <br>

                <label for="pass">Password</label>
                <input type="password" id="password" name="pass" placeholder="Your password">
                <br>


                <input type="submit" name="submit" action="submit">
            </form>
        </div>

</body>
</html>
