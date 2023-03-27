<section class="banner obs-banner">
    <div class="banner-heading"><h1 class="main-heading">Observatios</h1>
    <p class="sub-heading">  A bird doesn't sing becasuse it has an answer, It sings because it has a Song. Birds teach us greate life lessons. All you have to is listen to their song.</p></div>
</section>
<section id="observations">
    <div class="container">
        <div class="obs-container">
            <div class="obs-list">
                <div class="obs-details-container">
                <div class="obs-user-stat-details">
                        <div class="left-section">
                            <div class="top-section">
                                <div class="obs-name">
                                    <h2><?php echo observation.birdName ?></h2>
                                    <p>scientific name</p>
                                </div>
                                <?php if ($role >0): ?>
                                    <div class="edit-obs">
                                        <a class="link" href="/observations/editObservation/<?php echo observation.obsId ?>">Edit</a>
                                        <a class="link del" href="/observations/delete/<?php echo observation.obsId ?>">Delete</a>
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                            <div class="bottom-section">
                                <h4>My Stats</h4>
                                <hr>
                                <div class="count-section">
                                    <div class="count-box per-user-bird-image-count">
                                        <span><i class="fa-solid fa-camera"></i></span>
                                        <span class="stat-text"><?php echo observation.imageCount ?></span>
                                    </div>
                                    <div class="count-box per-user-sound-count">
                                        <span><i class="fa-solid fa-play"></i></span>
                                        <span class="stat-text"><?php echo observation.soundCount ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-section">
                            <div class="main-image-container">
                                <img src="<?php echo ROOT ?>/images/<?php echo observation.images[0] ?> " alt="" id="main-image">
                            </div>
                        </div>
                    </div>
                    <div class="obs-details-image-container">
                        <?php if(observation.images.length > 0): ?>
                            <?php foreach($observation.images as $key): ?>
                                <div class="small-obs-img">
                                    <img src="<?php echo ROOT ?>/images/<?php echo $key?>" alt="" onclick="switchImage('<?php echo $key ?>')">
                                </div>
                         <?php endforeach; ?>
                        <?php endif; ?> 
                    </div>
                </div>
                <div class="obs-details-description">
                    <h3>Description</h3>
                    <p><?php echo observation.description ?></p>
                 </div>
                 <div class="obs-details-sound-container">
                    <?php if($observation.sounds.length > 0): ?>
                        <?php foreach($observation.sounds as $key): ?>
                            <div class="small-obs-sound">
                                <audio src="/sounds/<?php echo $key   ?> " controls></audio>
                            </div>
                     <?php endforeach; ?>
                    <?php endif; ?> 
                </div>
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

  var mainImage = document.querySelector('#main-image');
    function switchImage(imageName){
        var imagePath = '/images/'+imageName;
        mainImage.setAttribute('src',imagePath);
    }
});



</script>