<section class="banner project-banner">
  <div class="banner-heading"><h1 class="main-heading">Projects</h1>
  <p class="sub-heading">The richness we achieve comes from Nature, the source of our inspiration. Never, no, never did nature say one thing and wisdom another.</p></div>
</section>
<section>
    <div class="container">
        <h2>New Project</h2>
    <hr class="new-blog-hr">
    <div class="new-blog-form-container"> 
      <% if (success.length>0) { %>
        <div class="success">
          <%= success %>
        </div>
      <% } %>
      <% if (error.length>0) { %>
        <div class="error">
          <%= error %>
        </div>
      <% } %>
        <form action="postNewProject" method="post" enctype="multipart/form-data">
        
              <div class="modal-input-container">
                <label for="">Project Name</label>
                <input class="form-input newBlogName" name="title" required></input>
              </div>
              <div id="dates">
                <div class="modal-input-container ">
                  <label for="">From Date</label>
                  <input type="date" class="form-input" name="fromDate"">
                </div>
                <div class="modal-input-container ">
                  <label for="">To Date</label>
                  <input type="date" class="form-input" name="toDate">
                </div>
              </div>
             <div class="modal-input-container ">
                  <label for="">eBird Link</label>
                  <input type="text" class="form-input newBlogAuthor" name="eBirdLink">
              </div>
             <div class="modal-input-container ">
                  <label for="">Description</label>
                  <textarea name="description" id="" cols="30" rows="20" class="form-input" required></textarea>
              </div>
              <div class="modal-input-container new-blog-file-upload">
                <input type="file" name="image" class="form-input">
              </div>
              <div class="input-container">
                <button type="submit" class="form-input formBtn">Save</button>
            </div>
            </div>
            </form>
    </div>
        
    </div>
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
