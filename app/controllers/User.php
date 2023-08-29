<?php
class User extends Controller{
    use Model;
    use Helper;
    protected $table = 'user';

    
    public function index(){
     // $data = $this-> getSponserships();
     $data =[];
        $this->view('User/login',$data);
     }
     public function register(){
        $this->view('User/register');
     }
     public function registerUser(){
      $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
      var_dump($password_hash);
        $data['name']=$_POST['name'];
        $data['email']=$_POST['email'];
        $data['password']=$password_hash;
        $data['dateOfBirth']=$_POST['dateOfBirth'];
        $data['mobile']=$_POST['mobile'];
        $data['date']=date("Y-m-d");

        $query['email'] = $_POST['email'];
        $res = $this->where($query);
        if ($res !== NULL) {
            print_r("User already exist!");
        } else {
            $insertId = $this->insert($data);
        }
        $this->register();
     }

     public function login(){
      $this->view('User/login');
        
     }
     public function loginUser(){
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $username = $_POST['email'];
         $password = $_POST['password'];
         $query['email'] = $username;
         $res = $this->where($query);
         $user['name'] = $res[0]->name;
         $user['email'] = $res[0]->email;
         $user['role'] = $res[0]->role;
         $user['id'] = $res[0]->id;
         if ($res) {
            if(password_verify($password,$res[0]->password)){
               session_start();
              // session_regenerate_id();
               $_SESSION["user"] = $user;
               header("location: ../home");

               /*if(user == true)
               {
                 $("#editbutton").show();
                 $("#deletebutton").show();
                 //document.getElementById("user").innerHTML=user.displayName;
                 //$("#user").hide();
               }
               else{ 
                 alert("Successfull");
               } 
               exit; */
            }              
         }
      }
     }

     public function logout(){
      session_start();
         session_destroy();
         header("Location: ../home");
     }
}