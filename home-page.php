<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <style>
            .text {
                position: relative;
                text-align: center;
                color: black; /* Set the text color */
            }

            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            /* Style for the footer */
            .footer {
                background-color: #333; /* Choose your background color */
                color: white;
                text-align: center;
                padding: 10px;
                position: fixed;
                bottom: 0;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php include "Includes/nav.php"; ?>
        <div class="text">
            <img src="renam/vistor2.jpg" alt="..." height="50%" width="100%">
            <div class="centered">
                <h1><b>YOUR WELCOME TO OUR GUESTBOOK DISCOVER STORIES AND SHARE MEMORIES</b></h1>
                <p><dfn>Join us and explore heartfelt memories, connect with others, celebrate special moments, and leave a lasting impression</dfn></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11">
                <div class="centered">
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <P>
                <ul>
                    <li><a href="home-page.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact">Contact us</a></li>
                </ul>
            </P>
            <p>&copy; 2023 GUESTBOOK/ALL RIGHTS</p>
        </div>
    </body>
</html>


