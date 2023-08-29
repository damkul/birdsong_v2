<section class="banner mem-banner">
    <div class="banner-heading"><h1 class="main-heading">Membership</h1>
    <p class="sub-heading">Our mission is to create a World where we can live in harmony with nature. Adopt the ace of nature: her secret is Patience!</p></div>
</section>
<section id="membership-packages">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">Explore Our Membership Packages</h2>
            <hr class="ruler">
        </div>
        <div class="membersip-benefits">
            <p>Kindly click on below link to know about membership advantages as well as rules.</p>
            <a href="<?php echo PATH?>/BIRDSONG appeal for membership.pdf" target="_blank">Membership Details</a>
        </div>
        <div class="membership-container">
            <div class="membership">
                <div class="heading-container">
                    <h4 class="content-heading">General</h4>
                    <hr class="content-ruler">
                </div>
                <div class="content-container">
                    <ul class="content-list">
                        <li><b>Annual Fee:</b> Rs. 50</li>
                        <li><b>Admission Fee:</b> Rs. 600/-</li>
                        <li><b>Age Criterion:</b> Age must be above 20</li>
                        <li><b>Tenure:</b> Annual 1 st January to 31 December.</li>
                    </ul>
                </div>
                <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_MC4dfVUCQx2TMq" async> </script> </form>
                <!-- <div class="buyNow"><a class="button-next" href="https://docs.google.com/forms/d/1GK-H8bXEGTZRlwk61MhutgKDs2sccd61eNbdngTu9mQ/edit?usp=drivesdk" target="_blank">Buy Now</a></div> -->
            </div>
            <div class="membership">
                <div class="heading-container">
                    <h4 class="content-heading">Students(Age below 20)</h4>
                    <hr class="content-ruler">
                </div>
                <div class="content-container">
                    <ul class="content-list">
                        <li><b>Annual Fee:</b> Rs. 50</li>
                        <li><b>Admission Fee:</b> Rs. 300/-</li>
                        <li><b>Age Criterion:</b> Age must be below 20</li>
                        <li><b>Tenure:</b> Annual 1 st January to 31 December.</li>
                    </ul>
                </div>
                <div class="buyNow"><a class="button-next" href="https://docs.google.com/forms/d/1GK-H8bXEGTZRlwk61MhutgKDs2sccd61eNbdngTu9mQ/edit?usp=drivesdk">Buy Now</a></div>
            </div>
            <div class="membership">
                <div class="heading-container">
                    <h4 class="content-heading">Family</h4>
                    <hr class="content-ruler">
                </div>
                <div class="content-container">
                    <ul class="content-list">
                        <li><b>Annual Fee:</b> Rs. 50</li>
                        <li><b>Admission Fee:</b> Rs. 1200/-</li>
                        <li><b>Members:</b> Any 4 Members</li>
                        <li><b>Tenure:</b> Annual 1 st January to 31 December.</li>
                    </ul>
                </div>
                <div class="buyNow"><a class="button-next" href="https://docs.google.com/forms/d/1GK-H8bXEGTZRlwk61MhutgKDs2sccd61eNbdngTu9mQ/edit?usp=drivesdk">Buy Now</a></div>
            </div>
            <div class="membership">
                <div class="heading-container">
                    <h4 class="content-heading">School Student's Nature Club</h4>
                    <hr class="content-ruler">
                </div>
                <div class="content-container">
                    <ul class="content-list">
                        <li><b>Annual Fee:</b> Rs. 50</li>
                        <li><b>Admission Fee:</b> Rs. 100/-</li>
                        <li><b>Tenure:</b> Annual 1 st January to 31 December.</li>
                        <li>School students club admission fees are excluded.</li>
                    </ul>
                </div>
                <div class="buyNow"><a class="button-next" href="https://docs.google.com/forms/d/1GK-H8bXEGTZRlwk61MhutgKDs2sccd61eNbdngTu9mQ/edit?usp=drivesdk">Buy Now</a></div>
            </div>
        </div>
    </div>
</section>
<section id="existing-members">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">Meet Our Existing Members</h2>
            <hr class="ruler">
        </div>
        <div class="members-table-container">
            <table class="members">
                <tr>
                  
                  <th>MemId</th>
                  <th>Timestamp</th>
                  <th>Type Of Membership</th>
                  <th>Name</th>
                  <th>Names Of Your Family Or Group</th>
                  <th>Date Of Birth</th>
                  <th>Postal Address</th>
                  <th>E-mail Id</th>
                  <th>What's App No.</th>
                  <th>Amount</th>
                </tr>
                <?php if (!empty($data)): ?>
                    
                    <?php foreach($data as $key): ?>
                        <tr>
                            
                            <td><?php echo $key->memId ?></td>
                            <td><?php echo $key->Timestamp ?></td>
                            <td><?php echo $key->TypeOfMembership ?></td>
                            <td><?php echo $key->Name ?></td>
                            <td><?php echo $key->NamesOfYourFamilyOrGroup ?></td>
                            <td><?php echo $key->DateOfBirth ?></td>
                            <td><?php echo $key->PostalAddress ?></td>
                            <td><?php echo $key->mailId ?></td>
                            <td><?php echo $key->WhatsAppNo?></td>
                            <td><?php echo $key->Amount ?></td>
                          </tr>
                    <?php endforeach; ?>
                <?php endif ?>
              </table>
        </div>
    </div>

    <!-- Registration Form Popup -->
    <div class="popup-background">
        <div class="popup">
            <div class="pop-up-header">
                <div class="popup-name"><h4>Membership</h4></div>
                <div class="close-popup"><span class="close">X</span></div>
            </div>
            <div class="popup-body">
                <div class="form-container">
                    <form action="/memberships/new">
                        <div class="input-container">
                            <label for="">Name</label>
                            <input type="text" class="form-input" name="memName" required>
                        </div>
                        <div class="membership-details">
                            <div class="input-container">
                                <label for="">Membership Type</label>
                                <select class="form-input memType" name="memType" required>
                                    <option value="General">General</option>
                                    <option value="Student">Students(Age below 20)</option>
                                    <option value="Family">Family</option>
                                    <option value="Nature">Natures Club</option>
                                </select>
                            </div>
                            <div class="input-container">
                                <label for="">Total Payable Amount</label>
                                <input type="text" class="form-input memFee" name="amount" disabled>
                            </div>
                        </div>
                        <div class="personal-details-container">
                            <div class="input-container">
                                <label for="">Date Of Birth</label>
                                <input type="Date" class="form-input" name="memDOB" required>
                            </div>
                            <div class="input-container">
                                <label for="">Gender</label>
                                <select class="form-input" name="memGender" required>
                                    <option value="male">Male</option>
                                    <option value="male">Female</option>
                                    <option value="male">Other</option>
                                </select>
                            </div>
                            <div class="input-container">
                                <label for="">Occupation</label>
                                <input type="text" class="form-input" name="memOccupation" required>
                            </div>
                        </div>
                        <div class="input-container">
                            <label for="">Postal Address</label>
                            <input type="text" class="form-input" name="memAddress" required>
                        </div>
                        <div class="contact-details">
                            <div class="input-container memEmail">
                                <label for="">Email</label>
                                <input type="text" class="form-input" name="memEmail" required>
                            </div>
                            <div class="input-container">
                                <label for="">Mobile</label>
                                <input type="text" class="form-input" name="memMobile" required>
                            </div>
                        </div>
                        <div class="input-container">
                            <label for="">Interests and Hobbies</label>
                            <input type="text" class="form-input" nmae="memInterests">
                        </div>
                        <div class="input-container">
                            <button class="form-input memBtn">Register</button>
                        </div>
                    </form>
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
    var popUpBg = document.querySelector('.popup-background');
    var closeBtn = document.querySelector('.close-popup');
    var memType = document.querySelector('.memType')
    var amount = document.querySelector('.memFee')

    function addMember(membershipType){
        console.log('hello from '+' '+membershipType)
        memType.text=membershipType;
        memType.value=membershipType;
        setAmoutAccordingToType(membershipType);
        popUpBg.classList.add('popup-bg-active')
    }
    closeBtn.addEventListener('click',function(){
        popUpBg.classList.remove('.popup-bg-active')
        location.reload()
    })

    function setAmoutAccordingToType(type){

        switch (type) {
            case 'General':
                amount.value = 650;
                break;
            case 'Student':
            amount.value = 350;
                break;
            case 'Family':
            amount.value = 1250;
                break;
            case 'Nature':
            amount.value = 150;
                break;

            default:
                break;
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