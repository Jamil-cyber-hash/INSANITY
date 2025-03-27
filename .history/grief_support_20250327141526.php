
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grief Support</title>
    <link rel="stylesheet" href="grief.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
    body {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Full screen height */
}

.container {
    flex-grow: 1; /* Makes sure the footer stays down */
}
</head>
<body>
<?php include 'header.php'; ?>
<br>
<br><br>
<div class="content text-center">
    <h1 class="text-primary">Grief Support</h1>
    <p>We understand that grieving is a personal journey, and we're here to help.</p>

    <div class="card p-4 mb-4 bg-light text-dark">
        <h2 class="text-secondary">How to Cope with Grief</h2>
        <ul class="text-start">
            <li><strong>Talk to Someone:</strong> A trusted friend, family member, or professional counselor can provide support.</li>
            <li><strong>Join a Support Group:</strong> Connecting with others who have experienced loss can be comforting.</li>
            <li><strong>Take Care of Yourself:</strong> Proper rest, nutrition, and self-care can help during difficult times.</li>
            <li><strong>Seek Professional Help:</strong> Therapists and grief counselors specialize in helping individuals process loss.</li>
        </ul>
    </div>

    <a href="PANG.php" class="btn btn-primary">Back to Home</a>
    <a href="faq.php" class="btn btn-secondary">Go to FAQ</a>
</div>


<?php include 'footer.php'; ?>
</body>
</html>
