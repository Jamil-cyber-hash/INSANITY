<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'], $_POST['action'])) {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action == "approve") {
        $status = "Approved";
    } else {
        $status = "Rejected";
    }

    $query = "UPDATE obituaries SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Obituary updated successfully!'); window.location.href='admin_dashboard.php';</script>";
    } else {
        echo "<script>alert('Error updating obituary.'); window.location.href='admin_dashboard.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
