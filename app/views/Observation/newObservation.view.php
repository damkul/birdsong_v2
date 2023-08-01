<section class="banner obs-banner">
    <div class="banner-heading"><h1 class="main-heading">Observatios</h1>
    <p class="sub-heading">  A bird doesn't sing becasuse it has an answer, It sings because it has a Song. Birds teach us greate life lessons. All you have to is listen to their song.</p></div>
</section>
<section>
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">Add Observation</h2>
            <hr class="ruler">
        </div>
        <div class="obs-form-container">
            <form action="postNewObservation" method="post" enctype="multipart/form-data">
        
                <div class="input-container">
                    <label for="">Bird Name</label>
                    <!-- <input type="text" class="form-input" name="birdName" required> -->
                    <select name="birdName" id="birdNameSelect" class="form-input" onchange="setName()" required>
                    <option>--select Bird Name--</option>
                        <?php for($i=0;$i<count($data['birds']);$i++) {
                            echo("<option id='birdName'  value = '" . $data['birds'][$i]->birdName . "'>" . $data['birds'][$i]->birdName . "</option>");
                        } ?>
                    </select>
                </div>
                <div class="addtional-info">
                    <div class="input-container">
                        <label for="">Scientific Name</label>
                        <input type="text" class="form-input" name="scientificName" id="sName" required disabled>
                    </div>
                    <div class="input-container">
                        <label for="">Marathi Name</label>
                        <input type="text" class="form-input" name="marathiName">
                    </div>
                    <div class="input-container">
                        <label for="">Date</label>
                        <input type="Date" class="form-input" name="dateOfObs" required>
                    </div>
                </div>
                <div class="input-container">
                    <label for="">Description</label>
                    <textarea class="form-input" rows="10" cols="20" name="description" required></textarea>
                </div>
                <div class="input-container">
                    <label for="">Add Images</label>
                    <input type="file[]" class="form-input" name="image" id="image" multiple>
                </div>
                <!-- <div class="input-container">
                    <label for="">Add Sounds</label>
                    <input type="file" class="form-input" name="sounds" multiple>
                </div> -->
                <div class="input-container">
                        <label for="">YouTube Link</label>
                        <input type="text" class="form-input" name="youtubeLink">
                    </div>
                <div class="input-container">
                    <button class="form-input" type="submit">Add</button>
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
    var scientificNames =[];
function sortNames(){
    var result = <?php echo json_encode($data); ?>;
    var names ={};
    result["birds"].forEach(element => {
    var names ={};
     names['birdName'] = element.birdName;
     names['sName'] = element.scientificName;
     scientificNames.push(names);
});
}

 function setName(){
    
    var select = document.getElementById("birdNameSelect");
    var sName = document.getElementById("sName");
    sortNames()
    console.log(scientificNames);
    var birdName = select.value;
    for (let index = 0; index < scientificNames.length; index++) {
        if (scientificNames[index].birdName === birdName) {
            sName.value = scientificNames[index].sName;
        }
    }
}

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