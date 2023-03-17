<section class="banner event-banner">
    <div class="banner-heading"><h1 class="main-heading">Events</h1>
    <p class="sub-heading">Earth and sky, woods and fields, lakes and rivers are excellent schoolmasters and teach us more than we ever learn from books
        .There is no Wi-Fi in the mountains, but you will find no better connection than this.</p></div>
</section>
<div class="event-heading-container">
    <h2>New Event</h2>
    <hr>
</div>
    <div class="new-event-form-container">
        <form action="../postNewEvent" method="post" enctype="multipart/form-data">
           
            <div class="modal-input-container">
                <label for="">Event Name</label>
                <input type="text" class="form-input newEventName" name="eventName" required>
            </div>
            <div class="modal-input-container">
                <label for="">Event Registration Fee</label>
                <input type="text" class="form-input newEventName" name="eventFee" required>
            </div>
            <div class="date-container">
                <div class="modal-input-container">
                    <label for="">Event Type</label>
                    <input type="text" class="form-input newEventType" name="eventType" required>
                </div>
                <div class="modal-input-container">
                    <label for="">From Date</label>
                    <input type="date" class="form-input newEventFromDate" name="fromDate" required>
                </div>
                <div class="modal-input-container">
                    <label for="">To Date</label>
                    <input type="date" class="form-input newEventToDate" name="toDate" required>
                </div>
            </div>
            <div class="modal-input-container">
                <label for="">Event Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-input" required></textarea>
            </div>
            <div class="modal-input-container">
                <label>Event Instructions</label>
                <textarea name="instructions" id="" cols="30" rows="10" class="form-input"></textarea>
            </div>
            <div class="modal-input-container">
                <label>Add Images</label>
                <input type="file" name="image" id="image" class="images" multiple>
            </div>
            <div class="modal-input-container">
                <label for="">Event Registration form Link</label>
                <input type="text" class="form-input" name="googleFormLink" required>
            </div>
            <div class="modal-input-container">
                <button class="form-input new-evnt-Btn">Add Event</button>
            </div>
            
        </form>
    </div>
