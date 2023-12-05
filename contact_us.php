<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php include "Includes/head.html>"; ?>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: auto;
        }
        body {
            background-image: url('renam/vistors .jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
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
    <form action="contact_form_processor.php" method="post" style="margin-top: 5rem;">
        <label for="name">Your Name:</label>
        <input type="text" id="names" class="form-control" name="names" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" class="form-control" name="email" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" class="form-control" rows="4" required></textarea>

        <<button type="button">Submit</button>
    </form>
    <h2>Connect with Us</h2>
    <ul>
        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
        <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
        <li><a href="https://www.whatsapp.com/" target="_0757208358">whatsapp</a></li>
    </ul>

</body>
<?php include "Includes/footer.php"; ?>
</html>
