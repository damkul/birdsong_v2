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
            <% if (success.length>0) { %>
                <div class="success">
                  <%= success %>
                </div>
              <% } %>
              <% if (error.length>0) { %>
                <div class="error">
                  <%= error %>
                </div>
              <% } %>
            <form action="../postNewObservation" method="post" enctype="multipart/form-data">
        
                <div class="input-container">
                    <label for="">Bird Name</label>
                    <input type="text" class="form-input" name="birdName" required>
                </div>
                <div class="addtional-info">
                    <div class="input-container">
                        <label for="">Scientific Name</label>
                        <input type="text" class="form-input" name="scientificName" required>
                    </div>
                    <div class="input-container">
                        <label for="">Marathi Name</label>
                        <input type="text" class="form-input" name="marathiName">
                    </div>
                    <div class="input-container">
                        <label for="">Date</label>
                        <input type="Date" class="form-input" name="date" required>
                    </div>
                </div>
                <div class="input-container">
                    <label for="">Description</label>
                    <textarea class="form-input" rows="10" cols="20" name="description" required></textarea>
                </div>
                <div class="input-container">
                    <label for="">Add Images</label>
                    <input type="file" class="form-input" name="image" id="image" multiple>
                </div>
                <!-- <div class="input-container">
                    <label for="">Add Sounds</label>
                    <input type="file" class="form-input" name="sounds" multiple>
                </div> -->
                <div class="input-container">
                    <button class="form-input" type="submit">Add</button>
                </div>
            </form>
            
        </div>
    </div>
</section>