<?php


include 'dbinfo.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql  = "INSERT INTO feedback(name, email, message) VALUES('$name','$email','$message')";


    if(mysqli_query($con, $sql)){
        echo '<script>alert("Submitted");</script>';
    }
   
}




?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }


        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f2f2f2;
        }


        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }


        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<h1>Contact Us</h1>
    <a href="about.php">About Us</a>
    <a href="contact.php">Contact Us</a>
    <form action="#" method="post">
    <label for="name">Your Name:</label>
        <input type="text" name="name" required>
       
        <label for="email">Your Email:</label>
        <input type="email" name="email" required>
       
        <label for="message">Your Message:</label>
        <textarea name="message" required></textarea>
       
        <input type="submit" value="Submit">
    </form>
   
</body>
</html>