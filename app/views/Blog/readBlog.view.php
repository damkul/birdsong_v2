<section class="banner blog-banner">
    <div class="banner-heading"><h1 class="main-heading">Blogs</h1>
    <p class="sub-heading">No bird can fly without opening its wings, and no one can love without exposing their hearts. Let your heart expose its love via PEN.</p></div>
  </section>
<section>
    <div class="container">
        <div class="display-blog-container">
        <h2 class="blog-name"><?php echo blog.blogName ?> </h2>
                    <hr>
                    <span class="sub-heading"><?php echo blog.blogAuthor ?>, </span><span class="sub-heading"><?php echo blog.date ?>, </span>
                    <img src="<?php echo ROOT ?>/images/<?php echo blog.imageName ?> " alt="" class="blog-image">
                    <p class="blogcontent"><?php echo blog.blogContent ?></p> 
        </div>
    </div>
</section>