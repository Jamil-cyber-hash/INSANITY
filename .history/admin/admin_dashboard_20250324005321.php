<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connect.php';

// Fetch pending obituaries
$pending_query = "SELECT * FROM obituaries WHERE status = 'pending'";
$pending_result = $conn->query($pending_query);

// Fetch approved obituaries
$approved_query = "SELECT * FROM obituaries WHERE status = 'approved'";
$approved_result = $conn->query($approved_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Admin Dashboard</h2>
    <a href="admin_logout.php" class="btn btn-danger mb-3">Logout</a>

    <h3>Pending Obituaries</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of Passing</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $pending_result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['deceased_first_name'] . " " . $row['deceased_last_name']) ?></td>
                <td><?= htmlspecialchars($row['date_of_passing']) ?></td>
                <td>
                    <a href="approve_obituary.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">Approve</a>
                    <a href="delete_obituary.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h3>Approved Obituaries</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of Passing</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $approved_result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['deceased_first_name'] . " " . $row['deceased_last_name']) ?></td>
                <td><?= htmlspecialchars($row['date_of_passing']) ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
