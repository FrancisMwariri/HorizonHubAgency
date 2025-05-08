<?php
$title = "Job Listings - Horizon Hub Agency";
include 'src/includes/header.inc.php';

ob_start();
?>
<!-- Hero Section -->
<section
    style="background-image: url('src/images/portrait-professional-elegant-businessman.jpg'); background-position: center; background-size: cover;"
    class="py-16 w-[90%] mx-auto">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold text-white mb-6">Explore Opportunities</h1>
        <p class="text-lg text-white max-w-2xl mx-auto">
            Welcome to the Job Listings page, your trusted platform for discovering international employment opportunities curated for Kenyan professionals.
        </p>
    </div>
</section>

<!-- Steps Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-red-600 mb-12">Your Path to Success!</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="p-6 bg-white shadow-md rounded-md">
                <h3 class="text-green-600 text-2xl font-bold mb-4">Step 1</h3>
                <h4 class="text-xl font-semibold mb-2">Discover Opportunities</h4>
                <p class="text-gray-600">
                    Browse a world of curated international job openings aligned with your qualifications and goals.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="p-6 bg-white shadow-md rounded-md">
                <h3 class="text-green-600 text-2xl font-bold mb-4">Step 2</h3>
                <h4 class="text-xl font-semibold mb-2">Apply and Connect</h4>
                <p class="text-gray-600">
                    Submit your applications and get connected with trusted international recruitment partners.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="p-6 bg-white shadow-md rounded-md">
                <h3 class="text-green-600 text-2xl font-bold mb-4">Step 3</h3>
                <h4 class="text-xl font-semibold mb-2">Start Your Global Career</h4>
                <p class="text-gray-600">
                    Finalize your documentation and begin your international journey with confidence.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How to Apply Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <div class="max-w-xl">
            <h2 class="text-2xl font-bold text-red-600 mb-4">How to Apply</h2>
            <p class="text-gray-700 mb-6">
                Ready to take the next step? Visit our <strong>Kazi Majuu</strong> portal for detailed instructions on how to apply for open positions and prepare for life abroad.
            </p>
            <a href="Kazi Majuu/Register.php" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg">
                Explore Now for a Brighter Future
            </a>
        </div>

        <div class="mt-10 md:mt-0">
            <img src="../src/images/job-search-process.jpg" alt="How to Apply" class="rounded-lg shadow-lg w-full max-w-md">
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="py-16 bg-blue-900 text-white text-center">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-6">
            Join us in our mission to empower Kenyan professionals globally and shape a brighter future.
        </h2>
        <p class="max-w-3xl mx-auto text-lg">
            Together, we can unlock the full potential of the Kenyan diaspora and build a stronger, more connected nation.
        </p>
    </div>
</section>

<!-- Disclaimer -->
<div class="w-[90%] mx-auto text-center mt-8">
    <p class="text-xs text-gray-400">
        Horizon Hub Agency is an independent organization and is not affiliated with any government department or agency.
    </p>
</div>

<?php
$content = ob_get_clean();
include 'src/includes/app.inc.php';
include 'src/includes/Footer.inc.php';
?>