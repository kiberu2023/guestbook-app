<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <style>
            .text {
                position: absolute;
                text-align: center;
                color: orangered; 
                font-size: 20px;
            }

            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            /* Style for the footer */
            <?php include "Includes/cssfooter.php";?>
            
        </style>
    </head>
    <body>
        <?php include "Includes/nav.php"; ?>
        <div class="text">
            <img src="renam/vistor2.jpg" alt="..." height="100%" width="100%">
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
    </body>
    <?php include "Includes/footer.php"; ?>
</html>


