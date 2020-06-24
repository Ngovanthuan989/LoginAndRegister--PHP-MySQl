<?php
  function register()
  {
     if (!empty($_POST)) {
         # code...
         $full_name=$_POST['full_name'];
         $username=$_POST['username'];
         $password=$_POST['password'];
         $email=$_POST['email'];
         $phone_number=$_POST['phone_number'];





         require_once('../dbConnect/sql_connect.php');

         $query ="insert into student(full_name,username,passwords,email,phone_number) values('".$full_name."','".$username."','".$password."','".$email."','".$phone_number."')";

         mysqli_query($connect,$query);

         require_once("../dbConnect/sql_close.php");

         header("location:../login/login.php");
     }
  }

?>