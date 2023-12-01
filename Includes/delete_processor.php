<?php
        require_once "dbconnect.php";
        if(isset($_GET["id"]) && is_numeric($_GET['id'])) {
            $ID = $_GET['id'];

            $query = "DELETE FROM guest_list WHERE id=?";
            $stmt = mysqli_prepare($connection, $query);
            mysqli_stmt_bind_param($stmt, "i", $ID);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($connection);
            header("Location: ../guest-list.php");
            exit();
        } else {
            die("delete query failed.");
        }
 
    ?>