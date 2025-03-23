<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Plan Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Pre-Plan Personal Information</h2>
        <form action="submit_preplan.php" method="POST">
            <!-- Personal Info -->
            <div class="mb-3">
                <label>Full Name:</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                <br>
                <input type="text" name="middle_name" class="form-control" placeholder="Middle Name (Optional)">
                <br>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                <br>
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
                <label>Current Address:</label>
                <input type="text" name="street" class="form-control" placeholder="Street">
                <input type="text" name="city" class="form-control" placeholder="City">
                <input type="text" name="state" class="form-control" placeholder="State">
                <input type="text" name="zip" class="form-control" placeholder="Zip Code">
                <input type="text" name="country" class="form-control" placeholder="Country">
            </div>

            <div class="mb-3">
                <label>Emergency Contact:</label>
                <input type="text" name="emergency_name" class="form-control" placeholder="Name">
                <input type="text" name="emergency_relationship" class="form-control" placeholder="Relationship">
                <input type="text" name="emergency_phone" class="form-control" placeholder="Phone">
                <input type="email" name="emergency_email" class="form-control" placeholder="Email">
            </div>

            <div class="mb-3">
                <label>Spouse Name:</label>
                <input type="text" name="spouse_name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Children (Name, Age, Contact):</label>
                <textarea name="children" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Parents' Names:</label>
                <textarea name="parents" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Siblings' Names:</label>
                <textarea name="siblings" class="form-control"></textarea>
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

    <?php
include 'footer.php'; 
?>
</body>
</html>
