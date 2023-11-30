<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include "Includes/nav.php";?>
<style>
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
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>
<?php include "Includes/footer.php"; ?>
</html>
