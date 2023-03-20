<section class="banner">
    <div class="banner-heading"><h1 class="main-heading">Sponsership</h1>
    <p class="sub-heading">Birds are indicators of the environment. If they are in trouble, we know we'll soon be in trouble. Let's save them.</p></div>
</section>
<section>
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">All Sponserships</h2>
            <hr class="ruler">
        </div>
        <?php $role =1; if ($role>=0): ?>
            <div class="addAdvBtnCntr"><button class="addAdvBtn"><a href="/sponsership/newSponsership">Add Sponsership</a> </button></div>
        <?php endif;  ?>
        
        <div><?php $error; ?><?php $success; ?></div>
        <div class="main-adv-container">
        <?php if(!empty($data)): ?> 
                <?php foreach($data as $key): ?>
                    
                    <div class="adv">
                        <h4 class="adv-name"><?php echo $key->advName ?></h4>
                        <a href = "<?php echo $key->websiteLink ?>" class="advFor"><?php echo $key->websiteLink ?></a>
                        <p class="date">Sponsership Till<?php echo $key->toDate ?> </p> 
                        <?php $role =1; if ($role>0): ?>
                            <span class="adv-btn adv-edit-btn"><a href="/sponsership/updateSponsership/<?php echo $key->advId ?>">Edit</a></span>
                            <span class="adv-btn adv-delete-btn"><a href="/sponsership/deleteSponsership/<?php echo $key->advId ?>">Delete</a></span>
                        <?php endif; ?>
                        
                    </div>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if(empty($data)): ?> 
                <div class="spn-message">Currently No Sponsorships are available!</div>
              <?php endif; ?>
        </div>
    </div>
</section>