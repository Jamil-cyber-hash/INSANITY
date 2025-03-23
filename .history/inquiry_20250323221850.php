<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function toggleObituaryFields() {
            let inquiryType = document.getElementById("inquiry_type").value;
            let obituaryFields = document.getElementById("obituary_fields");

            if (inquiryType === "Obituary") {
                obituaryFields.style.display = "block";
            } else {
                obituaryFields.style.display = "none";
            }
        }
    </script>
    <style>
    html, body {
        height: 100%;
    }

    .wrapper {
        min-height: 100vh; /* Ensures the page is at least the full height of the viewport */
        display: flex;
        flex-direction: column;
    }

    .content {
        flex: 1; /* Pushes the footer down */
    }

    .footer {
        background: #343a40;
        color: white;
        text-align: center;
        padding: 10px;
    }
</style>
</head>
<body>

<?php include 'header.php'; ?>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Send an Inquiry</h2>
            <form action="submit_inquiry.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Your Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="inquiry_type" class="form-label">Inquiry Type:</label>
                    <select id="inquiry_type" name="inquiry_type" class="form-select" required onchange="toggleObituaryFields()">
                        <option value="General">General Inquiry</option>
                        <option value="Obituary">Obituary Submission</option>
                    </select>
                </div>

                <!-- Obituary Fields (Initially Hidden) -->
                <div id="obituary_fields" style="display: none;">
                    <h5 class="mt-3">Obituary Details</h5>
                    <div class="mb-3">
                        <label for="deceased_name" class="form-label">Deceased's Full Name:</label>
                        <input type="text" id="deceased_name" name="deceased_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="date_of_passing" class="form-label">Date of Passing:</label>
                        <input type="date" id="date_of_passing" name="date_of_passing" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Obituary Message:</label>
                        <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit Inquiry</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php include 'footer.php'; ?>
</body>
</html>
