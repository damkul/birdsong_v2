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
        <% if (role >= 0) { %>
            <div class="new-blog-btn">
                <button class="addNewBlogBtn"><a href="/events/newEvent">Add New Event</a></button>
              </div>
            <div>
        <% } %> 
        </div>
        <div class="event-container">
                    <div class="events main-evnt">
                        <div class="img-cntr">
                            <% 
                                if (event.imageName=="NULL") {
                                    event.imageName = 'logo_0.5.png';
                                } 
                                %>   
                            <img class="evn-img" src="<?php echo ROOT ?>/images/Birdsong_logo_0.75x.png" alt=""></div>
                        <div class="event-body-cntr">
                            <div class="info-cntr">
                                <h3 class="evn-name"><%= event.eventName %></h3>
                                <span class="event-text evn-type">Event Type: <%= event.eventType %></span>
                                <span class="event-text evn-type">Fee: <%= event.eventFee %></span>
                                <span class="date-format">Date: <%= fromDate %> To <%= toDate %></span>
                                <p class="event-text"><%= event.eventDescription.substring(0,100) %></p>
                            </div>
                            <% if (role>0) { %>
                                <div class="event-btn-cntr">
                                    <button class="btn"><a href="/events/editEvent/<%= event.eventId %> ">edit</a></button>
                                    <button class="btn"><a href="/events/deleteEvent/<%= event.eventId %>" name="id"> delete</a></button>
                                </div>
                            <% } %>
                            
                        </div>
                        
                        <div class="register-btn">
                            <!-- <a href="/events/registerForEvent/<%//= //event.eventId +"+"+ event.eventFee %>">Register</a> -->
                            <a href="<%= event.googleFormLink %>" target="_blank">Register</a>
                        </div>
                    </div>
                    
                    <% }) %> 
                    <% } %> 
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
                            <tr>
                                <td><%= srNo= srNo+1 %></td>
                                <td><%= element.eventName %></td>
                                <td><%= toDate %> </td>
                                <td class="last-col" id="lastCol"><a class="done-links" href="/events/editPreviouslyDoneEvent/<%= element.eventId %>">View/Edit</a> 
                                    <a class="done-links" href="/events/deletePreviouslyDoneEvent/<%= element.eventId %>">Delete</a></td>
                              </tr>
                        <% }) %>

                    <% } %> 
                    
                  </table>
            </div>
        </div>
        
        </div>
    </div>
</section>
