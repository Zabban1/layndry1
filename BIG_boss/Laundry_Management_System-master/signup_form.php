<?php
      
    $connection = new mysqli('localhost', 'root', '', 'laundry_db');
    if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $securityquestion = $_POST['securityquestion'];
    $securityanswer = $_POST['securityanswer'];

    if($name==null || $email==null || $password==null || $phone==null || $address==null || $securityquestion==null || $securityanswer==null)
    {
       echo '<script>alert("Fields cannot be empty");location.href="signup.php";</script>';
    } else{
    $request = " insert into signup_form(name, email, password, phone, address, securityquestion, securityanswer) values('$name','$email', '$password', '$phone','$address','$securityquestion','$securityanswer') ";
        
            if ($connection->query($request)) {

            $_POST = array();
            echo '<script>alert("Account Created Successfully.Please Login.");location.href="index.php";</script>';

            } else {
                echo "Error: " . $request . "<br>" . $connection->error;
            }
        }
    }
        else{
        echo 'something went wrong please try again!';
    }
?>
<link rel="stylesheet" href="css/style.css">
