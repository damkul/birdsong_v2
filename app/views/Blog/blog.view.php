<link rel="stylesheet" href="<?php echo ROOT?>/css/style.css">
<section class="banner blog-banner">
  <div class="banner-heading"><h1 class="main-heading">Blogs</h1>
  <p class="sub-heading">No bird can fly without opening its wings, and no one can love without exposing their hearts. Let your heart expose its love via PEN.</p></div>
</section>
<section id="blogs">
  <div class="container">
    <div class="page-heading-container">
      <h2 class="page-heading">Read Observations about Birds</h2>
      <hr class="ruler" />
    </div>
        <div class="new-blog-container">
          <button class="addNewBlogBtn"><a href="/blogs/writeNewBlog">Write New Blog</button>
        </div>
    <div class="blog-container">
      <div class="blog">
        <div class="bg">
        <div class="author-image"><img src="<?php echo ROOT?>/images/Birdsong_logo_0.75x.png" alt="" class="a-image" /></div> 
        <div class="information">
          <div class="top-blog">
            <h4 class="content-heading"><%= blog.blogName %> </h4>
            <p class="small-gray-text"><%= blog.blogAuthor %> , <%= date %></p>
            <p class="blog-content-text paragraph"><%= blog.blogContent.substr(0,100) %> </p>
            <audio src="/sounds/<%= blog.soundName %> "></audio>
          </div>
            
            <div class="blog-btn-cntnr">
                <button  class="blog-btn"><a href="/blogs/readBlog/<%= blog.blogId %> ">Read More</a></button>
            </div>
        </div>
        </div>
        <% if (role > 0) { %>
          <div class="actions">
            <button><a href="/blogs/editBlog/<%= blog.blogId %>"> edit</a></button>
            <button><a href="/blogs/deleteBlog/<%= blog.blogId %>" name="id"> delete</a></button>
          </div>
        <% } %>
        
    </div>
    
    <% }) %>
    <% } %> 
    </div>
        
  </div>
</section>