<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SignUp</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   


<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Register into BIG boss</h1>
</div>


<section class="booking">

<h3 class="heading-title">Enter Your Details</h3>

<form action="signup_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="enter your name" name="name" required>
        </div>
        <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
        </div>
        <div class="inputBox">
            <span>Password :</span>
            <input type="password" placeholder="enter your password" name="password" required>
        </div>
        <div class="inputBox">
            <span>Phone No :</span>
            <input type="number" min="0000000000" max="9999999999" placeholder="enter your number" name="phone" required>
        </div>
        <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="enter your address" name="address"required>
        </div>
        <div class="inputBox">
            <span>Security Question :</span>
            <select name = "securityquestion" class = "box drp_btn">
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
            <input type="text" placeholder="enter your appropriate answer of security question" name="securityanswer" required>
        </div>
    </div>
    <center>
    <input type="submit" value="submit" class="btn" name="send">
</center>
</form>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script> 

</body>
</html>