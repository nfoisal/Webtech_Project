<?php


require 'db_connect.php';

class Admin_Class {
   
    public function __construct() {
        
     $db_connect=new Db_Connect();  
    }
    
    public function save_employee($data){
//        echo '<pre>';
//       print_r($data);
        
     $query= "INSERT INTO tbl_employee(employee_name,employee_position,date_of_birth,gender,present_address,permanent_address,blood_group,email,password,mobile)"
             . "VALUES('$data[employee_name]','$data[employee_position]','$data[date_of_birth]','$data[gender]','$data[present_address]','$data[permanent_address]','$data[blood_group]','$data[email]','$data[password]','$data[mobile]')";
               

           
      if(mysql_query($query)){
          $message="save successfully";
          return $message;
      }  else {
          die("SQL Error".mysql_error());
      }
      

    }
    
    public function select_all_employee(){
      $query="SELECT*FROM tbl_employee";
      $result=mysql_query($query);
      return $result;
    }
    
    public function select_employee_by_employee_id($employee_id){
         $query="SELECT*FROM tbl_employee WHERE employee_id='$employee_id' ";
      $resource_id =mysql_query($query);
      return $resource_id;
    }
    
    public function update_employee_by_employee_id($employee_id, $data){
        
        $query="UPDATE tbl_employee SET employee_name='$data[employee_name]',employee_position='$data[employee_position]',date_of_birth='$data[date_of_birth]',gender='$data[gender]',present_address='$data[present_address]',permanent_address='$data[permanent_address]',blood_group='$data[blood_group]',email='$data[email]',password='$data[password]',mobile='$data[mobile]' WHERE employee_id='$employee_id' ";
        if (mysql_query( $query)){
            $_SESSION['message']="Employee info update sucessfully";
        header('location: manage_employee.php');
        }else {
            die('Query problem'.  mysql_error() );
       }

     }
        


    
    public function logout(){
        unset($_SESSION['admin_id']);
        unset($_SESSION['name']);
        header('location: login_page.php');
    }
    
}
