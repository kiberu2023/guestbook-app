<?php
error_reporting(E_ALL);
ini_set('display_erorors', 'on');
require once "dbconnect.php";
$query ="INSERT INTRO registration (firstname,lastname, email, telephone,adress, "
    if (mysqli_stmt_execute($stmt)) {
        // header("Location:../display data.php?success=true");
        echo "Data inserted successfully.";
    } else {
        die("Execute failed:" . mysqli_error($connect));
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
?>