<link rel="stylesheet" href="<?php echo ROOT?>/css/style.css">
<section class="banner blog-banner">
  <div class="banner-heading"><h1 class="main-heading">Blogs</h1>
  <p class="sub-heading">No bird can fly without opening its wings, and no one can love without exposing their hearts. Let your heart expose its love via PEN.</p></div>
</section>
<section>
  <div class="container">
    <h2>Update Blog</h2>
    <hr class="new-blog-hr">
    <div class="new-blog-form-container">
                <form action="../postEditBlog" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="blogId" value="<?php $data[0]->blogId?>">
                    <div class="modal-input-container">
                      <label for="">Blog Name</label>
                      <input class="form-input newBlogName" name="blogName" value="<?php echo $data[0]->blogName ?>"></input>
                    </div>
                    <div class="new-form-details">
                      <div class="modal-input-container ">
                        <label for="">Author</label>
                        <input type="text" class="form-input newBlogAuthor" name="blogAuthor" value="<?php echo $data[0]->blogAuthor ?>">
                    </div>
                    <div class="modal-input-container ">
                      <label for="">Date</label>
                      <input type="Date" class="form-input newBlogDate" name="date" id="date" value="<?php echo date('Y-m-d',strtotime($data[0]->date)) ?>">
                  </div>
                    </div>
                    <div class="modal-input-container ">
                      <label for="">Blog Content</label>
                      <textarea name="blogContent" id="" cols="30" rows="20" class="form-input " required> <?php echo $data[0]->blogContent ?>  </textarea>
                  </div>
                    <div class="modal-input-container new-blog-file-upload">
                      <input type="file" name="image" class="form-input" multiple>
                    </div>
                    <div class="input-container">
                      <button type="submit" class="form-input formBtn">Save</button>
                  </div>
                  </div>
                  </form>
  </div>
  </div>
</section>
