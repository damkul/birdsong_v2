<section class="banner blog-banner">
  <div class="banner-heading"><h1 class="main-heading">Blogs</h1>
  <p class="sub-heading">No bird can fly without opening its wings, and no one can love without exposing their hearts. Let your heart expose its love via PEN.</p></div>
</section>
<section>
  <div class="container">
    <h2>Write New Blog</h2>
    <hr class="new-blog-hr">
    <div class="new-blog-form-container">
      
      <form action="postNewBlog" method="post" enctype="multipart/form-data">
        <div class="modal-input-container">
          <label for="">Blog Name</label>
          <input class="form-input newBlogName" name="blogName" required></input>
        </div>
        <div class="new-form-details">
          <div class="modal-input-container ">
            <label for="">Author</label>
            <input type="text" class="form-input newBlogAuthor" name="blogAuthor" required>
        </div>
        <div class="modal-input-container ">
          <label for="">Date</label>
          <input type="Date" class="form-input newBlogDate" name="blogDate" required>
      </div>
        </div>
        <div class="modal-input-container ">
          <label for="">Blog Content</label>
          <textarea name="blogContent" id="" cols="30" rows="20" class="form-input " required></textarea>
      </div>
       
        <div class="modal-input-container new-blog-file-upload">
          <label for="">Upload Images</label>
          <input type="file" name="image" class="form-input" id="image" multiple>
        </div>
        <!-- <div class="modal-input-container new-blog-file-upload">
          <label for="">Upload Sounds</label>
          <input type="file" name="sounds" class="form-input " multiple>
        </div> -->
        <div class="input-container">
          <button type="submit" class="form-input formBtn">Save</button>
      </div>
      </div>
      </form>
      
  </div>
  </div>
</section>