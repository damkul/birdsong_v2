<link href="/css/style.css" rel="stylesheet" type="text/css" />
<div class="contactInfo">
    <div class="info">
        <span><span>birdsong.sangli@gmail.com</span> <span>Contact: 980384400</span> </span>
    </div>
</div>

<div class="wrapper">
    <div class="sidebar">
        <!-- profile image -->
        <div class="profile">
            <!-- <a href="/auth/register">Register</a> -->
            <a class="authBtn" href="/auth/login" id="login">Login</a>
            <a class="authBtn" href="/auth/logout" id = "logout">Logout</a>
            <!-- <h3>Anita Datar</h3> -->
        </div>
        <!-- menu items -->
        <ul id="nav">
            <li><a href="/" class="nav-link"><span class="icon"><i class="fa-solid fa-home"></i></span><span>Home</span></a></li>
            <li><a href="/aboutUs" class="nav-link"><span class="icon"><i class="fa-solid fa-address-card"></i></span><span>About Us</span></a></li>
            <li><a href="/memberships" class="nav-link"><span class="icon"><i class="fa-solid fa-users"></i></span><span>Membership</span></a></li>
            <li><a href="/events" class="nav-link"><span class="icon"><i class="fa-solid fa-calendar-days"></i></span><span>Events</span></a></li>
            <li><a href="/projects" class="nav-link"><span class="icon"><i class="fa-solid fa-diagram-project"></i></span><span>Projects</span></a></li>
            <li><a href="/blogs" class="nav-link"><span class="icon"><i class="fa-brands fa-blogger-b"></i></span><span>Blogs</span></a></li>
            <li><a href="/observations" class="nav-link"><span class="icon"><i class="fa-solid fa-headphones"></i></span><span>Audio & Pictues Gallary</span></a></li>
            <li><a href="/sponsership" class="nav-link"><span class="icon"><i class="fa-solid fa-hand-holding-dollar"></i></span><span>Sposerships</span></a></li>
            <!-- <li><a href="/dashboard" class="nav-link"><span class="icon"><i class="fa-solid fa-hand-holding-dollar"></i></span><span>Dashboard</span></a></li> -->
        </ul>
        
    </div>
        <div class="section">
            <div class="top-navbar">
                <div class="hamburger">
                    <a href="#"><i class="fa-solid fa-bars"></i></a>
                </div>
            </div>
            <div class="logo">
                <img src="<?php echo ROOT ?>/images/Birdsong_logo_0.5x_edited-removebg-preview.png" alt="">
            </div>
        </div>
</div>
<script>
    let type = document.cookie;
    var logout = document.querySelector('#logout')
    var login = document.querySelector('#login')
    logout.style.display = 'none'
    if (type!='undefined' && type.split('=')[1] >= 0) {
        login.style.display = 'none'
        logout.style.display = 'block'
    }
    else{
        logout.style.display = 'none'
        login.style.display = 'block'
    }
    var hamburger = document.querySelector('.hamburger');
    hamburger.addEventListener('click',function(){
        document.querySelector('body').classList.toggle('active');
    });
</script>