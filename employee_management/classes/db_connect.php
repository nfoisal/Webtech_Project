<?php


class Db_Connect {
    public function __construct() {
       $hostname='localhost';
       $username='root';
       $password='';
       $db_name='db_employee';
       $conn= mysql_connect($hostname,$username,$password);
       if($conn)
      {
          mysql_select_db($db_name);
     
           
       } else {
       die("not connected");    
       }
    }
}
