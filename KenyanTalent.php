<?php
$title = "Kenyan Talent - Horizon Hub Agency";
include 'src/includes/header.inc.php'; // Loads main header (logo + nav)

ob_start();
?>

<!-- Hero Section -->
<div class="w-[90%] mx-auto h-64 bg-cover bg-center flex items-center justify-center text-white" style="background-color: #1F3B53;">
    <div class="text-center">
        <h1 class="text-4xl font-bold">Kenyan Talent</h1>
    </div>
</div>

<!-- Introduction Section -->
<section class="w-[90%] mx-auto my-16">
    <h3 class="text-sm font-semibold text-gray-600 uppercase mb-2">Nurture a Talent</h3>
    <h2 class="text-3xl font-bold text-red-600 mb-6">Why Hire Kenyan Talent?</h2>

    <p class="text-gray-700 leading-7 mb-6">
        Labor migration plays a vital role in socio-economic development for both origin and destination countries. It drives growth through skills transfer, remittances, increased productivity, foreign investment, and improved livelihoods. Kenya has long been recognized for its success in global outreach through exports and tourism. Now, it's time to spotlight the value of its workforce.
    </p>

    <p class="text-gray-700 leading-7">
        Kenyan professionals are known for their reliability, innovation, and global adaptability. By hiring Kenyan talent, you gain access to a skilled labor force equipped with a strong work ethic and readiness to excel in diverse environments.
    </p>
</section>

<!-- Skills Grid Section -->
<section class="w-[90%] mx-auto my-16 grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Education -->
    <div class="flex items-center gap-4 bg-black text-white p-4 rounded-lg">
        <i class="fas fa-graduation-cap text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Education</h4>
            <p class="text-sm">Competitive and growing education system.</p>
        </div>
    </div>

    <!-- Workforce -->
    <div class="flex items-center gap-4 bg-black text-white p-4 rounded-lg">
        <i class="fas fa-users text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Workforce</h4>
            <p class="text-sm">Well-trained and diverse labor pool.</p>
        </div>
    </div>

    <!-- Market Demand -->
    <div class="flex items-center gap-4 bg-black text-white p-4 rounded-lg">
        <i class="fas fa-chart-line text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Market Demand</h4>
            <p class="text-sm">Skills aligned with international labor markets.</p>
        </div>
    </div>

    <!-- Vocational Skills -->
    <div class="flex items-center gap-4 bg-red-600 text-white p-4 rounded-lg">
        <i class="fas fa-tools text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Vocational Skills</h4>
            <p class="text-sm">Rapidly growing vocational workforce.</p>
        </div>
    </div>

    <!-- Professionals -->
    <div class="flex items-center gap-4 bg-red-600 text-white p-4 rounded-lg">
        <i class="fas fa-briefcase text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Professionals</h4>
            <p class="text-sm">Known for professionalism and strong ethics.</p>
        </div>
    </div>

    <!-- Internet Access -->
    <div class="flex items-center gap-4 bg-red-600 text-white p-4 rounded-lg">
        <i class="fas fa-wifi text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Internet Access</h4>
            <p class="text-sm">Widespread connectivity and digital literacy.</p>
        </div>
    </div>

    <!-- Language Proficiency -->
    <div class="flex items-center gap-4 bg-green-600 text-white p-4 rounded-lg">
        <i class="fas fa-language text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Language</h4>
            <p class="text-sm">Fluency in English, Swahili, and Arabic.</p>
        </div>
    </div>

    <!-- Entrepreneurship -->
    <div class="flex items-center gap-4 bg-green-600 text-white p-4 rounded-lg">
        <i class="fas fa-lightbulb text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Entrepreneurship</h4>
            <p class="text-sm">Driven by innovation and entrepreneurial spirit.</p>
        </div>
    </div>

    <!-- Religious Tolerance -->
    <div class="flex items-center gap-4 bg-green-600 text-white p-4 rounded-lg">
        <i class="fas fa-praying-hands text-2xl" aria-hidden="true"></i>
        <div>
            <h4 class="font-bold">Diversity</h4>
            <p class="text-sm">Culturally diverse and religiously tolerant society.</p>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
echo $content;
include 'src/includes/Footer.inc.php'; // Shared footer
?>