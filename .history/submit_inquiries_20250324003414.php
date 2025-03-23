<?php
include 'db_connect.php'; // Ensure database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? ''; 
    $email = $_POST['email'] ?? ''; 
    $inquiry_type = $_POST['inquiry_type'] ?? ''; 
    $message = $_POST['message'] ?? '';

    // Validate inputs (optional but recommended)
    if (empty($name) || empty($email) || empty($inquiry_type)) {
        die("Error: All fields are required.");
    }

    // Prepare SQL Query
    $stmt = $conn->prepare("INSERT INTO inquiries (name, email, inquiry_type, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $inquiry_type, $message);

    if ($stmt->execute()) {
        echo "Inquiry submitted successfully!";
        header("Location: inquiry_success.php"); // Redirect after submission
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    die("Invalid request.");
}
?>
