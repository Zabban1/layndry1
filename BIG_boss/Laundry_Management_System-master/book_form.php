<?php

$connection = new mysqli('localhost', 'root', '', 'laundry_db');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['send'])) {
    $date = $_POST['date'];
    $topwear = $_POST['topwear'];
    $bottomwear = $_POST['bottomwear'];
    $woolen = $_POST['woolen'];
    $others = $_POST['others'];
    $servicetype = $_POST['servicetype'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    if (empty($date) && empty($topwear) && empty($bottomwear) && empty($woolen) && empty($others) && empty($servicetype) && empty($name) && empty($email) && empty($phone) && empty($address) && empty($description)) {
        echo '<script>alert("Fields cannot be empty");location.href="book.php";</script>';
    } else {
       
        $check_email_query = "SELECT email FROM book_form WHERE email = '$email'";
        $result = $connection->query($check_email_query);

        if ($result->num_rows > 0) {
            echo '<script>alert("This email is already used. Please use a different email.");location.href="book.php";</script>';
        } else {
            $request = "INSERT INTO book_form(date, topwear, bottomwear, woolen, others, servicetype, name, email, phone, address, description) VALUES('$date', '$topwear', '$bottomwear', '$woolen', '$others', '$servicetype', '$name', '$email', '$phone', '$address', '$description')";
            if ($connection->query($request) === TRUE) {
                $_POST = array();
                echo '<script>alert("Hurrah! Your request has been submitted successfully. Stay back we will connect with you shortly.");location.href="home.php";</script>';
            } else {
                echo "Error: " . $request . "<br>" . $connection->error;
                echo '<script>alert("Sorry! Your request for a cleaning session failed. Please try again.");location.href="book.php";</script>';
            }
        }
    }
} else {
    echo 'Something went wrong, please try again!';
}

$connection->close();

?>

<html>
<link rel="stylesheet" href="css/style.css">
</html>