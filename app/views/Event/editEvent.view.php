<section class="banner event-banner">
    <div class="banner-heading"><h1 class="main-heading">Events</h1>
    <p class="sub-heading">Earth and sky, woods and fields, lakes and rivers are excellent schoolmasters and teach us more than we ever learn from books
        .There is no Wi-Fi in the mountains, but you will find no better connection than this.</p></div>
</section>
<div class="event-heading-container">
    <h2>Update Event</h2>
    <hr>
</div>
    <div class="new-event-form-container">
        
        <form action="../postEditEvent" method="post" enctype="multipart/form-data">
        <input type="hidden" name="eventId" value="<?php echo $data[0]->eventId ?>">
            <div class="modal-input-container">
                <label for="">Event Name</label>
                <input type="text" class="form-input newEventName" name="eventName" value="<?php echo $data[0]->eventName ?> ">
            </div>
            <div class="modal-input-container">
                <label for="">Event Registration Fee</label>
                <input type="text" class="form-input newEventName" name="eventFee" value="<?php echo $data[0]->eventFee ?> ">
            </div>
            <div class="date-container">
            <select type="text" class="form-input newEventType" name="eventType" value="<?php echo $data[0]->eventType ?> ">
                        <option>Seminar</option> 
                        <option>Tour</option> 
                        <option>Nature Camp</option> 
                        <option>Event</option> 
                    </select>
                <!-- <div class="modal-input-container">
                    <label for="">Event Type</label>
                    <input type="text" class="form-input newEventType" name="eventType" value="<?php echo $data[0]->eventType ?> ">
                </div> -->
                <div class="modal-input-container">
                    <label for="">From Date</label>
                    <input type="date" class="form-input newEventFromDate" name="fromDate" id="fromDate">
                </div>
                <div class="modal-input-container">
                    <label for="">To Date</label>
                    <input type="date" class="form-input newEventToDate" name="toDate" id="toDate">
                </div>
            </div>
            <div class="modal-input-container">
                <label for="">Event Description</label>
                <textarea name="eventDescription" id="" cols="30" rows="10" class="form-input"><?php echo $data[0]->eventDescription ?></textarea>
            </div>
            <div class="modal-input-container">
                <label>Event Instructions</label>
                <textarea name="eventInstruction" id="" cols="30" rows="10" class="form-input"><?php echo $data[0]->eventInstruction ?></textarea>
            </div>
            <div class="modal-input-container">
                <label>Add Images</label>
                <input type="file" name="" id="" class="images form-input">
            </div>
            <div class="modal-input-container event-img-cntr">
                <img src="#" alt="" class="editEventImage" name="image">
            </div>
            <div class="modal-input-container">
                <label for="">Event Registration form Link</label>
                <input type="text" class="form-input" name="googleFormLink" value="<?php echo $data[0]->googleFormLink ?>" required>
            </div>
            <div class="modal-input-container">
                <button class="form-input new-evnt-Btn">Save Event</button>
            </div>
            
        </form>
    </div>
    <script>

        function formatDate(inputDate){
                            var date = new Date(inputDate);
                            mnth = ("0" + (date.getMonth() + 1)).slice(-2),
                            day = ("0" + date.getDate()).slice(-2);
                            return [ date.getFullYear(),mnth,day].join("-")
                            
                        }
        document.getElementById('fromDate').defaultValue = formatDate('<?php echo $data[0]->fromDate ?>')
        document.getElementById('toDate').defaultValue = formatDate('<?php echo $data[0]->toDate ?>')

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
