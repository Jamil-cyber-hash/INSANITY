<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/pang.css">
<link rel="stylesheet" href="css/form.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="PANG.php"><img src="imaages\logo.png" alt="" class="logo"><img src="imaages\logo2.png" alt="" class="logo2"></a>


         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Obituaries Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="obituariesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Obituaries
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="obituariesDropdown">
                        <li><a class="dropdown-item" href="PANG.php#obituaries">Recent Obituaries</a></li>
                        <li><a class="dropdown-item" href="search_obituaries.php">Search Obituaries</a></li>
                       
                    </ul>
                </li>

                <!-- Pre-Plan Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="preplanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pre-Plan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="preplanDropdown">
                        <li><a class="dropdown-item" href="pre-plan.php">Why Pre-Plan?</a></li>
                        <li><a class="dropdown-item" href="submit_preplan.php">Pre-Plan Options</a></li>
                    </ul>
                </li>

                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="services.php" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="burial_services.php">Burial Services</a></li>
                        <li><a class="dropdown-item" href="cremation.php">Cremation Services</a></li>
                        <li><a class="dropdown-item" href="memorial.php">Memorial Planning</a></li>
                    </ul>
                </li>

                <!-- Resources Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                        <li><a class="dropdown-item" href="grief_support.php">Grief Support</a></li>
                        <li><a class="dropdown-item" href="faq.php">FAQs</a></li>
                    </ul>
                </li>

                <!-- Inquiry Link -->
                <li class="nav-item">
                    <a class="nav-link" href="inquiry.php">Inquiry</a>
                </li>

                <!-- Contact Link -->
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>