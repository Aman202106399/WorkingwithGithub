<?php
include 'dbinfo.php';

// Fetch our_story data
$sql_story = "SELECT * FROM our_story";
$result_story = mysqli_query($con, $sql_story);

if (!$result_story) {
    die("Error in SQL query for our_story: " . mysqli_error($con));
}

$row_story = mysqli_fetch_assoc($result_story);

// Fetch our_team data
$sql_team = "SELECT * FROM our_team";
$result_team = mysqli_query($con, $sql_team);

if (!$result_team) {
    die("Error in SQL query for our_team: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        .nav-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #333;
            border-radius: 5px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 1em 0;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
        <!-- Navigation buttons -->
        <a href="#about" class="nav-button">About Us</a>
        <a href="#contact" class="nav-button">Contact Us</a>
    </header>

    <section id="about">
        <h2>Our Story</h2>
        <p><?php echo $row_story['content']; ?></p>
    </section>

    <section id="team">
        <h2>Our Team</h2>
        <ul>
            <?php while ($row_team = mysqli_fetch_assoc($result_team)) : ?>
                <li><?php echo $row_team['name']; ?> - <?php echo $row_team['position']; ?></li>
            <?php endwhile; ?>
        </ul>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <<?php


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
</html>>
    </section>

    <footer>
        &copy; Amandeep singh 202106399
    </footer>
</body>
</html>
