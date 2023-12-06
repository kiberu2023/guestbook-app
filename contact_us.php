<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <?php include "Includes/head.html>"; ?>
    <head>
    <!-- other head content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-b4Gav4GD7Z2geL1fGXx8U6Pq7f1bOM1I1W3DAFiTGZk5DO7qwbipAf9N9dVG5D2h" crossorigin="anonymous">
</head>

    <style>
        /* Add your CSS styles here */
        form {
            max-width: 400px;
            margin: auto;
        }
        body {
            background-image: url('renam/contact.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            font-size: x-large;
            color:coral;
            font-weight: bolder;
        } 
            .footer {
            display: flex;
            justify-content: space-between;
            align-items: left;
        }

        .footer ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .footer li {
            margin-right: 15px;
        }

        .footer p {
            margin: 0;
        } 
        .form {


        } 
    </style>
</head>
<body>
<?php include "Includes/nav.php";?>

    <h1>Contact Us</h1>

    <!-- Contact Information -->
    <h2>Contact Information</h2>
    <p>
        <strong>GUEST BOOK.COM</strong><br>
        123 Main Street, Kampla, uganda<br>
        Phone: +256_0757208358<br>
        Email: kiberusimonpeter095@gmail.com
    </p>

    <!-- Contact Form -->
    <h2>Contact Form</h2>
    <form action="Includes/contact_form_processor.php" method="post" style="margin-top: 5rem;">
        <label for="name">Your Name:</label>
        <input type="text" id="names" class="form-control" name="names" required>

        <label for="email_address">Your Email:</label>
        <input type="email" id="email_address" class="form-control" name="email_address" required>

        <label for="message">Your issue:</label>
        <textarea id="issue" name="issue" class="form-control" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>
    <h2>Connect with Us</h2>
    <ul class="social-media-icons">
    <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
</ul>


</body>
<?php include "Includes/footer.php"; ?>
</html>