<?php
include 'db_connection.php'; // Make sure this file contains the correct database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['sender_email'];
    $inquiry_type = $_POST['inquiry_type'];

    if ($inquiry_type === "General") {
        $sql = "INSERT INTO inquiries (name, email, type) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $inquiry_type);
    } else if ($inquiry_type === "Obituary") {
        $first_name = $_POST['deceased_first_name'];
        $middle_name = $_POST['deceased_middle_name'];
        $last_name = $_POST['deceased_last_name'];
        $gender = $_POST['gender'];
        $date_of_passing = $_POST['date_of_passing'];
        $description = $_POST['description'];

        // Handle File Upload
        $image = $_FILES['image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        $sql = "INSERT INTO obituaries (name, email, first_name, middle_name, last_name, gender, date_of_passing, description, image) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $name, $email, $first_name, $middle_name, $last_name, $gender, $date_of_passing, $description, $image);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Submission successful!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error submitting form.'); window.location.href='index.php';</script>";
    }
    $stmt->close();
    $conn->close();
}
?>
