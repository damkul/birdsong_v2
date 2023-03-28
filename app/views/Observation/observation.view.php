<section class="banner obs-banner">
    <div class="banner-heading"><h1 class="main-heading">Observatios</h1>
    <p class="sub-heading">  A bird doesn't sing becasuse it has an answer, It sings because it has a Song. Birds teach us greate life lessons. All you have to is listen to their song.</p></div>
</section>
<section id="observations">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">Search Birds</h2>
            <hr class="ruler">
        </div>
        <div class="obs-container">
            <div class="search-container">
                <div class="search-input">
                    <form action="/observations/observationDetails" method="post" enctype="multipart/form-data">
                    <input type="search" id="search-text" list="birdNames" name="q" autocomplete="off">
                    <datalist id="birdNames">
                    <?php if(!empty($data)): ?> 
                        <?php foreach($data["birds"] as $keys): ?> 
                                 <option value="<?php echo $keys->birdName ?>" class="bird-name" name="birdName"><?php echo $keys->birdName ?></option> 
                                <?php endforeach ?> 
                            <?php endif; ?> 
                    </datalist>
                    <button type="submit">search</button>
                </form>
                </div>
                <div class="add-obs">
                        <button id="add-obs-btn"><a href="./observation/getNewObservation" >Add Observation</a></button>
                    </div>
            </div>
            <div class="species">
                <div class="specie">
                    <div class="page-heading-container">
                        <h3>Birds</h3>
                        <hr class="ruler">
                    </div>
                    <div class="obs-list">
                        <?php if(!empty($data)): ?>
                            <?php for ($i=0; $i < (count($data) -1) ; $i++): ?> 
                                <div class="obs">
                                    <div class="obs-img">
                                        <img src="<?php echo ROOT ?>/images/<?php $data[$i]->imageName ?> " alt"">
                                    </div>
                                    <div class"obs-info">
                                        <a href="./observation/readObservation/<?php echo $data[$i]->obsid ?>"><h4><?php echo $data[$i]->birdName ?></h4></a>
                                        <p><?php echo $data[$i]->description ?></p>
                                    </div>
                                        <audio id="track">
                                        <source src="<?php echo ROOT ?>/images/<?php $data[$i]->soundName ?>" type="audio/mpeg" />
                                        </audio>

                                        <div id="player-container">
                                        <div id="play-pause" class="play">Play</div>
                                        </div>
                                </div>
                                <hr>
                            <?php endfor; ?> 
                        <?php endif; ?>     
                    </div>
                </div>
                <div class="specie">
                    <div class="page-heading-container">
                        <h3>Mammals</h3>
                        <hr class="ruler">
                    </div>
                    <div class="obs">
                        <div class="obs-img">
                            <img src="<?php echo ROOT ?>/images/mammals.jpg" alt="">
                        </div>
                        <div class="obs-info">
                            <h4>Tiger</h4>
                            <p>Tiger</p>
                        </div>
                        <div class="obs-sound">
                            <!-- <audio src="/sounds/" controls></audio> -->
                        </div>
                    </div>
                    <div class="message upcoimgMessage">
                        <p>This Category will be available soon.</p>
                    </div>
                </div>
                <div class="specie">
                    <div class="page-heading-container">
                        <h3>Reptiles, Amphibians and Fish</h3>
                        <hr class="ruler">
                    </div>
                    <div class="obs">
                        <div class="obs-img">
                            <img src="<?php echo ROOT ?>/images/reptile.jpg" alt="">
                        </div>
                        <div class="obs-info">
                            <h4>King Cobra</h4>
                            <p>King Cobra</p>
                        </div>
                        <div class="obs-sound">
                            <!-- <audio src="/sounds/" controls></audio> -->
                        </div>
                    </div>
                    <div class="message upcoimgMessage">
                        <p>This Category will be available soon.</p>
                    </div>
                </div>
                <div class="specie">
                    <div class="page-heading-container">
                        <h3>Butterflies and Insects</h3>
                        <hr class="ruler">
                    </div>
                    <div class="obs">
                        <div class="obs-img">
                            <img src="<?php echo ROOT ?>/images/butterfly.jpg" alt="">
                        </div>
                        <div class="obs-info">
                            <h4>Butterfly</h4>
                            <p>Buterfly</p>
                        </div>
                        <div class="obs-sound">
                            <!-- <audio src="/sounds/" controls></audio> -->
                        </div>
                    </div>
                    <div class="message upcoimgMessage">
                        <p>This Category will be available soon.</p>
                    </div>
                </div>
                <div class="specie">
                    <div class="page-heading-container">
                        <h3>Plants</h3>
                        <hr class="ruler">
                    </div>
                    <div class="obs">
                        <div class="obs-img">
                            <img src="<?php echo ROOT ?>/images/Dew drops.jpg " alt="">
                        </div>
                        <div class="obs-info">
                          <h4>Dew Drops</h4>
                            <p>Dew Drops on plant.</p>
                        </div>
                        <div class="obs-sound">
                            <!-- <audio src="/sounds/" controls></audio> -->
                        </div>
                    </div>
                    <div class="message upcoimgMessage">
                        <p>This Category will be available soon.</p>
                    </div>
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

var track = document.getElementById('track');

var controlBtn = document.getElementById('play-pause');

function playPause() {
    if (track.paused) {
        track.play();
        //controlBtn.textContent = "Pause";
        controlBtn.className = "pause";
    } else { 
        track.pause();
         //controlBtn.textContent = "Play";
        controlBtn.className = "play";
    }
}

controlBtn.addEventListener("click", playPause);
track.addEventListener("ended", function() {
  controlBtn.className = "play";
});
</script>