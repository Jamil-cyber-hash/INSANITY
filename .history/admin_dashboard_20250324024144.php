<?php
include 'admin_header.php'; // Include your admin navigation/header
include 'db_connect.php'; // Database connection

// Fetch General Inquiries
$inquiry_sql = "SELECT * FROM inquiries ORDER BY submitted_at DESC";
$inquiries = $conn->query($inquiry_sql);

// Fetch All Obituaries
$obituary_sql = "SELECT * FROM obituaries ORDER BY submitted_at DESC";
$all_obituaries = $conn->query($obituary_sql);

// Fetch Pending Obituaries
$pending_obituaries_sql = "SELECT * FROM obituaries WHERE status = 'Pending' ORDER BY date_of_passing DESC";
$pending_obituaries = $conn->query($pending_obituaries_sql);
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
    <h2 class="text-center mb-4">Admin Dashboard</h2>

    <!-- Bootstrap Tabs -->
    <ul class="nav nav-tabs" id="adminTabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#inquiries">General Inquiries</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#obituaries">Obituary Submissions</a>
        </li>
    </ul>

    <div class="tab-content mt-3">
        <!-- General Inquiries Tab -->
        <div class="tab-pane fade show active" id="inquiries">
            <h3>General Inquiries</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Inquiry Type</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $inquiries->fetch_assoc()) { ?>
                        <tr>
                            <td><?= htmlspecialchars($row['name']); ?></td>
                            <td><?= htmlspecialchars($row['email']); ?></td>
                            <td><?= htmlspecialchars($row['inquiry_type']); ?></td>
                            <td><?= htmlspecialchars($row['message']); ?></td>
                            <td><?= $row['submitted_at']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Obituary Submissions Tab -->
        <div class="tab-pane fade" id="obituaries">
            <h3>Obituary Submissions</h3>
            <h2>Pending Obituaries</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date of Passing</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $pending_obituaries->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['deceased_first_name'] . ' ' . $row['deceased_last_name']) ?></td>
                        <td><?= htmlspecialchars($row['date_of_passing']) ?></td>
                        <td><?= htmlspecialchars($row['description']) ?></td>
                        <td>
                            <form action="approve_obituary.php" method="POST">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" name="action" value="approve" class="btn btn-success">Approve</button>
                                <button type="submit" name="action" value="reject" class="btn btn-danger">Reject</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php $conn->close(); ?>
