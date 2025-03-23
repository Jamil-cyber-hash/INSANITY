<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch all pending inquiries
$inquiries = $conn->query("SELECT * FROM inquiries WHERE status = 'Pending'");

?>

<h2>Admin Dashboard</h2>

<h3>Pending Inquiries</h3>
<table border="1">
    <tr><th>Name</th><th>Email</th><th>Type</th><th>Message</th><th>Action</th></tr>
    <?php while ($row = $inquiries->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($row['name']); ?></td>
            <td><?= htmlspecialchars($row['email']); ?></td>
            <td><?= htmlspecialchars($row['inquiry_type']); ?></td>
            <td><?= htmlspecialchars($row['message']); ?></td>
            <td>
                <a href="approve_inquiry.php?id=<?= $row['id']; ?>">Approve</a> |
                <a href="delete_inquiry.php?id=<?= $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

<a href="logout.php">Logout</a>
