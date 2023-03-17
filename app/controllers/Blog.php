<?php

class Blog extends Controller{

    use Model;
    use Helper;
    protected $table = 'blog';

    public function index(){
        $result = $this->getBlogData();
        $this->view('Blog/blog');

     }
     public function getEditBlog($id){
        $blog['blogId'] = $id;
        $result = $this->where($blog);
        $this->view('Blog/editBlog',$result);
     }
     public function postEditBlog($id){
        $blog['blogId'] = $id;
        print_r($_POST);
         $result = $this->update($id,$_POST,'blogId');
        $this->view('Blog/editBlog',$result);
     }
      public function getNewBlog(){
        $this->view('Blog/newBlog');
      }
      public function postNewBlog(){
        print_r($_POST);
        $data['blogName']=$_POST[blogName];
        $data['blogAuthor']=$_POST[blogAuthor];
        $data['blogContent']=$_POST[blogContent];
        $this->insert($data);
        $this->view('Blog/newBlog');
      }
      public function deleteBlog($id){
        //TODO: delete record from foreign key tables 
        $blog['blogId'] = $id;
        $result = $this->delete($blog,'blogId');
        $this->view('Blog/blog');
      }
      public function readBlog($id){
        $blog['blogId'] = $id;
        $result = $this->where($blog);
        $this->view('Blog/readBlog',$result);
      }

      public function getBlogData(){
        $query = [];
        $query['getAllBlogs'] = "select blog.blogId,blogName,blogAuthor,date,blogContent,bi.imageName,bs.soundName
        from birdsong.blog blog
        left join birdsong.blogimages bi on blog.blogId = bi.blogId
        left join birdsong.blogsounds bs on blog.blogId = bs.blogId
        order by blogName;";
       return $result = $this->executeCustomQuery($query);
     }
     
}