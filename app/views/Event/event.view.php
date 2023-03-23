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
        <div class="event-container">
            <?php if(!empty($data)): ?>
                <?php foreach($data['upcomingEvents'] as $key): ?>
                        <div class="events main-evnt">
                            <div class="img-cntr">
                                <?php 
                                    if ($key->imageName=="NULL") {
                                        $key->imageName = 'logo_0.5.png';
                                    } 
                                    ?>   
                               </div> 
                            <!-- <img class="evn-img" src="<?php //echo ROOT ?>/images/Birdsong_logo_0.75x.png" alt=""></div> -->
                        <div class="event-body-cntr">
                            <div class="info-cntr">
                                <h3 class="evn-name"><?php $key->eventName ?></h3>
                                <span class="event-text evn-type">Event Type: <?php echo $key->eventType ?></span>
                                <span class="event-text evn-type">Fee: <?php echo $key->eventFee ?></span>
                                <span class="date-format">Date: <?php echo $key->fromDate ?> To <?php $key->toDate ?></span>
                                <p class="event-text"><?php echo $key->eventDescription ?></p>
                            </div>
                            <?php $role=1; if ($role>0): ?>
                                <div class="event-btn-cntr">
                                    <button class="btn"><a href="/events/editEvent/<?php $key->eventId ?> ">edit</a></button>
                                    <button class="btn"><a href="/events/deleteEvent/<?php $key->eventId ?>" name="id"> delete</a></button>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                        
                        <div class="register-btn">
                            <!-- <a href="/events/registerForEvent/<?php//= //$key->eventId +"+"+ $key->eventFee ?>">Register</a> -->
                            <a href="<?php $key->googleFormLink ?>" target="_blank">Register</a>
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
                        <td class="last-col" id="lastCol"><a class="done-links" href="/events/editPreviouslyDoneEvent/<?php $key->eventId ?>">View/Edit</a> 
                        <a class="done-links" href="/events/deletePreviouslyDoneEvent/<?php $key->eventId ?>">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>     
                  </table>
            </div>
        </div>
        
        </div>
    </div>
</section>