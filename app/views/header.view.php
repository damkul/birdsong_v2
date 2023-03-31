<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php if (isset($_SESSION["user"])) : ?>
        <label id="chk_session" hidden>1</label>   
    <?php endif; ?>
 
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
                <?php if (isset($_SESSION["user"])) : ?>
                   <?php if ( $_SESSION["user"]["role"] > 0) : ?>
                    <a href="<?php echo PATH ?>/dashboard">Dashboard</a>
                    <?php endif; ?>
               <?php endif ?>
               
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
            <div class="login">
                <?php if (isset($_SESSION["user"])) : ?>
                    <label for=""><?php echo $_SESSION["user"]["name"] ?></label>
               <?php endif ?>
                <a href="<?php echo PATH ?>/user/login" id="redirectToLogout"><button id="login-btn">Login</button></a>
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

var chk_session = document.querySelector("#chk_session");
var login_btn = document.querySelector('#login-btn');
var login_link = document.querySelector('#redirectToLogout');
if (chk_session) {
    login_btn.innerText = "Logout";
}
if (login_btn.innerText == "Logout") {
    var path = <?php echo json_encode(PATH); ?>;
    login_link.href = path + "/user/logout" 
}
</script>