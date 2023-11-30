<!DOCTYPE html>
<html>
<head>
    <title>GUESTLIST</title>
    <?php include "Includes/head.html>"; ?>
</head>
<body>
    <div class ="row">
        <?php include "Includes/nav.php";?>
    </div>
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
                "</td>";
                echo "<td>";
                echo '<a href="delete-guest.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a>';
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
    <?php include "Includes/footer.php"; ?>
</html>


