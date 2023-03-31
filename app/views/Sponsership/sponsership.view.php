<section class="banner">
    <div class="banner-heading"><h1 class="main-heading">Sponsership</h1>
    <p class="sub-heading">Birds are indicators of the environment. If they are in trouble, we know we'll soon be in trouble. Let's save them.</p></div>
</section>
<section>
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">All Sponserships</h2>
            <hr class="ruler">
        </div>
        <?php if (isset($_SESSION["user"])) : ?>
            <div class="addAdvBtnCntr"><button class="addAdvBtn"><a href="./sponsership/getNewSponsership">Add Sponsership</a> </button></div>
         <?php endif; ?> 
        <div><?php $error; ?><?php $success; ?></div>
        <div class="main-adv-container">
        <?php if(!empty($data)): ?> 
                <?php foreach($data as $key): ?>
                    
                    <div class="adv">
                        <h4 class="adv-name"><?php echo $key->advName ?></h4>
                        <a href = "<?php echo $key->websiteLink ?>" class="advFor"><?php echo $key->websiteLink ?></a>
                        <p class="date">Sponsership Till<?php echo $key->toDate ?> </p> 
                        <?php if (isset($_SESSION["user"])) : ?>
                                <?php if ( $_SESSION["user"]["role"] > 0) : ?>
                                  <div class="actions">
                                  <span class="adv-btn adv-edit-btn"><a href="./sponsership/getEditSponsership/<?php echo $key->advId ?>">Edit</a></span>
                            <span class="adv-btn adv-delete-btn"><a href="./sponsership/deleteSponsership/<?php echo $key->advId ?>">Delete</a></span>
          </div>
                                    <?php endif; ?>
                            <?php endif ?>
                    </div>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if(empty($data)): ?> 
                <div class="spn-message">Currently No Sponsorships are available!</div>
              <?php endif; ?>
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