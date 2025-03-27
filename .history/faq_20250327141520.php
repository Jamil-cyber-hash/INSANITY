
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
<?php include 'header.php'; ?>
<body style="background-image: url('imaages/img.jpg'); background-size: cover; background-position: center;">

    <h1 class="text-center text-primary mt-4">Frequently Asked Questions</h1>
    <p class="text-center">Find answers to common questions about our services.</p>

    <div class="card p-4 mx-auto" style="max-width: 800px; background: rgba(255, 255, 255, 0.9); padding: 20px;
    background: rgba(0, 0, 0, 0.6); /* Dark background for readability */">
        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        How do I plan a funeral service?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our funeral directors will guide you through the process, from choosing a service type to handling paperwork and arrangements.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        What should I do immediately after a loved one passes?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Contact emergency services if needed. Then, notify close family and friends. A funeral home can assist with next steps, including transportation and arrangements.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        Can I pre-plan a funeral?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes. Pre-planning allows you to choose arrangements in advance, easing the burden on your loved ones.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        What are my options for cremation?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We offer direct cremation, memorial services, and urn selection. Contact us for more details on personalized options.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="PANG.php" class="btn btn-primary">Back to Home</a>
        <a href="grief_support.php" class="btn btn-secondary">Go to Grief Support</a>
    </div>

   
<?php include 'footer.php'; ?>
</body>
</html>
