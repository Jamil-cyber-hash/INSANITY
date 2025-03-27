<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];
    $marital_status = $_POST["marital_status"];
    $occupation = $_POST["occupation"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $preferred_language = $_POST["preferred_language"];
    $religion = $_POST["religion"];
    $burial_cremation = $_POST["burial_cremation"];
    $funeral_home = $_POST["funeral_home"];
    $cemetery_site = $_POST["cemetery_site"];
    $service_details = $_POST["service_details"];

    $form_submitted = true; // Flag to show the submitted information
} else {
    $form_submitted = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Pre-Plan?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'header.php'; ?>

<!-- Pre-Plan Information -->
<div class="container mt-5">
    <h1 class="text-center">Why Pre-Plan Your Funeral?</h1><br>
    <p>Pre-planning a funeral helps relieve the emotional and financial burden on your loved ones. Here are some key benefits:</p>
    
    <ul>
        <li><strong>Financial Security:</strong> Lock in prices and avoid inflation.</li>
        <li><strong>Peace of Mind:</strong> Ensure your wishes are respected.</li>
        <li><strong>Reduced Stress:</strong> Give your family time to grieve without extra worries.</li>
        <li><strong>Personal Choice:</strong> Customize your arrangements.</li>
    </ul>
    
    <p>Start planning today to secure your family's future.</p>

    <!-- Pre-Plan Now Button -->
    <?php if (!$form_submitted): ?>
        <div class="text-center mt-4">
            <button class="btn btn-primary" onclick="showForm()">Pre-Plan Now</button>
        </div>

        <!-- Pre-Planning Form -->
        <div id="prePlanForm" style="display: none;" class="mt-4">
            <h4 class="text-center">Fill in Your Personal Information</h4>
            <form method="POST" action="">
                <div class="mb-3">
                    <label>Full Name:</label> <br>
                    <br>
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required><br>
                    <input type="text" name="middle_name" class="form-control" placeholder="Middle Name (Optional)"><br>
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required><br>
                </div>
                <div class="mb-3">
                    <label>Date of Birth:</label>
                    <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Gender:</label>
                    <select name="gender" class="form-control" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Nationality:</label>
                    <input type="text" name="nationality" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Marital Status:</label>
                    <select name="marital_status" class="form-control">
                        <option value="">Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Divorced">Divorced</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Occupation:</label>
                    <input type="text" name="occupation" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Phone Number:</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email Address:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Preferred Language for Ceremony:</label>
                    <input type="text" name="preferred_language" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Religious or Cultural Considerations:</label>
                    <input type="text" name="religion" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Burial or Cremation Preference:</label>
                    <input type="text" name="burial_cremation" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Preferred Funeral Home:</label>
                    <input type="text" name="funeral_home" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Cemetery or Cremation Site Choice:</label>
                    <input type="text" name="cemetery_site" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Service Details (Music, Prayers, Eulogies, etc.):</label>
                    <textarea name="service_details" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit Pre-Plan</button>
            </form>
        </div>
    <?php else: ?>
        <h3 class="text-center mt-4">Pre-Plan Submitted Successfully</h3>
        <p class="text-center">Thank you for pre-planning. We will contact you soon.</p>
    <?php endif; ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showForm() {
        document.getElementById('prePlanForm').style.display = 'block';
    }
</script>

 
<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Funeral Service. All rights reserved.</p>
</footer>
</body>
</html>
