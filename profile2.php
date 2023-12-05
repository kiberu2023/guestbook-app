<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <?php include "Includes/cssfooter.php";?>
</head>
<body>
    <form action="includes/profile_form_processor.php" enctype="multipart/form-data" method="post" style="margin-top: 5rem;">
        <div class="form-group" style="width: 17rem;">
            <label for="email">Name:</label>
            <input type="text" class="form-control" name="Name" placeholder="name">
        </div>
        <div class="form-group" style="width: 17rem;">
            <label for="email"> Telephone_number:</label>
            <input type="tel" class="form-control" name="last_name" placeholder="last_name" value>
        </div>
        <div class="form-group"style="width: 17rem;">
            <label for="email"> Avatar:</label>
            <input type="file" class="form-control" name="Avatar" placeholder="img">
        </div>
        <input type="submit" class="btn btn-success" value="submit">
    </form>
</body>
<?php include "Includes/footer.php"; ?>
</html>