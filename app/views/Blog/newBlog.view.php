<section class="banner blog-banner">
  <div class="banner-heading"><h1 class="main-heading">Blogs</h1>
  <p class="sub-heading">No bird can fly without opening its wings, and no one can love without exposing their hearts. Let your heart expose its love via PEN.</p></div>
</section>
<section>
  <div class="container">
    <h2>Write New Blog</h2>
    <hr class="new-blog-hr">
    <div class="new-blog-form-container">
      
      <form action="postNewBlog" method="post" enctype="multipart/form-data">
        <div class="modal-input-container">
          <label for="">Blog Name</label>
          <input class="form-input newBlogName" name="blogName" required></input>
        </div>
        <div class="new-form-details">
          <div class="modal-input-container ">
            <label for="">Author</label>
            <input type="text" class="form-input newBlogAuthor" name="blogAuthor" required>
        </div>
        <div class="modal-input-container ">
          <label for="">Date</label>
          <input type="Date" class="form-input newBlogDate" name="blogDate" required>
      </div>
        </div>
        <div class="modal-input-container ">
          <label for="">Upload File For Blog Content</label>
          <input type="file" name="content-file" class="form-input" id="blogContent" required>
      </div>
       
        <div class="modal-input-container new-blog-file-upload">
          <label for="">Upload Images and Sounds</label>
          <input type="file" name="file[]" class="form-input" id="image" multiple>
        </div>
        <!-- <div class="modal-input-container new-blog-file-upload">
          <label for="">Upload Sounds</label>
          <input type="file" name="sounds" class="form-input " multiple>
        </div> -->
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