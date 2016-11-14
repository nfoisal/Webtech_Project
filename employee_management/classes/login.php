<?php


require 'db_connect.php';

class Login {
    public function __construct() {
        $db_connect=new Db_Connect();
    }
    public function admin_login_check($data){
       $email=$data['email'];
       $password=  md5($data['password']);
       $query="SELECT*FROM tbl_admin WHERE email_address='$email' AND password='$password' ";
       if(mysql_query($query)){
          $resorce_id=  mysql_query($query);
          $admin_info=mysql_fetch_assoc($resorce_id);
          
          if($admin_info){
              $_SESSION['admin_id']=$admin_info['admin_id'];
              $_SESSION['admin_name']=$admin_info['admin_name'];
              
              
              header('location:dashboard.php');
          }  else {
             $message="Yor Email and Password is Worng" ;
             return $message;
          }
          
       }  
       else {
           die('Query problem'.  mysql_error());   
       }
    }

    
    }

