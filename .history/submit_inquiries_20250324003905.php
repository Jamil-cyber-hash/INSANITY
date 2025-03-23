<?php
include 'db_connect.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $sender_email = $_POST['sender_email'] ?? '';
    $inquiry_type = "General"; // Fixed value for general inquiries

    // Validate required fields
    if (empty($name) || empty($sender_email)) {
        die("Error: Name and Email are required.");
    }

    // Insert into the inquiries table
    $stmt = $conn->prepare("INSERT INTO inquiries (name, email, inquiry_type) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $sender_email, $inquiry_type);
    
    if ($stmt->execute()) {
        header("Location: inquiry_success.php"); // Redirect on success
        exit();
    } else {
        die("Error submitting inquiry: " . $conn->error);
    }

    $stmt->close();
    $conn->close();
}
?>
