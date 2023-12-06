<!DOCTYPE html>
<html>
<head>
    <title>GUESTLIST</title>
    <?php include "Includes/head.html>"; ?>
    <style>
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
    margin-right: 3px;
}

.footer p {
    margin: 5;
    font-size: x-large;
}
.body {
    font-weight: 900;
    display: flexbox;
    border-radius: 0cap;
    font-weight: bolder;
    background-color: brown;

}
</style>
</head>
<body class="background-clolor:red";>
<?php include "Includes/nav.php";?>
    <div class ="row">
    <?php include "Includes/cssfooter.php";?>
    <table class ="table table-striped table-bordered table-hover" style="margin-top: 3rem;">
        <thead>
            <tr>
                <th scope = "col">ID</th>
                <th scope = "col">first_name</th>
                <th scope = "col">last_name</th>
                <th scope = "col">gender</th>
                <th scope = "col">email_address</th>
                <th scope = "col">telphone_number</th>
                <th scope = "col">adddress</th>
            </tr>
        </thead>
        <tbody>
            <div class = "container">
                <div class="row">
    <?php
        require_once "includes/dbconnect.php";
        $query = "SELECT * FROM guest_list";
        $result = mysqli_query($connection, $query);
        
        if(!$result){ // Corrected the variable name to $result
            die("Query failed: " . mysqli_error($connection)); // Corrected the function name
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['email_address'] . "</td>";
                echo "<td>" . $row['telphone_number'] . "</td>";
                echo "<td>" . $row['guest_address'] . "</td>";
                echo "<td>";
                    echo '<a href="updating-guest.php?id=' . $row['id'] . '" class="btn btn-info">Update</a>';
                    
                    echo '<a href="Includes/delete_processor.php?id=' . $row['id'] . '">Delete</a>';
                "</td>";
            echo '</tr>';
            } 
        }
    ?>
        </tbody>
    </table>
                </div>
            </div>
    </body>
    <div class="row">
    <?php include "Includes/footer.php"; ?>
    </div>
</html>


