<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/home-style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
  display:flex;
  justify-content:center;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #d3f2f8;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
   border:2px solid #ff3256;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
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

<div class="header">
  <h2 style="color:#ff3256">Sashakti Blogs</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 style="color:#ff3256">My Anxiety Story</h2>
      <h5>Annie Pruthi, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">No Image</div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2 style="color:#ff3256">My body size doesn't defines me!</h2>
      <h5>Shriya Tanwar, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">No Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
	<div class="card">
      <h2 style="color:#ff3256">The Pink Scam?!</h2>
      <h5>Archana Mittal, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">No Image</div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">My Fitness Mantra</div><br>
      <div class="fakeimg">Stereotypes Are Gone Days?</div><br>
      <div class="fakeimg">Depression</div>
    </div>
    <div class="card">
      <h3>Follow Us</h3>
      <p>Ig - <a href="">@sashakti_india</a></p>
	  <p>Tw - <a href="">@sashaktiindia</a></p>
    </div>
  </div>
</div>

</body>
</html>