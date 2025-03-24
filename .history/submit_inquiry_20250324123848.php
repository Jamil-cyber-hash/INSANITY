<?php
include 'db_connect.php'; // Ensure the connection file is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['sender_email'];
    $inquiry_type = $_POST['inquiry_type'];

    if ($inquiry_type === "General") {
        // ✅ Fetch message properly
        $message = isset($_POST['message']) ? trim($_POST['message']) : "";

        // ✅ Ensure the correct column name `inquiry_type`
        $stmt = $conn->prepare("INSERT INTO inquiries (name, email, inquiry_type, message, submitted_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssss", $name, $email, $inquiry_type, $message);
    } 
    else if ($inquiry_type === "Obituary") {
        $first_name = $_POST['deceased_first_name'];
        $middle_name = $_POST['deceased_middle_name'];
        $last_name = $_POST['deceased_last_name'];
        $gender = $_POST['gender'];
        $date_of_passing = $_POST['date_of_passing'];
        $description = $_POST['description'];
        

        // ✅ Handle File Upload Securely
        if (!empty($_FILES['image']['name'])) {
            $image = time() . "_" . basename($_FILES['image']['name']); // Unique file name
            $target_dir = "uploads/";
            $target_file = $target_dir . $image;

            if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                die("Error uploading image.");
            }
        } else {
            $image = null; // No image uploaded
        }

        // ✅ Insert into `obituaries` table
        $stmt = $conn->prepare("INSERT INTO obituaries (name, email, deceased_first_name, deceased_middle_name, deceased_last_name, gender, date_of_passing, description, image, status) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'Pending')");
        $stmt->bind_param("sssssssss", $name, $email, $first_name, $middle_name, $last_name, $gender, $date_of_passing, $description, $image);

    }

    // ✅ Execute query
    if ($stmt->execute()) {
        echo "<script>alert('Submission successful!'); window.location.href='PANG.php';</script>";
    } else {
        echo "<script>alert('Error submitting form. Please try again.'); window.location.href='PANG.php';</script>";
    }

    // ✅ Close connection
    $stmt->close();
    $conn->close();
}
?>
