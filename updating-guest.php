<!DOCTYPE html>
<html>
<head>
    <title><b>delete</b></title> <!-- Fixed the typo in "tittle" to "title" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="bootstrap.min.js"></script> <!-- Corrected the script source to "bootstrap.min.js" -->
    <?php include "Includes/dbconnect.php"; ?>
</head>
<body>
    <?php include "Includes/nav.php"; ?>
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
    
    <?php
        if(isset($_GET["id"]) && is_numeric($_GET['id'])) {
            $ID = $_GET['id'];

            $query = "SELECT * FROM guest_list WHERE id=?";
            $stmt = mysqli_prepare($connection, $query);
            mysqli_stmt_bind_param($stmt, "i", $ID);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $data = mysqli_fetch_assoc($result);

            if($data) { // Check if data is found
    ?>
    <form action="includes/form_processor.php" method="post" style="margin-top: 5rem;">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        
        <div class="form-group" style="width: 17rem;">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $data['first_name']; ?>">
        </div>
        
        <div class="form-group" style="width: 17rem;">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $data['last_name']; ?>">
        </div>
        
        <div class="form-group" style="width: 17rem;">
            <label for="gender">Gender:</label>
            <input type="text" class="form-control" name="gender" placeholder="Gender" value="<?php echo $data['gender']; ?>">
        </div>
        
        <div class="form-group" style="width: 17rem;">
            <label for="email_address">Email Address:</label>
            <input type="text" class="form-control" name="email_address" placeholder="Email Address" value="<?php echo $data['email_address']; ?>">
        </div>
        
        <div class="form-group" style="width: 17rem;">
            <label for="telphone_number">Telephone Number:</label>
            <input type="text" class="form-control" name="telphone_number" placeholder="Telephone Number" value="<?php echo $data['telphone_number']; ?>">
        </div>
        
        <div class="form-group" style="width: 17rem;">
            <label for="address">Address:</label>
            <input type="text" class="form-control" name="guest_address" placeholder="Address" value="<?php echo $data['guest_address']; ?>">
        </div>

        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        
        <button type="submit" class="btn btn-success">Submit</button>
    </form> 
    <?php
            } else {
                echo "<p>No data found for the provided ID.</p>";
            }
        } else {
            echo "<p>Invalid ID provided.</p>";
        }
    ?>
</body>
<?php include "Includes/footer.php"; ?>
</html>
