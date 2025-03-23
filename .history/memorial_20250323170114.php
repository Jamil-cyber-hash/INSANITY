<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorial Planning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/memorial.css">
</head>
<body>

<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container text-center">
        <h1 class="display-4">Memorial Planning</h1>
        <p class="lead">Create a Lasting Tribute for Your Loved One</p>
    </div>
</section>

<!-- Content Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="imaages/poppy2.jpg" alt="Memorial Service" class="img-fluid rounded shadow-sm animate-fade">
        </div>
        <div class="col-md-6">
            <h2 class="section-title">Our Memorial Planning Services</h2>
            <p>
                Memorial services allow families and friends to come together to celebrate the life of a loved one. 
                Our team will work with you to create a personalized and meaningful tribute.
            </p>
            <ul class="list-unstyled">
                <li>🌹 Personalized memorial ceremonies</li>
                <li>🌹 Assistance with choosing readings and music</li>
                <li>🌹 Tribute video creation</li>
            </ul>
            <a href="#inquiry" class="btn btn-secondary mt-3 animate-btn">Learn More</a>
        </div>
    </div>
</div>

<!-- Additional Info Section -->
<section class="info-section py-5">
    <div class="container text-center">
        <h2 class="section-title">Why Plan a Memorial?</h2>
        <p class="lead">
            Memorial services offer a chance to reflect, heal, and honor the memory of a loved one.
            Planning a memorial allows for personalization and ensures that the celebration of life is meaningful.
        </p>
        <a href="#inquiry" class="btn btn-outline-dark mt-3 animate-btn">Get Started</a>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <h2 class="section-title text-center">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button collapsed" type="button" aria-expanded="false" aria-controls="faq1" onclick="toggleAccordion('faq1')">
                        How do I personalize a memorial service?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faqHeading1">
                    <div class="accordion-body">
                        Personalization can include music, readings, personal mementos, and tribute videos. 
                        Our team will guide you through the process to make it special.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" aria-expanded="false" aria-controls="faq2" onclick="toggleAccordion('faq2')">
                        Can the memorial be held at a specific location?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faqHeading2">
                    <div class="accordion-body">
                        Yes, we can help you arrange a memorial at a meaningful location such as a home, garden, or place of worship.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JS to manually handle open/close -->
<script>
    function toggleAccordion(targetId) {
        const target = document.getElementById(targetId);

        // Close other open panels first
        document.querySelectorAll('.accordion-collapse').forEach(panel => {
            if (panel !== target && panel.classList.contains('show')) {
                new bootstrap.Collapse(panel).hide();
            }
        });

        // Toggle the target panel
        if (target.classList.contains('show')) {
            new bootstrap.Collapse(target).hide(); // Close if already open
        } else {
            new bootstrap.Collapse(target).show(); // Open if closed
        }
    }
</script>



<!-- Testimonials Section -->
<section class="testimonials py-5">
    <div class="container text-center">
        <h2 class="section-title">What Families Are Saying</h2>
        <p class="lead">"The memorial service was a beautiful tribute to our loved one. Everything was handled with care."</p>
        <p>- The Johnson Family</p>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Funeral Service. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
