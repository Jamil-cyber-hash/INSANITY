<?php
include 'submit_form.php'; // Database connection

// Set how many obituaries per page
$limit = 6; 

// Get current page number, default to 1 if not set
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Search functionality
$search = isset($_GET['search']) ? $_GET['search'] : "";
$searchQuery = "";

if (!empty($search)) {
    $searchQuery = "WHERE deceased_first_name LIKE '%$search%' 
                    OR deceased_middle_name LIKE '%$search%' 
                    OR deceased_last_name LIKE '%$search%'";
}

// Get total number of obituaries for pagination
$totalQuery = "SELECT COUNT(*) as total FROM obituaries $searchQuery";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalPages = ceil($totalRow['total'] / $limit);

// Fetch paginated results
$sql = "SELECT * FROM obituaries $searchQuery ORDER BY submitted_at DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obituaries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Obituaries</h2>

    <!-- Search Form -->
    <form method="GET" action="obituaries.php" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by name..." value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <div class="row">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top" alt="Obituary Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['deceased_first_name'] . " " . $row['deceased_middle_name'] . " " . $row['deceased_last_name']); ?></h5>
                        <p class="card-text"><strong>Date of Passing:</strong> <?php echo htmlspecialchars($row['date_of_passing']); ?></p>
                        <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <!-- Pagination -->
    <nav>
        <ul class="pagination justify-content-center">
            <?php if ($page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="obituaries.php?page=<?php echo ($page - 1) . "&search=" . $search; ?>">Previous</a>
                </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                    <a class="page-link" href="obituaries.php?page=<?php echo $i . "&search=" . $search; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
                <li class="page-item">
                    <a class="page-link" href="obituaries.php?page=<?php echo ($page + 1) . "&search=" . $search; ?>">Next</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>

</div>

<?php include 'footer.php'; ?>

</body>
</html>

<?php
$conn->close();
?>
