<section class="banner event-banner">
  <div class="banner-heading"><h1 class="main-heading">Events</h1>
  <p class="sub-heading">Earth and sky, woods and fields, lakes and rivers are excellent schoolmasters and teach us more than we ever learn from books
      .There is no Wi-Fi in the mountains, but you will find no better connection than this.</p></div>
</section>
<section>
  <div class="container">
    <h2>Event Registration</h2>
    <hr class="new-blog-hr">
    <% if (!isRegistered) { %>

      <div class="new-event-form-container">
        <form action="../postRegister" method="post" enctype="application/x-www-form-urlencoded">
          <input type="hidden" name="eventId" value="<%= eventId %> ">
          <div class="modal-input-container">
            <label for="">Name</label>
            <input class="form-input pname" name="name" required></input>
          </div>
          <div class="new-form-details">
            <div class="modal-input-container ">
              <label for="">Age</label>
              <input type="text" class="form-input age" name="age" required>
          </div>
          <div class="modal-input-container ">
            <label for="">Gender</label>
            <select name="gender" id="" class="form-input" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
        </div>
          </div>
          <div class="new-form-details">
            <div class="modal-input-container ">
              <label for="">Email</label>
              <input type="email" class="form-input email" name="email" required>
          </div>
          <div class="modal-input-container ">
            <label for="">Mobile</label>
            <input type="text" name="mobile" id="" class="form-input" required>
        </div>
          </div>
          <div class="modal-input-container ">
              <label for="">Adress</label>
              <textarea  name="address" id="" class="form-input"></textarea>
          </div>
          <div class="modal-input-container ">
              <label for="">Total Payable Amount</label>
              <input  name="address" id="" class="form-input eventAmount" value="<%= eventAmount %> " disabled></input>
          </div>
          <div class="input-container">
            <button type="submit" class="form-input formBtn" id="buy-now">Register</button>
        </div>
        </div>
        </form>
        
    </div>

    <% } %> 
    
  </div>
  <div id="container"></div>

  
</section>
<section class="footer">
    <div class="footer-container">
        <div class="copyright">
            <div class="ft-logo">
                <img src="<?php echo ROOT ?>/images/Birdsong_yellow_small-removebg-preview.png" alt="">
            </div>
            <div class="copyright-content">
                <h5>Website developed and managed by<br>Exec Software Solutions </h5>
            </div>
            <div class="social-media">
                <h4>Folllow Us On</h4>
                <div class="icon-set">
                    <div class="ft-icons"><a href="https://www.facebook.com/groups/137624049637147" target="_blank"><i class="fa-brands fa-facebook"></i></a></div>
                    <div class="ft-icons"><a href="https://www.youtube.com/@birdsongsangli9857" target="_blank"><i class="fa-brands fa-youtube"></i></a></div>
                    <div class="ft-icons"><a href="https://goo.gl/maps/15Y4HzUQ2AjAWXcC9" target="_blank"><i class="fa-brands fa-google"></i></a></div>
                </div>
            </div>
            <!-- <div class="bird">
                <img src="<?php echo ROOT ?>/images/footerImage.png" alt="footer image">
            </div> -->
        </div>
        <div class="navigation">
            <div class="navigation-links">
                <ul>
                    <li><a href="/" class="links">Home</a></li>
                    <li><a href="/aboutUs" class="links">About Us</a></li>
                    <li><a href="/memberships" class="links">Membership</a></li>
                    <li><a href="/events" class="links">Events</a></li>
                    <li><a href="/projects" class="links">Projects</a></li>
                    <li><a href="/blogs" class="links">Blogs</a></li>
                    <li><a href="/observations" class="links">Audio & Picture Gallary</a></li>
                    <li><a href="/sponsership" class="links">Sponserships</a></li>
                </ul>
            </div>
        </div>
        <div class="contactUs">
            <h3>Contact Us</h3>
            <form action="/footer/send" method="post" enctype="multipart/form-data" id="contact-form">
            <div class="input">
                <label for="">Name</label>
                <input type="text" name="name" required>
            </div>
            <div class="input">
                <label for="">Email</label>
                <input type="text" name="email" required>
            </div>
            <div class="input">
                <label for="">Contact</label>
                <input type="text" name="contact" required>
            </div>
            <div class="input">
                <label for="">Message</label>
                <input type="text" name="message" required>
            </div>
            <div class="input">
                <button type="submit" value="submit">Contact Us</button>
            </div>
        </form>
        </div>
    </div>
   
</section>

<script>
    //get the form by its id
const form = document.getElementById("contact-form"); 


const sendMail = (mail) => {
  //1.
  fetch("/footer/send", {
    method: "post", //2.
    body: mail, //3.

  }).then((response) => {
    return response.json();
  });
};
//1.
const formEvent = form.addEventListener("submit", (event) => {
  event.preventDefault();

  //2.
  let mail = new FormData(form);

  //3.
  sendMail(mail);
});



</script>
