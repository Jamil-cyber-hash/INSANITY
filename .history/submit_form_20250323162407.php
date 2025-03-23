<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli(hostname: "localhost", username: "root", password: "", database: "funeral_service");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $sender_name = $_POST['sender_name'];
    $sender_email = $_POST['sender_email'];
    $deceased_first_name = $_POST['deceased_first_name'];
    $deceased_middle_name = !empty($_POST['deceased_middle_name']) ? $_POST['deceased_middle_name'] : null;
    $deceased_last_name = $_POST['deceased_last_name'];
    $gender = $_POST['gender'];
    $date_of_passing = $_POST['date_of_passing'];
    $description = $_POST['description'];

    // Handle file upload
    $target_dir = "uploads/"; // Folder where the file will be saved
    $target_file = $target_dir . basename(path: $_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(string: pathinfo(path: $target_file, flags: PATHINFO_EXTENSION));

    // Check if the folder exists; create it if not
    if (!file_exists(filename: $target_dir)) {
        mkdir(directory: $target_dir, permissions: 0777, recursive: true);
    }

    // Allow only specific image formats
    $allowed_types = ["jpg", "jpeg", "png", "gif"];
    if (!in_array(needle: $imageFileType, haystack: $allowed_types)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk) {
        if (move_uploaded_file(from: $_FILES["image"]["tmp_name"], to: $target_file)) {
            // Prepare SQL statement
            $stmt = $conn->prepare(query: "
                INSERT INTO obituaries 
                (sender_name, sender_email, deceased_first_name, deceased_middle_name, deceased_last_name, gender, date_of_passing, description, image) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->bind_param(
                "sssssssss",
                $sender_name,
                $sender_email,
                $deceased_first_name,
                $deceased_middle_name,
                $deceased_last_name,
                $gender,
                $date_of_passing,
                $description,
                $target_file
            );

            if ($stmt->execute()) {
                // Redirect to the homepage after successful submission
                header(header: "Location: pang.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close();
}
?>
