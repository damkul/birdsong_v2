<?php
$data='';
$oldBlogName='';
$newBlogName='';
$blogName='';
$blogAuthor='';
$blogDate='';
$blogContent='';

class Blog extends Controller{

    use Model;
    use Helper;
    protected $table = 'blog';
    //file upload 
    

    public function index($data,$oldBlogName,$newBlogName){
        $data = $this->getBlogData($data,$oldBlogName,$newBlogName);
        $this->view('Blog/blog',$data);

     }
     public function getEditBlog($id){
        $blog['blogId'] = $id;
        $result = $this->where($blog);
        $this->view('Blog/editBlog',$result);
     }
     public function postEditBlog(){
         $blog['blogId'] = $_POST['blogId'];
         $result = $this->update($blog['blogId'],$_POST,'blogId');
        // $this->view('Blog/editBlog',$result);
     }
      public function getNewBlog(){
        $this->view('Blog/newBlog');
      }
      public function postNewBlog($data,$oldBlogName,$newBlogName){
        $data['blogName']=$_POST['blogName'];
        $data['blogAuthor']=$_POST['blogAuthor'];
        $data['blogContent']= $_FILES['content-file']['name'];
        $data['date']=$_POST['blogDate'];
        $insertId = $this->insert($data);
        //Insert images
         $this->insertFiles($insertId,$_FILES);
        $this->fileUpload("file",$_FILES);

        //Insert blog content

        $this->uploadSingleFile($_FILES);
        $this->index($data,$oldBlogName,$newBlogName);
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
        print_r($result);
        $this->view('Blog/readBlog',$result);
        $this->view('readBlog/',$result);
      }

      public function getBlogData($data,$oldBlogName,$newBlogName){
        $query = [];
        $query['getAllBlogs'] = "select blog.blogId,blogName,blogAuthor,date,blogContent,bi.imageName,bs.soundName
        from blog blog
        left join blogimages bi on blog.blogId = bi.blogId
        left join blogsounds bs on blog.blogId = bs.blogId
        order by blogName;";
       $result = $this->executeCustomQuery($query);
       $res = $this->sortBlogData($data,$oldBlogName,$newBlogName);
       return $result;
     }
     public function sortBlogData($data,$oldBlogName,$newBlogName){
      $oldBlogName;
      $newBlogName;
      $images = [];
      $sounds = [];
      $soundName=[''];
      
      $length = count($data)-1;
      $blogs = [];
      for ($index = 0; $index < count($data); $index++) {
        $newBlogName = $data[$index]->blogName;
        $blog = [];
        if ($index == 0 || $oldBlogName == $newBlogName) {
          $imageName=[];
          array_push($images,$data[$index]->imageName);
          array_push($sounds,$data[$index]->soundName);

        } else {
          // $blog = {};
          $blog["blogId"] = $data[$index-1]->blogId;
          $blog["blogName"] = $data[$index-1]->blogName;
          $blog["blogAuthor"] = $data[$index-1]->blogAuthor;
          $blog["blogDate"] = $data[$index-1]->date;
          $blog["blogContent"] = $data[$index-1]->blogContent;
          $blog["images"] =  $images;
          $blog["sounds"] = $sounds;
          array_push($blogs,$blog);
          
          $images = [];
          $sounds = [];
          array_push($images,$data[$index]->imageName);
          array_push($sounds,$data[$index]->soundName);
          
        }
        $oldBlogName = $newBlogName;
        if(isset($_POST["blogContent"])){

          $blogContent = $_POST["blogContent"];
          
          echo $blogContent[0];
          
          }
          
          
        if ($index == $length) {
          $blog=[];
          
          $blog["blogId"] = $data[$index]->blogId;
          $blog["blogName"] = $data[$index]->blogName;
          $blog["blogAuthor"] = $data[$index]->blogAuthor;
          $blog["blogDate"] = $data[$index]->date;
          $blog["blogContent"] = $data[$index]->blogContent;

          $blog["images"] =  $images;
          $blog["sounds"] = $sounds;
          array_push($blogs,$blog);
        }
     }
     return $blogs;
}
  public function insertFiles($insertId,$files){
    
    $images = [];
    $sounds = [];
    $countfiles = count($files['file']['name']);
    for($i=0;$i<$countfiles;$i++){
      $fileName = $files['file']['name'][$i];
      $strings = explode(".", $fileName);
        if (in_array( "mp3", $strings )) {
        $soundTable = 'blogsounds';
        $sound['soundName']= $fileName;
        $sound['blogId']=$insertId;
        array_push($sounds,$sound);
      } else {
        $imageTable = 'blogimages';
        $data['imageName']= $fileName;
        $data['blogId']=$insertId;
        array_push($images,$data);
      }
    }
    if(!empty($images)){
      $this->customInsert($images,$imageTable);
    }
    if(!empty($sounds)){
      $this->customInsert($sounds,$soundTable);
    }
  }
}