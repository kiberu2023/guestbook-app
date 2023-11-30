<?php
require_once "dbconnect.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $email_address = $_POST["email_address"];
    $telphone_number = $_POST["telphone_number"];
    $address = $_POST["guest_address"];

    // Prepare SQL statement
    $query = "INSERT INTO guest_list (first_name, last_name, gender, email_address, telphone_number, guest_address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    // Check for errors in preparing the statement
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($connection));
    }

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $first_name, $last_name, $gender, $email_address, $telphone_number, $address);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Data inserted successfully.";
    } else {
        die("Execute failed: " . mysqli_error($connection));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Form not submitted.";
}

// Close the database connection
mysqli_close($connection);
?>

