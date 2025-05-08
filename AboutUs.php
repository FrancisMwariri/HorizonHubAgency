<?php
$title = "About Us - Horizon Hub Agency";
include 'src/includes/header.inc.php';

ob_start();
?>
<!-- Hero Section -->
<section class="relative w-[90%] mx-auto h-[60vh] bg-cover bg-center flex items-center justify-center" style="background-image: url('../src/images/about-hero.jpg');">
    <div
        style="
 background-image: url('src/images/businessmen-handshake.jpg');
 background-position: center;
 background-size: cover;
"
        class=" bg-opacity-50 w-full h-full absolute top-0 left-0"></div>
    <div class="relative z-10 text-white text-center">
        <h1 class="text-4xl font-bold">About Us</h1>
    </div>
</section>

<!-- Overview Section -->
<section class="w-[90%] mx-auto my-16">
    <div class="flex flex-col md:flex-row gap-8 items-center">
        <!-- Overview Text -->
        <div class="md:w-1/2">
            <h2 class="text-red-600 text-2xl font-bold mb-4">Overview</h2>
            <p class="text-gray-700 mb-4 text-sm">
                Horizon Hub Agency (HHA) is a privately-run organization dedicated to empowering Kenyan talent for global opportunities.
                We serve as a centralized hub providing up-to-date job listings, valuable resources, and tailored support to help individuals navigate the complexities of international employment.
            </p>
            <p class="text-gray-700 mb-4 text-sm">
                Through strategic partnerships, HHA collaborates with international recruitment firms and reputable employers to ensure ethical placement practices and the professional success of our clients abroad.
            </p>
            <a href="Services.php" class="inline-block bg-green-600 text-white py-2 px-6 rounded-md font-semibold hover:bg-green-700 mt-4 transition">
                Discover More
            </a>
        </div>
        <!-- Overview Image -->
        <div class="md:w-1/2">
            <img src="src/images/plane-airport-sunset.jpg" alt="Overview Image" class="rounded-lg shadow-md object-cover w-full h-[300px]">
        </div>
    </div>
</section>

<!-- Partnerships Section -->
<section class="w-[90%] mx-auto my-16">
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold text-red-600">Our Global Network</h2>
        <p class="text-gray-600 text-sm mt-2 max-w-lg mx-auto">
            HHA works with trusted international recruiters, training institutions, and workforce development partners to support ethical labor migration and access to quality employment abroad.
        </p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 justify-center">
        <!-- Partner 1 -->
        <div class="bg-green-600 text-white rounded-lg p-6 text-center hover:scale-105 transition">
            <p>Global Talent Solutions</p>
        </div>
        <!-- Partner 2 -->
        <div class="bg-green-600 text-white rounded-lg p-6 text-center hover:scale-105 transition">
            <p>Skilled Jobs Connect</p>
        </div>
        <!-- Partner 3 -->
        <div class="bg-green-600 text-white rounded-lg p-6 text-center hover:scale-105 transition">
            <p>Global Workforce Alliance</p>
        </div>
        <!-- Partner 4 -->
        <div class="bg-green-600 text-white rounded-lg p-6 text-center hover:scale-105 transition">
            <p>Ethical Recruiters Network</p>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'src/includes/app.inc.php';
include 'src/includes/Footer.inc.php';
?>