<section class="banner event-banner">
    <div class="banner-heading"><h1 class="main-heading">Events</h1>
    <p class="sub-heading">Earth and sky, woods and fields, lakes and rivers are excellent schoolmasters and teach us more than we ever learn from books
        .There is no Wi-Fi in the mountains, but you will find no better connection than this.</p></div>
</section>
<div class="event-heading-container">
    <h2>Update Event</h2>
    <hr>
</div>
    <div class="new-event-form-container">
        
        <form action="postEditEvent" method="post" enctype="multipart/form-data">
            <div class="modal-input-container">
                <label for="">Event Name</label>
                <input type="text" class="form-input newEventName" name="eventName" value="<%= event.eventName %> ">
            </div>
            <div class="modal-input-container">
                <label for="">Event Registration Fee</label>
                <input type="text" class="form-input newEventName" name="eventFee" value="<%= event.eventFee %> ">
            </div>
            <div class="date-container">
                <div class="modal-input-container">
                    <label for="">Event Type</label>
                    <input type="text" class="form-input newEventType" name="eventType" value="<%= event.eventType %> ">
                </div>
                <div class="modal-input-container">
                    <label for="">From Date</label>
                    <input type="date" class="form-input newEventFromDate" name="fromDate" id="fromDate">
                </div>
                <div class="modal-input-container">
                    <label for="">To Date</label>
                    <input type="date" class="form-input newEventToDate" name="toDate" id="toDate">
                </div>
            </div>
            <div class="modal-input-container">
                <label for="">Event Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-input"><%= event.eventDescription %></textarea>
            </div>
            <div class="modal-input-container">
                <label>Event Instructions</label>
                <textarea name="instructions" id="" cols="30" rows="10" class="form-input"><%= event.eventInstruction %></textarea>
            </div>
            <div class="modal-input-container">
                <label>Add Images</label>
                <input type="file" name="" id="" class="images form-input">
            </div>
            <div class="modal-input-container event-img-cntr">
                <img src="#" alt="" class="editEventImage" name="image">
            </div>
            <div class="modal-input-container">
                <label for="">Event Registration form Link</label>
                <input type="text" class="form-input" name="googleFormLink" value="<%= event.googleFormLink %>" required>
            </div>
            <div class="modal-input-container">
                <button class="form-input new-evnt-Btn">Save Event</button>
            </div>
            
        </form>
    </div>
    <script>

        function formatDate(inputDate){
                            var date = new Date(inputDate);
                            mnth = ("0" + (date.getMonth() + 1)).slice(-2),
                            day = ("0" + date.getDate()).slice(-2);
                            return [ date.getFullYear(),mnth,day].join("-")
                            
                        }
        document.getElementById('fromDate').defaultValue = formatDate('<%= event.fromDate %>')
        document.getElementById('toDate').defaultValue = formatDate('<%= event.toDate %>')
    </script>