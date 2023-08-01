<section class="banner project-banner">
    <div class="banner-heading"><h1 class="main-heading">Projects</h1>
    <p class="sub-heading">The richness we achieve comes from Nature, the source of our inspiration. Never, no, never did nature say one thing and wisdom another.</p></div>
</section>
<section id="project">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">All Projects</h2>
            <hr class="ruler">
        </div>
        <button><a href="./project/getNewProject">New Project</a></button>
        <?php if (isset($_SESSION["user"])) : ?>
            <div class="new-project-container">
                <button><a href="./project/getNewProject">New Project</a></button>
            </div>
         <?php endif; ?> 
        
        <div class="projects-container">
            <?php if (count($data)>1): ?> 
                
                     <?php foreach ($data['ongoingProjects'] as $key): ?> 
                        <div class="prj">
                            <div class="img-cntr">
                                <img src="<?php echo ROOT ?>/images/<?php echo $key->imageName ?>" alt="">
                            </div>
                            <div class="info-cntr">
                                <h3><a href="./project/projectDetails/<?php echo $key->projectId ?>"><?php echo $key->title ?></a></h3>
                        
                                <a class="prj-desc" href="<?php echo UPLOAD ?>/<? $key->description ?>" target="_blank"><?php echo $key->description ?></a>
                                <span><a href="<?php echo $key->eBirdLink ?>" class="ebird-link" target="_blank"><?php echo $key->eBirdLink ?> </a></span>
                               
                            </div>
                            <?php if (isset($_SESSION["user"])) : ?>
                                <?php if ( $_SESSION["user"]["role"] > 0) : ?>
                                    <div class="bottom">
                                    <button class="btn"><a href="./project/getEditProject/<?php echo $key->projectId ?> ">Edit</a></button>
                                    <button class="btn"><a href="./project/deleteProject/<?php echo $key->projectId ?>">Delete</a></button>
                                </div>
                                    <?php endif; ?>
                            <?php endif ?>
                            
                        </div>
                     <?php endforeach;   ?> 
            <?php endif;   ?> 
			</div>

        <div class="page-heading-container">
            <h2 class="page-heading">Prviously Done Projects</h2>
            <hr class="ruler">

        </div>
        <div class="members-table-container">
            
            <table class="members">
                <tr>
                  <th>Sr. No.</th>
                  <th>Project Name</th>
                  <th>Organisation</th>
                  <th>Duration</th>
                </tr>
                <?php if (count($data['ongoingProjects'])>0): ?>
                 
                 <?php foreach($data['ongoingProjects'] as $key): ?>

                     <tr>
                         <td>1</td>
                         <td><?php echo $key->title ?></td>
                         <td><?php echo $key->title ?></td>
                         <td><?php echo date('d/m/Y',strtotime($key->toDate)) ?></td>
                       </tr>
                  
                 <?php endforeach; ?>

             <?php endif ?>
              </table>
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