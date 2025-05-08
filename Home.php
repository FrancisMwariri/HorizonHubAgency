<?php
$title = "Home - Horizon Hub Agency";
include 'src/includes/header.inc.php';

ob_start();
?>

<!-- Hero Section -->
<div style="
 background-image: url('src/images/thar-desert-rajasthan-india.jpg');
 background-position: center;
    background-size: cover;
" class="w-[90%] mx-auto flex flex-col items-center text-center py-16 text-white  mt-2">
    <h1 class="text-3xl font-bold leading-tight text-black">
        Your Gateway to Global Opportunities<br>for Kenyan Talent.
    </h1>
    <h2 class="text-2xl font-semibold mt-4">
        Empowering Kenyan Talent Globally!
    </h2>
    <p class="text-sm mt-6 max-w-xl">
        Connecting Kenyan professionals to global job markets with opportunities, skills enhancement, and full support. Find top talent or your next career move with us.
    </p>
</div>

<!-- Welcome Section -->
<div style="margin-top: 20px;" class="w-[90%] mx-auto flex flex-col md:flex-row items-center gap-8 mt-24">
    <!-- Content -->
    <div class="w-full md:w-1/2 flex flex-col gap-4">
        <h2 class="text-2xl font-bold text-red-600">Welcome to HHA</h2>
        <p class="text-gray-700 text-[15px] font-medium">
            Welcome to Horizon Hub Agency, established in 2023 .
        </p>
        <p class="text-gray-700 text-[15px] font-medium">
            As a Kenyan recruitment agency, we are dedicated to connecting Kenyan talent with global opportunities.
        </p>
        <p class="text-gray-700 text-[15px] font-medium">
            We empower professionals and individuals across various skill levels by linking them with international job placements, enhancing their skills, and providing comprehensive migration support services.
        </p>
        <p class="text-gray-700 text-[15px] font-medium">
            As the bridge between Kenyan talent and the international labor market, HHA focuses on securing employment for our workforce abroad and branding Kenyan professionals as highly skilled and reliable on the global stage.
        </p>
    </div>
    <!-- Image -->
    <div class="w-full md:w-1/2">
        <img src="src/images/front-view-lawyer-working-with-documents.jpg" alt="Welcome Image" class="rounded-md shadow-md h-[300px] w-full object-cover">
    </div>

</div>

<!-- Services Section -->
<div class="w-[90%] mx-auto py-12 bg-gray-100 rounded-lg">
    <!-- Services Intro -->
    <div class="bg-white p-8 mb-8  rounded hover:scale-105 transition-transform shadow-md text-center mx-auto max-w-3xl">
        <h2 class="text-green-600 font-bold text-2xl mb-4">Services</h2>
        <p class="text-gray-700 text-sm">
            DPA works closely with government departments, stakeholders, and employers to
            ensure the success of our diaspora advancement initiatives.
        </p>
    </div>


    <!-- Services Cards -->
    <div class="flex flex-wrap justify-center gap-8">
        <!-- Service 1 -->
        <div class="bg-white rounded-lg shadow-md p-6 w-64 hover:scale-105 transition-transform">
            <img src="src/images/3d-travel-icon-with-globe.jpg" alt="Service Icon" class="w-10 h-10 mb-4 ">
            <h3 class="text-red-600 font-bold text-lg mb-2">Kenyan Labour Branding</h3>
            <p class="text-gray-600 text-sm">
                Position Kenya as a leading labour market brand and prepare Kenyan talent for global opportunities.
            </p>
        </div>

        <!-- Service 2 -->
        <div class="bg-white rounded-lg shadow-md p-6 w-64 hover:scale-105 transition-transform">
            <img src="src/images/3d-travel-icon-with-globe.jpg" alt="Service Icon" class="w-10 h-10 mb-4 ">
            <h3 class="text-red-600 font-bold text-lg mb-2">Labor Market Information</h3>
            <p class="text-gray-600 text-sm">
                Provide up-to-date labor market insights to help Kenyan talent explore job opportunities abroad.
            </p>
        </div>

        <!-- Service 3 -->
        <div class="bg-white rounded-lg shadow-md  p-6 w-64 hover:scale-105 transition-transform">
            <img src="src/images/3d-travel-icon-with-globe.jpg" alt="Service Icon" class="w-10 h-10 mb-4 ">
            <h3 class="text-red-600 font-bold text-lg mb-2">Job Placement Services</h3>
            <p class="text-gray-600 text-sm">
                Create direct linkages between foreign employers and Kenyan talent via our Kazi Maju platform.
            </p>
        </div>

        <!-- Service 4 -->
        <div class="bg-white rounded-lg shadow-md p-6 w-64 hover:scale-105 transition-transform">
            <img src="src/images/3d-travel-icon-with-globe.jpg" alt="Service Icon" class="w-10 h-10 mb-4 ">
            <h3 class="text-red-600 font-bold text-lg mb-2">Migration Services</h3>
            <p class="text-gray-600 text-sm">
                Facilitate pre-migration training and assist with documentation, visa interviews, and travel preparations.
            </p>
        </div>
    </div>

    <div class="text-center mt-10">
        <a href="Services.php" class="inline-block px-6 py-3 bg-red-600 text-white font-bold rounded-md hover:bg-red-700 transition">Learn More</a>
    </div>
</div>
<?php
$content = ob_get_clean();
include 'src/includes/app.inc.php';
include 'src/includes/Footer.inc.php';
?>