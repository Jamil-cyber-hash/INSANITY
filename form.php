<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Funeral Service</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="pang.css">
<link rel="stylesheet" href="form.css">

</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="PANG.php"><img src="imaages\logo.png" alt="" class="logo"><img src="imaages\logo2.png" alt="" class="logo2"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="PANG.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="form.php">OBITUARIES</a></li>
                <li class="nav-item"><a class="nav-link" href="#inquiry.php">INQUIRY</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">SERVICES</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5" id="add-obituary">
    <div class="section-title"><h1>Submit an Obituary</h1></div>
    <br>
    <form action="submit_form.php" method="POST" enctype="multipart/form-data">
        <!-- Sender's Info -->
        <div class="form-group">
            <label for="sender_name">Sender's Name:</label>
            <input type="text" class="form-control" id="sender_name" name="sender_name" required />
        </div>
        <div class="form-group">
            <label for="sender_email">Sender's Email:</label>
            <input type="email" class="form-control" id="sender_email" name="sender_email" required />
        </div>

        <script>
document.getElementById('sender_email').addEventListener('input', function() {
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
</script>

        <!-- Deceased's Info -->
        <div class="form-group">
            <label for="deceased_first_name">Deceased's First Name:</label>
            <input type="text" class="form-control" id="deceased_first_name" name="deceased_first_name" required />
        </div>
        <div class="form-group">
            <label for="deceased_middle_name">Deceased's Middle Name (Optional):</label>
            <input type="text" class="form-control" id="deceased_middle_name" name="deceased_middle_name" />
        </div>
        <div class="form-group">
            <label for="deceased_last_name">Deceased's Last Name:</label>
            <input type="text" class="form-control" id="deceased_last_name" name="deceased_last_name" required />
        </div>
<br>
        <!-- Gender -->
        <div class="form-group">
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
<br>
        <div class="form-group">
            <label for="date_of_passing">Date of Passing:</label>
            <input type="date" class="form-control" id="date_of_passing" name="date_of_passing" required />
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Upload Picture:</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required />
        </div>
        <br>
        <button type="submit" class="btn btn-dark">Submit Obituary</button>
    </form>
</div>





<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Funeral Service. All rights reserved.</p>
</footer>

</body>
</html>

