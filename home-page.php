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
                color:red; 
                font-size: 20px;
                font-weight: bolder;
                font-size:xx-large;
            }

            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            /* Style for the footer */
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
                font-size: x-large;
            }
            
        </style>
    </head>
    <body>
        <?php include "Includes/nav.php"; ?>
        <div class="text">
            <img src="renam/vistor2.jpg" alt="..." height="100%" width="100%">
            <div class="centered">
                <h1><b><marquee direction="left">YOUR WELCOME TO OUR GUESTBOOK DISCOVER STORIES AND SHARE MEMORIES</marquee></b></h1>
                <p><dfn>Join us and explore heartfelt memories, connect with others, celebrate special moments, and leave a lasting impression</dfn></p>
            </div>
        </div>
    </body>
    <?php include "Includes/footer.php"; ?>
</html>


