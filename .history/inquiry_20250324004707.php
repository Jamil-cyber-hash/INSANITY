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

            obituaryFields.style.display = (inquiryType === "Obituary") ? "block" : "none";
        }
       

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('email').addEventListener('input', function() {
                const email = this.value;
                const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                const emailError = document.getElementById('email-error');

                if (emailPattern.test(email)) {
                    emailError.style.display = 'none';
                    this.classList.remove('invalid');
                    this.classList.add('valid');
                } else {
                    emailError.style.display = 'block';
                    this.classList.remove('valid');
                    this.classList.add('invalid');
                }
            });
        });
    </script>
<style>
    body {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Full screen height */
}

.container {
    flex-grow: 1; /* Makes sure the footer stays down */
}

</style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Send an Inquiry</h2>
        <form action="submit_general_inquiry.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                    <label for="sender_email" class="form-label">Sender's Email:</label>
                    <input type="email" class="form-control" id="sender_email" name="sender_email" required />
                    <span id="email-error" style="display: none; color: red;">Invalid email format.</span>
                </div>

            <div class="mb-3">
                <label for="inquiry_type" class="form-label">Inquiry Type:</label>
                <select id="inquiry_type" name="inquiry_type" class="form-select" required onchange="toggleObituaryFields()">
                    <option value="General">General Inquiry</option>
                    <option value="Obituary">Obituary Submission</option>
                </select>
            </div>
    </form>

    <form action="submit_obituary.php" method="POST" enctype="multipart/form-data">
            <!-- Obituary Fields (Initially Hidden) -->
            <div id="obituary_fields" style="display: none;">
                <h5 class="mt-3">Obituary Details</h5>

              
                <!-- Deceased's Info -->
                <div class="mb-3">
                    <label for="deceased_first_name" class="form-label">Deceased's First Name:</label>
                    <input type="text" class="form-control" id="deceased_first_name" name="deceased_first_name" required />
                </div>
                <div class="mb-3">
                    <label for="deceased_middle_name" class="form-label">Deceased's Middle Name (Optional):</label>
                    <input type="text" class="form-control" id="deceased_middle_name" name="deceased_middle_name" />
                </div>
                <div class="mb-3">
                    <label for="deceased_last_name" class="form-label">Deceased's Last Name:</label>
                    <input type="text" class="form-control" id="deceased_last_name" name="deceased_last_name" required />
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label>Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required />
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" />
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="Other" />
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="date_of_passing" class="form-label">Date of Passing:</label>
                    <input type="date" class="form-control" id="date_of_passing" name="date_of_passing" required />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Obituary Message:</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Picture:</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required />
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
