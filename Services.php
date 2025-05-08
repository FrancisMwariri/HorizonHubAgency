<?php
$title = "Services - Horizon Hub Agency";
include 'src/includes/header.inc.php';

ob_start();
?>
<!-- Hero Section -->
<section
    style="
 background-image: url('src/images/front-view-lawyer-working-with-documents.jpg');
 background-position: center;
    background-size: cover;
" class="relative w-[90%] mx-auto h-[60vh] bg-cover bg-center flex items-center justify-center" style="background-image: url('../src/images/services-hero.jpg');">
    <div class=bg-opacity-50 w-full h-full absolute top-0 left-0"></div>
    <div class="relative z-10 text-white text-center">
        <h1 class="text-4xl font-bold">Services</h1>
    </div>
</section>

<!-- Introduction Section -->
<section class="w-[90%] mx-auto my-16">
    <div class="text-center">
        <p class="text-sm uppercase tracking-wide text-gray-500 mb-2">Our Services</p>
        <h2 class="text-2xl md:text-3xl font-bold text-red-600 mb-6">
            Empowering Kenyan Talent for Global Opportunities.
        </h2>
        <p class="text-gray-600 text-sm md:max-w-2xl mx-auto">
            At Horizon Hub Agency (HHA), we work closely with industry stakeholders and international employers to prepare and position Kenyan talent for success in the global workforce.
        </p>
    </div>
</section>

<!-- Services Cards Section -->
<section class="w-[90%] mx-auto mb-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Service 1 -->
    <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
        <div class="text-green-600 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 4v16m8-8H4"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-red-600 mb-2">Pre-Migration Training</h3>
        <p class="text-gray-600 text-sm">
            Facilitate training programs to equip talent with the necessary skills, documentation, and cultural knowledge before working abroad.
        </p>
    </div>

    <!-- Service 2 -->
    <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
        <div class="text-green-600 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-red-600 mb-2">Global Labour Market Information</h3>
        <p class="text-gray-600 text-sm">
            Provide up-to-date international labour market data, opportunities, and guidance for Kenyan job seekers worldwide.
        </p>
    </div>

    <!-- Service 3 -->
    <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
        <div class="text-green-600 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8 16l-4-4m0 0l4-4m-4 4h16"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-red-600 mb-2">Job Placement Assistance</h3>
        <p class="text-gray-600 text-sm">
            Connect Kenyan professionals with international employers through our recruitment networks and job matching systems.
        </p>
    </div>

    <!-- Service 4 -->
    <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
        <div class="text-green-600 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 5l7 7-7 7"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-red-600 mb-2">Worker Registry System</h3>
        <p class="text-gray-600 text-sm">
            Manage a comprehensive database of Kenyan workers for efficient support, monitoring, and future placement opportunities.
        </p>
    </div>

    <!-- Service 5 -->
    <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
        <div class="text-green-600 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 7h18M3 12h18M3 17h18"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-red-600 mb-2">Kenyan Talent Branding</h3>
        <p class="text-gray-600 text-sm">
            Promote Kenya as a competitive source of skilled and professional talent to global employers through targeted outreach and branding.
        </p>
    </div>
</section>
<?php
$content = ob_get_clean();
include 'src/includes/app.inc.php';
include 'src/includes/Footer.inc.php';

?>