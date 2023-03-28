<link rel="stylesheet" href="<?php echo ROOT?>/css/style.css">
<section class="banner blog-banner">
  <div class="banner-heading"><h1 class="main-heading">Blogs</h1>
  <p class="sub-heading">No bird can fly without opening its wings, and no one can love without exposing their hearts. Let your heart expose its love via PEN.</p></div>
</section>
<section id="blogs">
  <div class="container">
    <div class="page-heading-container">
      <h2 class="page-heading">Read Observations about Birds</h2>
      <hr class="ruler" />
    </div>
        <div class="new-blog-container">
          <button class="addNewBlogBtn"><a href="./blog/getNewBlog">Write New Blog</button>
        </div>
        <div class="blog-container">
      <?php if( count($data) > 0): ?> 
        <?php foreach($data as $key): ?>
           
      <div class="blog">
        <div class="bg">
          <!-- <div class="author-image"><img src="/images/Birdsong_logo_0.75x.png" alt="" class="a-image" /></div> -->
        <div class="information">
          <div class="top-blog">
            <h4 class="content-heading"><?php echo $key->blogName ?> </h4>
            <p class="small-gray-text"><?php echo $key->blogAuthor ?> , <?php echo $key->date ?></p>
            <p class="blog-content-text paragraph"><?php echo $key->blogContent.substr(0,100) ?> </p>
            <audio src="/sounds/<?php $key->soundName ?> "></audio>
          </div>
            
            <div class="blog-btn-cntnr">
                <button  class="blog-btn"><a href="./blog/readBlog/<?php echo $key->blogId ?>">Read More</a></button>
            </div>
        </div>
        </div>
        <?php $role=1; if ($role > 0): ?>
          <div class="actions">
            <button><a href="./blog/getEditBlog/<?php echo $key->blogId ?>"> edit</a></button>
            <button><a href="./blog/deleteBlog/<?php echo $key->blogId ?>" name="id"> delete</a></button>
          </div>
        <?php endif; ?>
        
    </div>
    
    <?php endforeach; ?>
    <?php endif; ?> 
    </div>
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