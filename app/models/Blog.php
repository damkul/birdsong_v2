<?php

class Blog {
    use Model;
    protected $table = 'blog';

    protected $allowedColumns = [
        'blogName'
    ];
    public function index(){
        // call all model functions from here
      //  $blog = new Blog;
     //   $result =  $model->delete(80,'blogId');// actual id and name of id column from table
     //$arr['blogName'] = 'testing complete flow';
        //$blog->insert($arr);
        //$result =  $model->update(81,$arr,'blogId');// actual id and name of id column from table
        
        
        print_r($result);
        $this->view('home');
     }
     public function getEditBlog($id){
        $blog['blogId'] = $id;
        $result = $this->where($blog);
        $this->view('editBlog');
     }
     //Final method
     // public function postEditBlog($id,$data){
     //    $blog['blogId'] = $id;
     //    $this->update($id,$data,'blogId');
     // }
     //test method
     public function postEditBlog($id,$data){
        $blog['blogId'] = $id;
        $data['blogName']='final';
        $this->update($id,$data,'blogId');
     }
      public function getNewBlog(){
        $this->view('newBlog');
      }
      public function postNewBlog(){
        $data['blogName']='final testing';
        $data['blogAuthor']='damini';
        $data['blogContent']='damini is happy';
        $this->insert($data);
        $this->view('newBlog');
      }
      public function deleteBlog($id){
        $blog['blogId'] = $id;
        $result = $this->delete($blog,'blogId');
        $this->view('blog');
      }
}