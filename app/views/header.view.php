<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="logo"><a href="<?php echo PATH ?>/home"><img src="<?php echo ROOT ?>/images/Birdsongsmall-removebg-preview.png" alt="logo for birdsong"></a></div>
                <div class="info">
                    <span><span class="heading-top"> birdsong.sangli@gmail.com</span> <span class="heading-top"> 980384400</span> </span>
                </div>
            </div>
        </div>
        <div class="nav-cntr">
            <div class="topnav" id="myTopnav">
                <a href="<?php echo PATH ?>/home">Home</a>
                <a href="<?php echo PATH ?>/aboutUs">About Us</a>
                <a href="<?php echo PATH ?>/membership">Membership</a>
                <div class="dropdown">
                    <button class="dropbtn">Events +
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="<?php echo PATH ?>/event">Events</a>
                        <a href="<?php echo PATH ?>/project">Projects</a>
                    </div>
                </div>
                <a href="<?php echo PATH ?>/blog">Blog</a>
                <a href="<?php echo PATH ?>/observation">Audio & Video Gallary</a>
                <a href="<?php echo PATH ?>/sponsership">Sponsorship</a>
                <a href="<?php echo PATH ?>/dashboard">Dashboard</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
            <div class="login">
                <label>Damini Kulkarni</label>
                <button>Login</button>
            </div>
        </div>
        
    </header>
</body>
</html>
<script>
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>