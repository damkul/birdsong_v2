<section class="banner event-banner">
    <div class="banner-heading"><h1 class="main-heading">Events</h1>
    <p class="sub-heading">Earth and sky, woods and fields, lakes and rivers are excellent schoolmasters and teach us more than we ever learn from books
        .There is no Wi-Fi in the mountains, but you will find no better connection than this.</p></div>
</section>
<section>
    <?php if(!empty($data[0])): ?>
        <div class="eventDetails">
            <h2><?php echo $data[0]->eventName ?></h2>
            <hr>
            <p class=sub-heading><span class="text">Event Type: <?php echo $data[0]->eventType ?></span> <span class="text">Event Fee: <?php echo $data[0]->eventFee ?></span></p>
            <p class="date-heading">From: <?php echo $data[0]->fromDate ?> To: <?php echo $data[0]->toDate ?></p>
            <span class="header">Description:</span>
            <p class="info"><?php echo $data[0]->eventDescription ?></p>
            <span class="header">Instructions:</span> 
            <p class="info"><?php echo $data[0]->eventInstruction ?></p> 
        </div>
    <?php endif;?>    
</section>
    