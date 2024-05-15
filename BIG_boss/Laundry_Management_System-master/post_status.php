<?php

      $connection = new mysqli('localhost', 'root', '', 'laundry_db');
      if(isset($_POST['send_status'])){
         $statusType = $_POST['statusType'];
         $email = $_POST['email'];
         

         if($email==null and $statusType==null)
         {
            echo '<script>alert("Please Select");location.href="admin-status.php";</script>';
         } else{

            $request = "update signup_form set status ='$statusType' where email ='$email'" ;

            if ($connection->query($request)) {
               $_POST = array();
               echo '<script>alert("Status Updated.");location.href="dashboard.php";</script>';

            } else if($connection->error=="Duplicate entry '$email' for key 'PRIMARY'"){
            $request = "update status_form set status ='$statusType' where email ='$email'" ;
            if ($connection->query($request)) {
               $_POST = array();
               echo '<script>alert("Status Updated Successfully.");location.href="dashboard.php";</script>';

            } else {
            echo "Error: " . $request . "<br>" . $connection->error;
            echo '<script>alert("Profile Update Failed.Please try Again");location.href="admin-status.php";</script>';
            }

            }
            else{
                echo 'nnnnnnnn';
            }
         }
      }else{
         echo 'something went wrong please try again!';
      }

   ?>
<html>
<link rel="stylesheet" href="css/style.css">

   </html> 