<section class="banner event-banner">
    <div class="banner-heading"><h1 class="main-heading">Events</h1>
    <p class="sub-heading">Earth and sky, woods and fields, lakes and rivers are excellent schoolmasters and teach us more than we ever learn from books
        .There is no Wi-Fi in the mountains, but you will find no better connection than this.</p></div>
</section>
<section>
    <div class="container">
        <div class="pre-event-container">
              <div class="event-info">
                
                        <h3 class="event-title"><%= event.eventName %></h3>
                        <hr>
                        <span class="event-type"><%= event.eventType %> </span>
                        <%  
                            
                                var fromDate=formatDate(event.fromDate);
                                var toDate=formatDate(event.toDate);
                                function formatDate(date){
                                    var date = new Date(date);
                                    mnth = ("0" + (date.getMonth() + 1)).slice(-2),
                                    day = ("0" + date.getDate()).slice(-2);
                                    return [day,mnth,date.getFullYear()].join("-")
                                
                                } 
                            %> 
                        <span class="date">From: <%= fromDate %>  To: <%= toDate %></span>
                        <p class="description"><%= event.eventDescription %></p>
                    
                </div>
                <div class="add-images">
                    <form action="/events/updatePreviousEvent/<%= event.eventId %>" method="post">
                        <input type="file" name="eventImages" class="form-input" multiple>
                        <button type="submit" class="upload-button">Upload</button>
                    </form>
                  </div>
                  <h3 class="event-title">Gallary</h3>
                        <hr>
                  <div class="image-gallary">
                    
                    <% if (event.images.length>0) { %>
                        
                        <% event.images.forEach(element => { %>
                            
                            <div class="picture">
                                <img src="<?php echo ROOT ?>/images/<%= element %>" alt="">
                            </div>
                        <% }) %>

                    <% } %>
                  </div>
                
              
        </div>
    </div>
</section>