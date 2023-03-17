<div class="form-container">
    <div class="sideDiv">
        <img src="<?php echo ROOT ?>/images/saketh-upadhya-ItNSbMe6GzM-unsplash.jpg" alt="">
        <div class="login-text">
            <p class="login-heading">Register</p>
        </div>
    </div>
    <div class="form">
       
        <form action="/auth/register" method="post" enctype="application/x-www-form-urlencoded">
            <div class="input-container">
                <label for="">Name</label>
                <input type="Text" class="form-input" name="name">
            </div>
            <div class="input-container">
                <label for="">Mobile</label>
                <input type="Text" class="form-input" name="mobile">
            </div>
            <div class="input-container">
                <label for="">Date Of Birth</label>
                <input type="date" class="form-input" name="dateOfBirth">
            </div>
            <div class="input-container">
                <label for="">Email</label>
                <input type="email" class="form-input" name="email">
            </div>
            <div class="input-container">
                <label for="">Password</label>
                <input type="password" class="form-input" name="password" minlength="8">
            </div>
            <button class="login-btn">Register</button>
            <a href="/login" class="register-text">Already have account? Login Here!</a>
        </form>
    </div>
</div>