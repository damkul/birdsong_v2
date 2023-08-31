<?php
$isLoggedIn = isset($_SESSION['user']);
?>
<section class="banner event-banner">
    <div class="banner-heading"><h1 class="main-heading">Events</h1>
    <p class="sub-heading">Earth and sky, woods and fields, lakes and rivers are excellent schoolmasters and teach us more than we ever learn from books
        .There is no Wi-Fi in the mountains, but you will find no better connection than this.</p></div>
</section>
<section id="Events">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">All Events</h2>
            <hr class="ruler">
        </div>
        <div class="new-blog-btn">
        <button class="addNewBlogBtn"><a href="./event/getNewEvent">Add New Event</a></button>
        <?php if (isset($_SESSION["user"])) : ?>
                <button class="addNewBlogBtn"><a href="./event/getNewEvent">Add New Event</a></button>
                <?php endif; ?>
              </div>
            <div>
        </div>
        <div class="event-container">
            <?php if(!empty($data)): ?>
                <?php foreach($data['upcomingEvents'] as $key): ?>
                        <div class="events main-evnt">
                           <!-- <div class="img-cntr">
                                 <?php 
                                    if ($key->imageName=="NULL") {
                                        $key->imageName = 'logo_0.5.png';
                                    } 
                                    ?>  
                               </div> -->
                            <!-- <img class="evn-img" src="<?php //echo ROOT ?>/images/Birdsong_logo_0.75x.png" alt=""></div> -->
                        <div class="event-body-cntr">
                            <div class="info-cntr">
                                <h3 class="evn-name"><?php $key->eventName ?></h3>
                                <span class="event-text evn-type">Event Type: <?php echo $key->eventType ?></span>
                                <span class="event-text evn-type">Fee: <?php echo $key->eventFee ?></span>
                                <span class="date-format">Date: <?php echo date('d/m/Y',strtotime($key->fromDate)) ?> To <?php echo date('d/m/Y',strtotime($key->toDate)) ?></span>
                                <a href="<?php echo UPLOAD ?>/<?php echo $key->eventDescription ?>" target="_blank">Get Event Details</a>
                            </div>

         
                            
                            <?php if (isset($_SESSION["user"])) : ?>
                                <?php if ( $_SESSION["user"]["role"] > 0) : ?>
                                    <div class="event-btn-cntr">
                                        <button class="btn"><a href="./event/getEditEvent/<?php echo $key->eventId ?> ">edit</a></button>
                                        <button class="btn"><a href="./event/deleteEvent/<?php echo $key->eventId ?>" name="id"> delete</a></button>
                                     </div>
                                    <?php endif; ?>
                            <?php endif ?>
                        </div>
                        
                        <div class="register-btn">
                            <!-- <a href="/events/registerForEvent/<?php //= //$key->eventId +"+"+ $key->eventFee ?>">Register</a> -->
                            <a href="<?php echo UPLOAD?>/<?php echo $key->eventDescription?>" class="event-text" target="_blank">Get Details</a>
                        </div>
                    </div>
                    
                    <?php endforeach; ?> 
                    <?php endif; ?> 
                </div>

        <div class="previously-done-events">
            <div class="page-heading-container">
                <h2 class="page-heading">Previously Done Events</h2>
                <hr class="ruler">
            </div>
            <div class="members-table-container">
                <table class="members">
                    <tr>
                      <th>Sr. No.</th>
                      <th>Event Name</th>
                      <th>Date</th>
                      <th>Mange Event Activity</th>
                    </tr>
                    <?php if(!empty($data['previouslyDoneEvents'])): ?>
                    <?php foreach($data['previouslyDoneEvents'] as $key): ?>
                    <tr> 
                        <td><?php echo "1"?></td>                   
                        <td><?php echo $key->eventName ?></td>
                        <td><?php echo $key->toDate ?> </td>
                    
                <?php if ($isLoggedIn): ?>
                        <td class="last-col" id="lastCol"><a class="done-links" href="./event/getEditEvent/<?php echo $key->eventId ?>">View/Edit</a> 
                        <a class="done-links" href="./event/deleteEvent/<?php echo $key->eventId ?>">Delete</a></td>
                        <?php else: ?>
                <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>     
                  </table>
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
});



</script>