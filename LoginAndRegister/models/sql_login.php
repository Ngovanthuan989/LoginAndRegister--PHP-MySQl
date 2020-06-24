<?php
   function Login(){
       if (!empty($_POST)) {
           # code...

           $email = $_POST['email'];
           $password = $_POST['password'];

           require_once("../dbConnect/sql_connect.php");

           $query="select * from student where email='".$email."' and passwords='".$password."'";
           
           $result = mysqli_query($connect,$query);

           $data = array();
           while ($row = mysqli_fetch_array($result,1)) {
               # code...
               $data[]=$row;
           }
           require_once("../dbConnect/sql_close.php");
        //    var_dump($data);
           if ($data!=null && count($data)>0) {
               # code...
               header("location:../login/welcome.php");
           }
           
       }
   }

?>