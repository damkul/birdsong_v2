
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROOT?>/css/style.css">
    <title>Document</title>
</head>
<body>

<section class="banner">
    <div class="banner-heading"><h1 class="main-heading">Discover Birding</h1>
    <p class="sub-heading">Nature is not a place to visit, it is home.In every walk with nature one receives far more than he seeks.Nature always wears the colors of the spirit.</p></div>
</section>
<section id="soundOfBirds">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">Lets Explore the SOUND of Birds</h2>
            <hr class="ruler">
        </div>  
        <!-- Observation and sponsorship start -->

        <div class="adv-container">
            <div class="soundContainer">
                <?php if(!empty($data[1])) : ?> 
                    <?php foreach($data[1] as $key): ?>
                        <?php 
                        if ($key->imageName=='NULL') {
                            $key->imageName = 'logo_0.5.png';
                        } 
                        ?>   
                        <div class="sounds">
                               <div class="imgCnt">
                                    <img src="<?php echo ROOT ?>/images/<?php echo $key->imageName ?>" alt="">
                               </div>
                               <div class="info">
                                <h3 class="nameOfBird content-heading"><?php echo $key->birdName ?></h3>
                                <h4 class="small-gray-text"><?php echo $key->scientificName ?></h4>
                                <h4 class="small-gray-text"><?php echo $key->marathiName ?></h4>
                               </div>
                        </div>
    
                     <?php endforeach; ?>
                <?php endif; ?> 
    
                <div class="big-button one">
                   <a href="./observation">Explore More About Sounds Of Birds</a>
                </div>
            </div>
            <div class="adv-cntr">
                <h3>Thank you for your valuable contribution</h3>
                <?php if(!empty($data[4])) : ?> 
                    <?php foreach($data[4] as $key) : ?>
                         
                        <div class="adv">
                            <img src="<?php echo ROOT ?>/images/<?php echo $key->imageName ?> " alt="">
                        </div>
                     <?php endforeach; ?>
                <?php endif; ?> 
                <div class="big-button">
                    <a href="./sponsership">Help Us To Grow Our Work</a>
                 </div>
            </div>
        </div>

        <!-- Observation and sponsorship end -->
    </div>
 </section>
 <!-- Event section start -->
 <section id="upcomingEvents">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">Join Us at our UPCOMING Events</h2>
            <hr class="ruler">
        </div>
        <div class="upcomingEventsContainer">
            <?php if(!empty($data[0])): ?> 
                <?php foreach($data[0] as $key): ?>
                       
                    <div class="events">
                       
                        <div class="info-cntr"><h3><?php echo $key-> eventName ?> </h3>
                        <p><?php echo $key-> eventDescription ?> </p></div>
                    </div>

                 <?php endforeach; ?>
            <?php endif; ?> 
            
        </div>
        <div class="big-button">
            <a href="./event">Explore More About Our Upcoming Events</a>
        </div>
       
    </div>
</section>
 <!-- Event section end -->

 <!-- blog section start -->
 <section id="blogs">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">Read about Birding</h2>
            <hr class="ruler">
        </div>
        <div class="blogsContainer">
            <?php if(!empty($data[2])): ?> 
                <?php foreach($data[2] as $key): ?>
                   
                    <div class="blogs">
                        <div class="imgDiv">
                            <img src="<?php echo ROOT ?>/images/<?php echo $key->imageName ?>" alt="">
                        </div> 
                        <div class="info-cntr">
                            <h3><?php echo $key->blogName ?></h3>
                            <p class="blog-content-text"><?php echo $key->blogContent ?> </p>
                        </div>
                    </div>

                 <?php endforeach; ?>
            <?php endif; ?> 
        </div>
        <div class="big-button">
            <a href="./blog">Read What Others are Writing</a>
        </div>
    </div>
    
</section>
 <!-- blog section end -->

<!-- project seion start -->

<section id="ongoingProjects">
    <div class="container">
        <div class="page-heading-container ongoingProjectText">
            <h2 class="page-heading">Our Ongoing Projects</h2>
            <hr class="ruler">
        </div>
        <div class="ongoingProjectsContainer">
            <div class="projectDiv">
                <?php if(!empty($data[3])): ?> 
                    <?php foreach($data[3] as $key): ?>
                        <?php 
                        if ($key->imageName=='NULL') {
                            $key->imageName = 'logo_0.5.png';
                        } 
                        ?> 
                        <div class="ongoingProject">
                            <div class="card">
                                <div class="img">
                                    <img src="/images/<?php $key->imageName ?> " alt="">
                                </div>
                                <div class="text">
                                    <h3><?php echo $key->title ?> </h3>
                                <p><?php echo $key->description.substr(0,80) ?> </p>
                                </div>
                            </div>
                        </div>
    
                     <?php endforeach; ?>
                <?php endif; ?> 
            </div>
            <div class="big-button">
                <a href="./project">Know More About Upcomig Projects</a>
            </div>
        </div>
    </div>
</section>

<!-- project seion end -->

</body>
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
</html>
