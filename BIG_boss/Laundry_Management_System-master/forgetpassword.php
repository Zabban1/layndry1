<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Forget Password</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<section class="header">

   <a href="index.php" class="logo">BIG boss</a>

   <nav class="navbar">
      <a href="admin.php">Admin Login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
<div class="heading" style="background:url(images/laundrybg1.png) no-repeat">
   <h1>BIG boss Cleaning Services</h1>
</div>

<section class="booking">

   <h1 class="heading-title">Alternate Login</h1>

   <form action="forgetpassword.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Email ID : </span>
            <input type="email" placeholder="Enter Your mail_Id" name="id">
         </div>
         <div class="inputBox">
            <span>Secret Question :</span>
            <select name = "securityquestion" class = "box drp_btn" required>
               <option value = "color">What is your favourite color?</option>
               <option value = "father">What is your father's name?</option>
               <option value = "petspecies">Which animal is your pet?</option>
               <option value = "petname">What is the name of your pet?</option>
               <option value = "number">What is your favourite number?</option>
               <option value = "cricketer">Who's your favourite cricketer?</option>

            </select>
         </div>
         <div class="inputBox">
            <span>Answer of Security Question :</span>
            <input type="text" placeholder="enter your secret answer" name="securityanswer" required>
        </div>
         <input type="submit" value="Login" class="btn" name="send">
      </div>   

    
   </form>


<?php
     $conn = new mysqli('localhost', 'root', '', 'laundry_db');

include 'connect.php';
session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $email = $_POST['id'];

    $securityquestion = $_POST['securityquestion'];
    $securityanswer = $_POST['securityanswer'];

   if($email==null and $securityquestion==null and $securityanswer==null )
   {
      echo '<script>alert("Fields cannot be empty")</script>';
   }
   else{

   $select_user = $conn->prepare("SELECT * FROM signup_form WHERE email = ? AND securityquestion = ? AND securityanswer = ?");
   $select_user->execute([$email, $securityquestion, $securityanswer]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){

      $_SESSION["user_id"] = $row["email"];

      print_r($_SESSION);
      header('location:recoverPassword.php?url=1');

   }else{
      echo '<script>alert("Login Failed!!.Try Again.");location.href="forgetpassword.php";</script>';
      header('location:forgetpassword.php');

   }

}
}

?>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>