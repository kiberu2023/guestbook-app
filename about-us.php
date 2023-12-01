<html>
    <head>
        <title>About </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="bootstrap.min.css"></script>
        <style>
            .text {
                position: absolute;
                text-align: center;
                color: orangered; /* Set the text color */
                font-size: larger;
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
            <style>
        body {
            background-image: url('renam/vistors.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
        }
            
            </style>
    </head>
    <body>
    <?php include "Includes/nav.php";?>
    <div class="text">
        <div classs="centered">
        <img src="renam/author1.jpg" alt="..." height="100%" width="100%">
        </div>
        <div class="centered">
            <h1><b><i>ABOUT THE AUTHOR</i></b></h1>
            <p><dfn>The author is kiberu simon peter well known forbackend conding and he has various it skills some of these include website development </dfn></p>
            <p><i>He aquired his masters in software developing <br/> at makerere university in 2019 and now is heading for a PHD in software developing again</i></p>
        </div>
    </body>
    <?php include "Includes/footer.php"; ?>
</html>

