<?php
require_once "dbconnect.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $names = $_POST["names"];
    $email_address = $_POST["email_address"];
    $issue = $_POST["issue"];

    // Prepare SQL statement
    $query = "INSERT INTO contact_form (names, email_address, issue) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    // Check for errors in preparing the statement
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($connection));
    }

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sss", $names, $email_address, $issue);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "issue sent successfully.";
    } else {
        die("Execute failed: " . mysqli_error($connection));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "issue not submitted.";
}

// Close the database connection
mysqli_close($connection);
?>