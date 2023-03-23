<section class="banner">
    <div class="banner-heading"><h1 class="main-heading">Sponsership</h1>
    <p class="sub-heading">Birds are indicators of the environment. If they are in trouble, we know we'll soon be in trouble. Let's save them.</p></div>
</section>
<section>
    <div class="container sponsership">
        <h3>Update Sponsership</h3>
        <hr>
        <div class="sponsership-form-cntr">
                    <form action="../postEditSponsership" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="advId" value="<?php echo $data[0]->advId ?> ">
                    <div class="input">
                        <label for="adv-name">Sponserer Name</label>
                        <input type="text" name="advName" id="adv-name" class="form-input" value="<?php echo $data[0]->advName ?> ">
                    </div>
                    <div class="date-cntr">
                        <div class="input">
                            <label for="adv-date">From Date</label>
                            <input type="date" name="fromDate" id="adv-date" class="form-input">
                        </div>
                        <div class="input">
                            <label for="adv-date">To Date</label>
                            <input type="date" name="toDate" id="adv-date" class="form-input">
                        </div>
                    </div>
                    <div class="input">
                        <label for="adv-name">Website Link</label>
                        <input type="text" name="websiteLink" class="form-input" value="<?php echo $data[0]->websiteLink ?> ">
                    </div>
                    <div class="input">
                        <label for="adv-date">Image File</label>
                        <input type="file" name="image" id="advFile" class="form-input">
                    </div>
                <div class="event-btn-container">
                    <button class="event-btn">Save Advertisement</button>
                </div>
            </form>
    </div>
    </div>
</section>
