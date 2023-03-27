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
                    <input type="search" id="search-text" list="birdNames" name="q">
                    <datalist id="birdNames">
                    <?php if(!empty($data)): ?> 
                        <?php foreach($data as $key): ?> 
                                <option value="<?php $key->birdName ?>" class="bird-name" name="birdName"></option>
                                <?php endforeach ?> 
                            <?php endif; ?> 
                    </datalist>
                    <button type="submit">search</button>
                </form>
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
                            <?php foreach($data as $key): ?> 
                                <div class="obs">
                                    <div class="obs-img">
                                        <img src="<?php echo ROOT ?>/images/<?php $key->imageName ?> " alt"">
                                    </div>
                                    <div class"obs-info">
                                        <a href"/observations/observationDetails/<?php $key->obsid ?>"><h4><?php echo $key->birdName ?></h4></a>
                                        <p><?php echo $key->description ?></p>
                                    </div>
                                    <div class"obs-sound">
                                        <?php echo $key->soundName?>
                                         <audio id="my-audio" src="<?php echo ROOT ?>/images/<?php echo $key->soundName ?> "></audio>
                                         <button id="play-button" onclick="playMusic()">Play</button>
                                    </div>
                                </div>
                                <hr>
                            <?php endforeach ?> 
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
<script>
var myAudio = document.getElementById('my-audio');
var playButton = document.getElementById('play-button');

playButton.addEventListener("click", function(){
    myAudio.play();
});
</script>