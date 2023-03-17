<link href="/css/style.css" rel="stylesheet" type="text/css">
<div class="form-container">
    <div class="sideDiv">
        <img src="<?php echo ROOT ?>/images/saketh-upadhya-ItNSbMe6GzM-unsplash.jpg" alt="">
        <div class="login-text">
            <p class="login-heading">LOGIN</p>
        </div>
    </div>
    <div class="form">
        <form action="/auth/login" method="post" enctype="application/x-www-form-urlencoded">
            <div class="input-container">
                <label for="">Email</label>
                <input type="text" class="form-input" name="email">
            </div>
            <div class="input-container">
                <label for="">Password</label>
                <input type="password" class="form-input" name="password">
            </div>
            <button class="login-btn">LOGIN</button>
            <a href="/login/new" class="register-text">Don't have account? Register Here!</a>
        </form>
    </div>
</div>