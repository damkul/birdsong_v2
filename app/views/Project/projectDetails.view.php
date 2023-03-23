<section class="banner project-banner">
    <div class="banner-heading"><h1 class="main-heading">Projects</h1>
    <p class="sub-heading">The richness we achieve comes from Nature, the source of our inspiration. Never, no, never did nature say one thing and wisdom another.</p></div>
</section>
<section>
    <?php if(!empty($data[0])): ?>
        <div class="eventDetails">
            <h2><?php echo $data[0]->title ?></h2>
            <hr>
            <p class=sub-heading>eBirdLink: <a class="text" href="<?php echo $data[0]->eBirdLink ?>"><?php echo $data[0]->eBirdLink ?> </a></p>
            <p class="date-heading">From: <?php echo $data[0]->fromDate ?> To: <?php echo $data[0]->toDate ?></p>
            <span class="header">Description:</span>
            <p class="info"><?php echo $data[0]->description ?></p>
        </div>
    <?php endif;?>    
</section>
    