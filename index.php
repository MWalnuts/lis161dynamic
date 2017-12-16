<?php include 'database.php'; 


    // Secure homepage
    if (!isset($_SESSION['username'])) {
      $_SESSION['warning'] = "You need to log-in to access this page";
      //redirect user
      header("location: login.php");
    }
    ?>

<!doctype html>

<html>
<head>
    <title>Jordan Kangleon's Gaming Rig</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Dumpy.css">
    <script type="text/javascript" src="menu.js"></script>
</head>
<body class="home">

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="index.php">Home</a>
    <a href="keyboard.php">Keyboard</a>
    <a href="mouse.php">Mouse</a>
    <a href="headset.php">Headset</a>
    <a href="other.php">Other Hardwares</a>
    <a href="search.php">Catalog</a>
  </div>
</div>

<div class="dropdown2">
  <button onclick="myFunction2()" class="dropbtn2">My Account</button>
  <div id="myDropdown2" class="dropdown-content2">
    <a href="index2.php?">View Profile</a>
    <a href="server.php?logout=1">Logout</a>
  </div>
</div>



      <img src="img/razer.jpg" class="image">
      <h1><span>My Desktop PC<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Gaming Rig</span></h1>
<button class="btn keyboard" onclick='location.href="Keyboard.php"'>Keyboard</button>
<button class="btn mouse" onclick='location.href="Mouse.php"'>Mouse</button>
<button class="btn headset" onclick='location.href="Headset.php"'>Headset</button>
<button class="btn other" onclick='location.href="Other.php"'>Other Hardwares</button>
<br>
<br>
<div class="container">
<div id="starter" class="jumbotron">
<h2> Introduction </h2>
                <div class="row">
                    <p>
                        Hi everyone! My name is Jordan and I wanted to showcase my gaming setup not because of bragging rights, but to inform my audience how my patience throughout selecting various factors, specifications, and hardwares got me where I am right now. No, my family's not rich. Yes, they wanted to buy a cheaper one. No, I wanted a better one. Yes, I patiently waited for a bigger budget. No, I wasn't tempted to give up. Yes, I got what I wanted. Now I hope that you enjoy browsing through my rig as much as I did creating this webpage. Cheers!<br><sub>All photos were taken from <em>google.com</em> and <em>razerzone.com</em> and do not visually represent my setup.</sub>
                    </p>
                 </div>
                </div>
            </div>


</div> 






</body>
</html>