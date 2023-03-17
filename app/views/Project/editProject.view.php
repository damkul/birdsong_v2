<section class="banner project-banner">
  <div class="banner-heading"><h1 class="main-heading">Projects</h1>
  <p class="sub-heading">The richness we achieve comes from Nature, the source of our inspiration. Never, no, never did nature say one thing and wisdom another.</p></div>
</section>
<section>
    <div class="container">
        <h2>Update Project</h2>
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
       <% projectList.forEach(element => { %>
        <% 
                var fdate = formatDate(element.fromDate);
                var tdate = formatDate(element.toDate);
               
                function formatDate(inputDate){
                  var date = new Date(inputDate);
                  mnth = ("0" + (date.getMonth() + 1)).slice(-2),
                  day = ("0" + date.getDate()).slice(-2);
                  return [ date.getFullYear(),mnth,day].join("-")
                  
              } %>
        <form action="postEditProject" method="post" enctype="multipart/form-data">
            <input type="hidden" name="projectId" value="<%= element.projectId %>">
              <div class="modal-input-container">
                <label for="">Project Name</label>
                <input class="form-input newBlogName" name="title" value="<%= element.title %> "></input>
              </div>
              <div id="dates">
                <div class="modal-input-container ">
                  <label for="">From Date</label>
                  <input type="date" class="form-input newBlogAuthor" name="fromDate" value="<%= fdate %>">
                </div>
                <div class="modal-input-container ">
                  <label for="">To Date</label>
                  <input type="date" class="form-input newBlogAuthor" name="toDate" value="<%= tdate %>">
                </div>
              </div>
             <div class="modal-input-container ">
                  <label for="">eBird Link</label>
                  <input type="text" class="form-input newBlogAuthor" name="eBirdLink" value="<%= element.eBirdLink %> ">
              </div>
             <div class="modal-input-container ">
                  <label for="">Description</label>
                  <textarea name="description" id="" cols="30" rows="20" class="newBlogContent form-input"><%= element.description %> </textarea>
              </div>
              <div class="new-blog-file-upload">
                <input type="file" name="image" id="image" class="form-input">
              </div>
              <div class="input-container">
                <button type="submit" class="form-input formBtn">Save</button>
            </div>
            </div>
            </form>

       <% }) %>
    </div>
        
    </div>
</section>
