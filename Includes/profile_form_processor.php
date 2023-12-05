<?php
require_once "dbconnect.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the key "Telephone_number" exists in the $_POST array
    $Name = isset($_POST["Name"]) ? $_POST["Name"] : "";
    $telephone_number = isset($_POST["Telephone_number"]) ? $_POST["Telephone_number"] : "";

    // Check if the key "Avatar" exists in the $_FILES array
    $avatar_path = isset($_FILES['Avatar']['Avatar']) ? $_FILES['Avatar']['avatar'] : "";

    // Check if the avatar path is not empty before using file_get_contents
    if (!empty($avatar_path)) {
        $Avatar = file_get_contents($avatar_path);

        // Prepare SQL statement
        $query = "INSERT INTO profile (Name, Telephone_number, Avatar) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($connection, $query);

        // Check for errors in preparing the statement
        if (!$stmt) {
            die("Prepare failed: " . mysqli_error($connection));
        }

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sss", $Name, $telephone_number, $Avatar);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Profile inserted successfully.";
        } else {
            die("Execute failed: " . mysqli_error($connection));
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "img uploaded succesfully.";
    }
} else {
    echo "img not uploaded.";
}

// Close the database connection
mysqli_close($connection);
?>
