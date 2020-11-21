<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../CSS/home-style.css">
    <link rel="stylesheet" type="text/css" href="symptom_selector/selector.css?v=1">
    <link rel="stylesheet" type="text/css" href="symptom_selector/fontawesome/assets/css/font-awesome.min.css" />
    <script src="libs/jquery-1.12.2.min.js"></script>
    <script src="libs/json2.js"></script><!-- json for ie7 -->
    <script src="libs/jquery.imagemapster.min.js?v=1.1"></script>
    <script src="libs/typeahead.bundle.js"></script>
    
    <script src="symptom_selector/selector.js?v=3.3"></script>

	<?php 

	// session_start(); // this causes some issues with certain servers, try this if it's working with this line or not.
		
	/**
	* For Live API service use the Live API endpoints:
	* Instead of the Sandbox Authservice endpoint "https://sandbox-authservice.priaid.ch/login" you should use the Live Authservice endpoint "https://authservice.priaid.ch/login" 
	* Instead of the Sandbox Healthservice endpoint "https://sandbox-healthservice.priaid.ch" you should use the Live Authservice endpoint "https://healthservice.priaid.ch" 
    */
	
	if ( !isset( $_SESSION['userToken']) || !isset( $_SESSION['tokenExpireTime']) || time() >= $_SESSION['tokenExpireTime'] )
	{
		require 'token_generator.php';
		$tokenGenerator = new TokenGenerator("a6NXo_GMAIL_COM_AUT","o2KEb94YiWw83Dyq5","https://authservice.priaid.ch/login");
		$token = $tokenGenerator->loadToken();
		$_SESSION['userToken'] = $token->{'Token'};
		$_SESSION['tokenExpireTime'] = time() + $token->{'ValidThrough'};
	}

	$token = $_SESSION['userToken'];
	?>

	<script type="text/javascript">

		var userToken = <?php echo "'".$token."'" ?>;
		
        $(document).ready(function () {
            $("#symptomSelector").symptomSelector(
            {
                mode: "diagnosis",
                webservice: "https://healthservice.priaid.ch",
                language: "en-gb",
                specUrl: "sample_specialisation_page",
                accessToken: userToken
            });
        });
    </script>

	
</head>
<header id="header">
  <div id="brand">
     <img id="header-img" src="../assets/icon.png" href="home.php"/>
  </div>
  <nav id="nav-bar">
    <a class="nav-link" href="../home.php">Home</a>
    <a class="nav-link" href="../FindGroup.php">Events</a>
    <a class="nav-link" href="../ConsultWithDoctor.php">Consult</a>
    <a class="nav-link" href="../Blog.php">Blog</a>
    <a class="nav-link" href="../profile.php">Profile</a>
  </nav>
</header>
<body style="margin-top:150px;">
<h1 style="margin-left:42%;color:#ff3256;font-family: Brush Script MT, Brush Script Std, cursive;font-size:20px"><b>Physical Health Checker</b></h1><br>
    <table class="container-table">
        <tr>
            <td valign="middle" colspan="2" class="td-header box-white bordered-box width50"><h4 class="header" id="selectSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">1</span></h4></td>
            <td valign="middle" class="td-header bordered-box box-white width25"><h4 class="header" id="selectedSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">2</span></h4></td>
            <td valign="middle" class="td-header bordered-box box-white width25"><h4 class="header" id="possibleDiseasesTitle"><span class="badge pull-left badge-primary visible-lg margin5R">3</span></h4></td>
        </tr>
        <tr>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomSelector"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomList"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="selectedSymptomList"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="diagnosisList"></div></td>
        </tr>
    </table>
    <div>
        <a target="_blank" href="http://apimedic.com"><img class="logo" alt="ApiMedic by priaid" src="symptom_selector/images/logo.jpg" /></a>
        <span ><a class="priaid-powered" target="_blank" href="http://apimedic.com"> powered by  </a> </span>
    </div>
</body>
</html>
