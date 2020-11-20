<?php
    
$server= "localhost";
$username="root";
$password="";
$con= mysqli_connect($server,$username,$password,'sashakti');
if(!$con){
    die("Connection not made due to".mqsqli_connect_error());
}

?>