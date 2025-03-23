<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Funeral Service</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="pang.css">

</head>
<body>

<?php include 'header.php'; ?>

<!-- Section 1: Carousel (Introduction) -->
<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imaages\close-up-red-flowers-blury.jpg" class="d-block w-100" alt="Service 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Compassionate Funeral Services</h5>
                <p>Supporting families with dignity and care.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imaages\beautiful-blooming-flower-field-spring-season.jpg" class="d-block w-100" alt="Testimonial">
            <div class="carousel-caption d-none d-md-block">
                <h5>From them</h5>
                <p>"They handled everything with grace and respect."</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imaages\field-with-grass-violet-flowers-red.jpg" class="d-block w-100" alt="About Us">
            <div class="carousel-caption d-none d-md-block">
                <h5>About Our Company</h5>
                <p>Serving families in Teyvat since the dawn of time with care and integrity.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>


<div class="container mt-5" id="obituaries">
    <div class="section-title"><h1>Recent Obituaries</h1></div>
    <div class="row">
    <?php
            $conn = new mysqli(hostname: "localhost", username: "root", password: "", database: "funeral_service");
            $result = $conn->query(query: "SELECT * FROM obituaries ORDER BY date_of_passing DESC LIMIT 4");

            while ($row = $result->fetch_assoc()) {
                $full_name = $row['deceased_first_name'] . ' ' . 
                             ($row['deceased_middle_name'] ? $row['deceased_middle_name'] . ' ' : '') . 
                             $row['deceased_last_name'];
                
                echo '
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="' . $row['image'] . '" class="card-img-top" alt="' . $full_name . '" style="height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">' . $full_name . ' </h5>
                                
                                <p><strong>Date:</strong> ' . $row['date_of_passing'] . '</p>
                                <p>' . $row['description'] . '</p>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>
    </div>
</div>
<br>
<br><br>
<!-- Section 3: Testimonials or Services -->
<div class="container mt-5">
    <div class="section-title">Hear from our trusted Clients</div>
    <div class="row">
        <div class="col-md-6">
            <blockquote class="blockquote">
                <p class="mb-0">"Thank you for providing such compassionate service during our difficult time."</p>
                <br>
                <footer class="blockquote-footer">Monsieur Neuvillete</footer>
            </blockquote>
        </div>
        <div class="col-md-6">
            <blockquote class="blockquote">
                <p class="mb-0">"They handled every detail with care and respect."</p>
                <br>
                <footer class="blockquote-footer">Lumine Abyss</footer>
            </blockquote>
        </div>
    </div>
</div>






<!-- Info/Carousel Section -->
<!-- MAP + LOCATION INFO -->
<div class="container-fluid mt-5">
    <div class="row">
        <!-- Map Section -->
        <div class="col-md-9">
            <iframe 
                id="mapFrame"
                width="100%" 
                height="400" 
                src="https://www.openstreetmap.org/export/embed.html?bbox=124.63400512933733%2C8.480782004800178%2C124.63836640119554%2C8.4832146881446&amp;layer=mapnik&amp;marker=8.481998348397788%2C124.63618576526642" 
                style="border: 1px solid black;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>

        <!-- Info/Carousel Section -->
        <div class="col-md-3 bg-dark text-white p-4">
            <h5 class="mb-3" style="text-align: center;">OUR LOCATIONS</h5>
            <div id="infoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- First Location Info -->
                    <div class="carousel-item active" data-map="https://www.openstreetmap.org/export/embed.html?bbox=124.63400512933733%2C8.480782004800178%2C124.63836640119554%2C8.4832146881446&amp;layer=mapnik&amp;marker=8.481998348397788%2C124.63618576526642">
                        <p>Barangay Carmen</p>
                        <p>Max Suniel St.</p>
                        <p>Misamis Oriental, CDO 9000</p>
                        <p>Phone: 63+ 916-872-2938</p>
                    </div>
                    <!-- Second Location Info -->
                    <div class="carousel-item" data-map="https://www.openstreetmap.org/export/embed.html?bbox=111.40686035156251%2C22.088184924507612%2C114.91149902343751%2C24.402135566630744&amp;layer=mapnik&amp;marker=23.250178757002328%2C113.1591796875">
                        <p>Liyue</p>
                        <p>Wangsheng Region, Morax St.</p>
                        <p>Teyvat, 89800</p>
                        <p>Phone: +63 967-730-7493</p>
                    </div>
                </div>

                <div class="carousel-indicators" style="position: relative; bottom: -10px;">
                    <button type="button" data-bs-target="#infoCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#infoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    // Sync map with carousel
    document.getElementById('infoCarousel').addEventListener('slid.bs.carousel', function (event) {
        let newMap = event.relatedTarget.getAttribute('data-map');
        document.getElementById('mapFrame').src = newMap;
    });
</script>


<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Funeral Service. All rights reserved.</p>
</footer>

</body>
</html>
