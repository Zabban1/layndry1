<?php
session_start();

$emailFromDB =  $_SESSION["user_id"];


      $connection = new mysqli('localhost', 'root', '', 'laundry_db');
      if(isset($_POST['send'])){
         $name = $_POST['name'];
         $phone = $_POST['phone'];
         $address = $_POST['address'];
         if($name==null || $phone==null || $address==null )
         {
            echo '<script>alert("Fields cannot be empty");location.href="profile.php";</script>';
         } else{
            $request = "update signup_form set name ='$name',phone ='$phone',address ='$address' where email ='$emailFromDB'" ;
            if ($connection->query($request)) {
               $_POST = array();
               echo '<script>alert("Profile Updated Successfully.");location.href="home.php";</script>';

            } else {
            echo "Error: " . $request . "<br>" . $connection->error;
            echo '<script>alert("Profile Update Failed.Please try Again");location.href="profile.php";</script>';
            }
         }
      }else{
         echo 'something went wrong please try again!';
      }

   ?>
<html>
<link rel="stylesheet" href="css/style.css">

   </html> 