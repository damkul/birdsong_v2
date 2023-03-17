<section class="banner event-banner">
  <div class="banner-heading"><h1 class="main-heading">Events</h1>
  <p class="sub-heading">Earth and sky, woods and fields, lakes and rivers are excellent schoolmasters and teach us more than we ever learn from books
      .There is no Wi-Fi in the mountains, but you will find no better connection than this.</p></div>
</section>
<section>
  <div class="container">
    <h2>Event Registration</h2>
    <hr class="new-blog-hr">
    <% if (!isRegistered) { %>

      <div class="new-event-form-container">
        <form action="../postRegister" method="post" enctype="application/x-www-form-urlencoded">
          <input type="hidden" name="eventId" value="<%= eventId %> ">
          <div class="modal-input-container">
            <label for="">Name</label>
            <input class="form-input pname" name="name" required></input>
          </div>
          <div class="new-form-details">
            <div class="modal-input-container ">
              <label for="">Age</label>
              <input type="text" class="form-input age" name="age" required>
          </div>
          <div class="modal-input-container ">
            <label for="">Gender</label>
            <select name="gender" id="" class="form-input" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
        </div>
          </div>
          <div class="new-form-details">
            <div class="modal-input-container ">
              <label for="">Email</label>
              <input type="email" class="form-input email" name="email" required>
          </div>
          <div class="modal-input-container ">
            <label for="">Mobile</label>
            <input type="text" name="mobile" id="" class="form-input" required>
        </div>
          </div>
          <div class="modal-input-container ">
              <label for="">Adress</label>
              <textarea  name="address" id="" class="form-input"></textarea>
          </div>
          <div class="modal-input-container ">
              <label for="">Total Payable Amount</label>
              <input  name="address" id="" class="form-input eventAmount" value="<%= eventAmount %> " disabled></input>
          </div>
          <div class="input-container">
            <button type="submit" class="form-input formBtn" id="buy-now">Register</button>
        </div>
        </div>
        </form>
        
    </div>

    <% } %> 
    
  </div>
  <div id="container"></div>

  
</section>
<script async
 src="https://pay.google.com/gp/p/js/pay.js"
 onload="onGooglePayLoaded()"></script>
 <script src="/js/payment.js"></script>
