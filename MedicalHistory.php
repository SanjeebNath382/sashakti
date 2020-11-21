
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
        input[type=number], select, textarea {
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
            <h2 style="text-align: center; font-size:40px; color:#ff3256; margin:2%;">My Medical History</h2>
        </div> 

        <div class="container">
            <form method="post">
                <label for="lname">Name</label>
                <input type="text" id="pnumber" name="u_ph" placeholder="Full Name">
                <br>
                <label for="lname">Age</label>
                <input type="number" id="pnumber" name="u_ph" placeholder="Enter your Age">
                <br>
                <label for="lname">Weight (in Kg)</label>
                <input type="number" id="pnumber" name="u_ph" placeholder="Enter your weight">
                <br>
                <label for="lname">Height (in cm)</label>
                <input type="number" id="pnumber" name="u_ph" placeholder="Enter your height">
                <br>
                <label for="lname">Any history of chronic diseases</label>
                <input type="text" id="pnumber" name="u_ph" placeholder="Enter your history of chronic diseases (if any)">

                <br>
                <label for="lname">Any history of major medical procedure</label>
                <input type="text" id="pnumber" name="u_ph" placeholder="Enter your history of major medical procedures (if any)">

                <br>
                <label for="lname">Any history of hormonal diseases</label>
                <input type="text" id="pnumber" name="u_ph" placeholder="Example- hyperthyroidism, PCOS, etc.">

                <br>
                <label for="lname">Any comments</label>
                <input type="text" id="pnumber" name="u_ph" placeholder="Enter your comments">

                <br>
                <input type="submit" name="submit" action="submit">
            </form>
        </div>

</body>
</html>