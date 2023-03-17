<section class="banner obs-banner">
    <div class="banner-heading"><h1 class="main-heading">Observatios</h1>
    <p class="sub-heading">  A bird doesn't sing becasuse it has an answer, It sings because it has a Song. Birds teach us greate life lessons. All you have to is listen to their song.</p></div>
</section>
<section id="observations">
    <div class="container">
        <div class="obs-container">
            <div class="obs-list">
                <div class="obs-details-container">
                    <div class="obs-user-stat-details">
                        <div class="left-section">
                            <div class="top-section">
                                <div class="obs-name">
                                    <h2><%= observation.birdName %></h2>
                                    <p>scientific name</p>
                                </div>
                                <% if (role >0) { %>
                                    <div class="edit-obs">
                                        <a class="link" href="/observations/editObservation/<%= observation.obsId %>">Edit</a>
                                        <a class="link del" href="/observations/delete/<%= observation.obsId %>">Delete</a>
                                    </div>
                                <% } %>
                                
                            </div>
                            <div class="bottom-section">
                                <h4>My Stats</h4>
                                <hr>
                                <div class="count-section">
                                    <div class="count-box per-user-bird-image-count">
                                        <span><i class="fa-solid fa-camera"></i></span>
                                        <span class="stat-text"><%= observation.imageCount %></span>
                                    </div>
                                    <div class="count-box per-user-sound-count">
                                        <span><i class="fa-solid fa-play"></i></span>
                                        <span class="stat-text"><%= observation.soundCount %></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-section">
                            <div class="main-image-container">
                                <img src="<?php echo ROOT ?>/images/<%= observation.images[0] %> " alt="" id="main-image">
                            </div>
                        </div>
                    </div>
                    <div class="obs-details-image-container">
                        <% if(observation.images.length > 0){ %>
                            <% observation.images.forEach(function(image){ %>
                                <div class="small-obs-img">
                                    <img src="<?php echo ROOT ?>/images/<%= image%>" alt="" onclick="switchImage('<%= image %>')">
                                </div>
                         <% }) %>
                        <%} %> 
                    </div>
                </div>
                <div class="obs-details-description">
                    <h3>Description</h3>
                    <p><%= observation.description %></p>
                 </div>
                 <div class="obs-details-sound-container">
                    <% if(observation.sounds.length > 0){ %>
                        <% observation.sounds.forEach(function(sound){ %>
                            <div class="small-obs-sound">
                                <audio src="/sounds/<%=sound  %> " controls></audio>
                            </div>
                     <% }) %>
                    <%} %> 
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var mainImage = document.querySelector('#main-image');
    function switchImage(imageName){
        var imagePath = '/images/'+imageName;
        mainImage.setAttribute('src',imagePath);
    }
</script>