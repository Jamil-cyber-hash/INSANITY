<?php
include 'db_connect.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $sender_email = $_POST['sender_email'] ?? '';
    $deceased_first_name = $_POST['deceased_first_name'] ?? '';
    $deceased_middle_name = $_POST['deceased_middle_name'] ?? '';
    $deceased_last_name = $_POST['deceased_last_name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $date_of_passing = $_POST['date_of_passing'] ?? '';
    $description = $_POST['description'] ?? '';

    // File Upload Handling
    $target_dir = "uploads/"; // Ensure this folder exists
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $image_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;
    $image_path = ""; // Store in DB

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image_path = $target_file;
    } else {
        die("Error uploading image.");
    }

    // Insert obituary data into the database
    $stmt = $conn->prepare("INSERT INTO obituaries (sender_name, sender_email, deceased_first_name, deceased_middle_name, deceased_last_name, gender, date_of_passing, description, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $name, $sender_email, $deceased_first_name, $deceased_middle_name, $deceased_last_name, $gender, $date_of_passing, $description, $image_path);

    if ($stmt->execute()) {
        header("Location: obituary_success.php"); // Redirect on success
        exit();
    } else {
        die("Error submitting obituary: " . $conn->error);
    }

    $stmt->close();
    $conn->close();
}
?>
