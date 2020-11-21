<?php
    if(isset($_POST['submit'])){
      $o1= $_POST['option1'];
      $o2= $_POST['option2'];
      $o3= $_POST['option3'];
      $o4= $_POST['option4'];
      $o5= $_POST['option5'];
      $o6= $_POST['option6'];
      $o7= $_POST['option7'];
      $o8= $_POST['option8'];
      $o9= $_POST['option9'];
      $o10= $_POST['option10'];
      $tot=$o1+$o2+$o3+$o4+$o5+$o6+$o7+$o8+$o9+$o10;
      // echo $tot;
      if($tot>34) header('location: ./MentalLow.php');
      else if($tot<35 && $tot>=20)  header('location: ./MentalMed.php');
      else                          header('location: ./MentalHigh.php');
      
    }
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
width:40%;
margin:auto;
margin-top:5%;}
* {box-sizing: border-box;}

.options{
    margin-left:20px;
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

<body>
<div id="form-head">
    <img src="./assets/icon.png" id="form-img"></img>
    <h2 style="text-align: center; font-size:40px; color:#ff3256; margin:2%;">Mental Health Check</h2>
</div> 

<div class="container">
  <form method="post">
    <div>
    <label><b>Q1</b> About how often did you feel tired out for no good reason?</label><br><br>
    
    <label for="none">None of the time</label>
    <input type="radio" id="none" name="option1" value="5">
    
    <label for="little">A little of the time</label>
    <input type="radio" id="little" name="option1" value="4">
    
    <label for="some">Some of the time</label>
    <input type="radio" id="some" name="option1" value="3">
    
    <label for="most">Most of the time</label>
    <input type="radio" id="most" name="option1" value="2">
    
    <label for="all">All of the time</label>
    <input type="radio" id="all" name="option1" value="1">
    </div>
    <br>
    <div>
      <label><b>Q2</b> About how often did you feel nervous?</label><br><br>
      
      <label for="none">None of the time</label>
      <input type="radio" id="none" name="option2" value="5">
      
      <label for="little">A little of the time</label>
      <input type="radio" id="little" name="option2" value="4">
      
      <label for="some">Some of the time</label>
      <input type="radio" id="some" name="option2" value="3">
      
      <label for="most">Most of the time</label>
      <input type="radio" id="most" name="option2" value="2">
      
      <label for="all">All of the time</label>
      <input type="radio" id="all" name="option2" value="1">
      </div>
      <br>
      <div>
        <label><b>Q3</b> About how often did you feel so nervous that nothing could calm you down?</label><br><br>
        
        <label for="none">None of the time</label>
        <input type="radio" id="none" name="option3" value="5">
        
        <label for="little">A little of the time</label>
        <input type="radio" id="little" name="option3" value="4">
        
        <label for="some">Some of the time</label>
        <input type="radio" id="some" name="option3" value="3">
        
        <label for="most">Most of the time</label>
        <input type="radio" id="most" name="option3" value="2">
        
        <label for="all">All of the time</label>
        <input type="radio" id="all" name="option3" value="1">
        </div>
        <br>
        <div>
          <label><b>Q4</b> About how often did you feel hopeless?</label><br><br>
          
          <label for="none">None of the time</label>
          <input type="radio" id="none" name="option4" value="5">
          
          <label for="little">A little of the time</label>
          <input type="radio" id="little" name="option4" value="4">
          
          <label for="some">Some of the time</label>
          <input type="radio" id="some" name="option4" value="3">
          
          <label for="most">Most of the time</label>
          <input type="radio" id="most" name="option4" value="2">
          
          <label for="all">All of the time</label>
          <input type="radio" id="all" name="option4" value="1">
          </div>
          <br>
          <div>
            <label><b>Q5</b> About how often did you feel restless or fidgety?</label><br><br>
            
            <label for="none">None of the time</label>
            <input type="radio" id="none" name="option5" value="5">
            
            <label for="little">A little of the time</label>
            <input type="radio" id="little" name="option5" value="4">
            
            <label for="some">Some of the time</label>
            <input type="radio" id="some" name="option5" value="3">
            
            <label for="most">Most of the time</label>
            <input type="radio" id="most" name="option5" value="2">
            
            <label for="all">All of the time</label>
            <input type="radio" id="all" name="option5" value="1">
            </div>
            <br>
            <div>
              <label><b>Q6</b> About how often did you feel so restless you could not sit still?</label><br><br>
              
              <label for="none">None of the time</label>
              <input type="radio" id="none" name="option6" value="5">
              
              <label for="little">A little of the time</label>
              <input type="radio" id="little" name="option6" value="4">
              
              <label for="some">Some of the time</label>
              <input type="radio" id="some" name="option6" value="3">
              
              <label for="most">Most of the time</label>
              <input type="radio" id="most" name="option6" value="2">
              
              <label for="all">All of the time</label>
              <input type="radio" id="all" name="option6" value="1">
              </div>
              <br>
              <div>
                <label><b>Q7</b> About how often did you feel depressed?</label><br><br>
                
                <label for="none">None of the time</label>
                <input type="radio" id="none" name="option7" value="5">
                
                <label for="little">A little of the time</label>
                <input type="radio" id="little" name="option7" value="4">
                
                <label for="some">Some of the time</label>
                <input type="radio" id="some" name="option7" value="3">
                
                <label for="most">Most of the time</label>
                <input type="radio" id="most" name="option7" value="2">
                
                <label for="all">All of the time</label>
                <input type="radio" id="all" name="option7" value="1">
                </div>
                <br>
                <div>
                  <label><b>Q8</b> About how often did you feel that everything was an effort?</label><br><br>
                  
                  <label for="none">None of the time</label>
                  <input type="radio" id="none" name="option8" value="5">
                  
                  <label for="little">A little of the time</label>
                  <input type="radio" id="little" name="option8" value="4">
                  
                  <label for="some">Some of the time</label>
                  <input type="radio" id="some" name="option8" value="3">
                  
                  <label for="most">Most of the time</label>
                  <input type="radio" id="most" name="option8" value="2">
                  
                  <label for="all">All of the time</label>
                  <input type="radio" id="all" name="option8" value="1">
                  </div>
                  <br>
                  <div>
                    <label><b>Q9</b> About how often did you feel so sad that nothing could cheer you up?</label><br><br>
                    
                    <label for="none">None of the time</label>
                    <input type="radio" id="none" name="option9" value="5">
                    
                    <label for="little">A little of the time</label>
                    <input type="radio" id="little" name="option9" value="4">
                    
                    <label for="some">Some of the time</label>
                    <input type="radio" id="some" name="option9" value="3">
                    
                    <label for="most">Most of the time</label>
                    <input type="radio" id="most" name="option9" value="2">
                    
                    <label for="all">All of the time</label>
                    <input type="radio" id="all" name="option9" value="1">
                    </div>
                    <br>
                    <div>
                      <label><b>Q10</b> About how often did you feel worthless?</label><br><br>
                      
                      <label for="none">None of the time</label>
                      <input type="radio" id="none" name="option10" value="5">
                      
                      <label for="little">A little of the time</label>
                      <input type="radio" id="little" name="option10" value="4">
                      
                      <label for="some">Some of the time</label>
                      <input type="radio" id="some" name="option10" value="3">
                      
                      <label for="most">Most of the time</label>
                      <input type="radio" id="most" name="option10" value="2">
                      
                      <label for="all">All of the time</label>
                      <input type="radio" id="all" name="option10" value="1">
                      </div>
                      <br>
   <input type="submit" name="submit" action="submit" style="background-color:#ff3256;">  
  </form>
 </div>


</body>
</html>