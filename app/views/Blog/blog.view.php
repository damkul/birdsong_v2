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
      <?php if( count($data) > 0): ?> 
        <?php foreach($data as $key): ?>
           
      <div class="blog">
        <div class="bg">
          <!-- <div class="author-image"><img src="/images/Birdsong_logo_0.75x.png" alt="" class="a-image" /></div> -->
        <div class="information">
          <div class="top-blog">
            <h4 class="content-heading"><?php echo $key->blogName ?> </h4>
            <p class="small-gray-text"><?php echo $key->blogAuthor ?> , <?php echo $key->date ?></p>
            <p class="blog-content-text paragraph"><?php echo $key->blogContent.substr(0,100) ?> </p>
            <audio src="/sounds/<?php $key->soundName ?> "></audio>
          </div>
            
            <div class="blog-btn-cntnr">
                <button  class="blog-btn"><a href="/blogs/readBlog/<?php $key->blogId ?> ">Read More</a></button>
            </div>
        </div>
        </div>
        <?php $role=1; if ($role > 0): ?>
          <div class="actions">
            <button><a href="/blogs/editBlog/<?php $key->blogId ?>"> edit</a></button>
            <button><a href="/blogs/deleteBlog/<?php $key->blogId ?>" name="id"> delete</a></button>
          </div>
        <?php endif; ?>
        
    </div>
    
    <?php endforeach; ?>
    <?php endif; ?> 
    </div>
    </div>
        
  </div>
</section>