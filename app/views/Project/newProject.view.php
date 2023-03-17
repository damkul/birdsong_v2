<section class="banner project-banner">
  <div class="banner-heading"><h1 class="main-heading">Projects</h1>
  <p class="sub-heading">The richness we achieve comes from Nature, the source of our inspiration. Never, no, never did nature say one thing and wisdom another.</p></div>
</section>
<section>
    <div class="container">
        <h2>New Project</h2>
    <hr class="new-blog-hr">
    <div class="new-blog-form-container"> 
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
        <form action="../postNewProject" method="post" enctype="multipart/form-data">
        
              <div class="modal-input-container">
                <label for="">Project Name</label>
                <input class="form-input newBlogName" name="title" required></input>
              </div>
              <div id="dates">
                <div class="modal-input-container ">
                  <label for="">From Date</label>
                  <input type="date" class="form-input" name="fromDate"">
                </div>
                <div class="modal-input-container ">
                  <label for="">To Date</label>
                  <input type="date" class="form-input" name="toDate">
                </div>
              </div>
             <div class="modal-input-container ">
                  <label for="">eBird Link</label>
                  <input type="text" class="form-input newBlogAuthor" name="eBirdLink">
              </div>
             <div class="modal-input-container ">
                  <label for="">Description</label>
                  <textarea name="description" id="" cols="30" rows="20" class="form-input" required></textarea>
              </div>
              <div class="modal-input-container new-blog-file-upload">
                <input type="file" name="image" class="form-input">
              </div>
              <div class="input-container">
                <button type="submit" class="form-input formBtn">Save</button>
            </div>
            </div>
            </form>
    </div>
        
    </div>
</section>
