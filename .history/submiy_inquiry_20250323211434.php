<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $inquiry_type = $_POST['inquiry_type'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO inquiries (name, email, inquiry_type, message, status) VALUES (?, ?, ?, ?, 'Pending')");
    $stmt->bind_param("ssss", $name, $email, $inquiry_type, $message);
    $stmt->execute();

    echo "Inquiry submitted!";
}
?>
