<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <?php include "Includes/cssfooter.php";?>
        <style>
        body {
            background-image: url('renam/image1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
        }
    </style>
</head>
<body>
<?php include "Includes/nav.php";?>
    <form action="includes/form_processor.php" method="post" style="margin-top: 5rem;">
        <div class="form-group" style="width: 17rem;">
            <label for="email"> First_Name:</label>
            <input type="text" class="form-control" name="first_name" placeholder="first_name">
        </div>
        <div class="form-group" style="width: 17rem;">
            <label for="email"> Last_name:</label>
            <input type="text" class="form-control" name="last_name" placeholder="last_name" value>
        </div>
        <div class="form-group"style="width: 17rem;">
            <label for="email"> gender:</label>
            <input type="text" class="form-control" name="gender" placeholder="gender">
        </div>
        <div class="form-group"style="width: 17rem;">
            <label for="email"> email_addres:</label>
            <input type="text" class="form-control" name="email_address" placeholder="email_address" id>
        </div>
        <div class="form-group"style="width: 17rem;">
            <label for="email"> telphone_number:</label>
            <input type="text" class="form-control" name="telphone_number" placeholder="telphone_number"  >
        </div>
        <div class="form-group"style="width: 17rem;">
            <label for="email"> address:</label>
            <input type="text" class="form-control" name="guest_address" placeholder="adddress"  >
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <input type="submit" class="btn btn-success" value="submit">
    </form>
</body>
<?php include "Includes/footer.php"; ?>
</html>
