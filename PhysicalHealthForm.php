<?php 
  if(isset($_POST['submit'])){
    header('location: ./Report.php');
  }
?>

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
    <h2 style="text-align: center; font-size:40px; color:#ff3256; margin:2%;">Physical Health Check</h2>
</div> 

<div class="container">
  <form method="post">
    <div>
    <label><b>Q1</b> How is your apetite?</label><br><br>
    
    <label for="none">Low apetite</label>
    <input type="radio" id="none" name="option1" value="5">
    
    <label for="little">Normal apetite</label>
    <input type="radio" id="little" name="option1" value="4">
    
    <label for="some">High apetite</label>
    <input type="radio" id="some" name="option1" value="3">
    </div>
    <br>
    <div>
      <label><b>Q2</b> How is your blood flow during menstruation?</label><br><br>
      
      <label for="none">Low flow</label>
      <input type="radio" id="none" name="option2" value="5">
      
      <label for="little">Medium flow</label>
      <input type="radio" id="little" name="option2" value="4">
      
      <label for="some">High flow</label>
      <input type="radio" id="some" name="option2" value="3">
      </div>
      <br>
      <div>
        <label><b>Q3</b> Is your menstrual cycle regular?</label><br><br>
        
        <label for="none">Regular</label>
        <input type="radio" id="none" name="option3" value="5">
        
        <label for="little">Irregular</label>
        <input type="radio" id="little" name="option3" value="4">
        
        </div>
        <br>
        <div>
          <label><b>Q4</b> Do you feel tired?</label><br><br>
          
          <label for="none">Most of the time</label>
          <input type="radio" id="none" name="option4" value="5">
          
          <label for="little">Sometimes</label>
          <input type="radio" id="little" name="option4" value="4">
          
          <label for="some">None of the time</label>
          <input type="radio" id="some" name="option4" value="3">
          
          </div>
          <br>
          <div>
            <label><b>Q5</b> Did your weight change?</label><br><br>
            
            <label for="none">Weight loss</label>
            <input type="radio" id="none" name="option5" value="5">
            
            <label for="little">Normal Weight</label>
            <input type="radio" id="little" name="option5" value="4">
            
            <label for="some">Weight Gain</label>
            <input type="radio" id="some" name="option5" value="3">
            
            </div>
            <br>
            <div>
              <label><b>Q6</b> Do you experience mood swings?</label><br><br>
              
              <label for="none">None of the time</label>
              <input type="radio" id="none" name="option6" value="5">
              
              <label for="little">Some of the time</label>
              <input type="radio" id="little" name="option6" value="4">
              
              <label for="most">Most of the time</label>
              <input type="radio" id="most" name="option6" value="2">
              
              </div>
              <br>
              <div>
                <label><b>Q7</b> Did your sleep schedule change?</label><br><br>
                
                <label for="none">Increase in sleeping hours</label>
                <input type="radio" id="none" name="option7" value="5">
                
                <label for="little">Normal sleeping hours</label>
                <input type="radio" id="little" name="option7" value="4">
                
                <label for="some">Decrease in sleeping hours</label>
                <input type="radio" id="some" name="option7" value="3">
                
                </div>
                <br>
                <div>
                  <label><b>Q8</b> Do you experience body ache?</label><br><br>
                  
                  <label for="none">None of the time</label>
                  <input type="radio" id="none" name="option8" value="5">
                  
                  <label for="some">Some of the time</label>
                  <input type="radio" id="some" name="option8" value="3">
                  
                  <label for="all">All of the time</label>
                  <input type="radio" id="all" name="option8" value="1">
                  </div>
                  <br>
                      
   <input type="submit" name="submit"  style="background-color:#ff3256;">  
  </form>
 </div>


</body>
</html>