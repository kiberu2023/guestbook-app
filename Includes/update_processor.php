<?php
    if ($_SERVER["REQUEST_METHOD"] =="POST") {
        $ID= $_POST["id"];
        $first_name= $_POST["first_name"];
        $last_name= $_POST["last_name"];
        $gender= $_POST["gender"];
        $email_address= $_POST["email_address"];
        $telphone_number= $_POST["telphone_number"];
        $address= $_POST["guest_address"];

        include "Includes/dbconnect.php";
        $query = "UPDATE guest_list SET first_name= ?, last_name=?, gender=?,
         email_address=?, telphone_number=?,guest_address=?, WHERE id=?";

        $stmt=mysqli_prepare($connection,$query);

        mysqli_stmt_bind_param($stmt,"ssssssi", $first_name,$last_name,$gender,$email_address,$telphone_number,$address,$ID);
        
        mysqli_stmt_execute($stmt);
        echo "update was successful";
        exit();

    }
?>