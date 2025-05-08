<?php
$title = "Partnaship - Horizon Hub Agency";
include 'src/includes/header.inc.php';

ob_start();
?>
<section
    style="
 background-image: url('src/images/portrait-professional-business-people-working-together.jpg');
 background-position: center;
    background-size: cover;
" class=" py-16 w-[90%] mx-auto">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Partnerships</h1>
        <p class="text-lg text-white max-w-2xl mx-auto">
            Strategic Collaborations for Global Talent Placement
        </p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto grid justify-center text-center grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Partner 1 -->
        <div class="bg-green-800  p-6 rounded-lg text-white shadow-md">
            <h3 class="text-2xl font-bold mb-4 flex text-center justify-center">Diaspora-Focused Organizations</h3>
            <p class="mb-6 flex text-center justify-center">
                We collaborate with organizations that support the welfare and empowerment of Kenyans working abroad, helping to open doors to international opportunities.
            </p>
        </div>

        <!-- Partner 2 -->
        <div class="bg-green-800 p-6 rounded-lg text-white shadow-md">
            <h3 class="flex text-center justify-center text-2xl font-bold mb-4">Employment Support Entities</h3>
            <p class="mb-6 flex text-center justify-center">
                Our partnerships include regulatory-compliant employment and recruitment entities that promote ethical hiring and transparency.
            </p>
        </div>

        <!-- Partner 3 -->
        <div class="bg-green-800 p-6 rounded-lg text-white shadow-md">
            <h3 class="text-2xl font-bold mb-4 flex text-center justify-center">Global Mobility Stakeholders</h3>
            <p class="mb-6 flex text-center justify-center">
                We work with networks that provide support services and guidance for professionals transitioning to work abroad.
            </p>
        </div>

        <!-- Partner 4 -->
        <div class="bg-green-800 p-6 rounded-lg text-white shadow-md">
            <h3 class="text-2xl font-bold mb-4 flex text-center justify-center">Maritime Training Collaborators</h3>
            <p class="mb-6 flex text-center justify-center">
                We engage with maritime-focused training and placement bodies to create seafaring job opportunities.
            </p>
        </div>

        <!-- Partner 5 -->
        <div class="bg-green-800 p-6 rounded-lg text-white shadow-md">
            <h3 class="text-2xl font-bold mb-4 flex text-center justify-center">Migration Support Services</h3>
            <p class="mb-6 flex text-center justify-center">
                We coordinate with partners that streamline the migration process, offering documentation and logistical support to workers.
            </p>
        </div>

        <!-- Partner 6 -->
        <div class="bg-green-800 p-6 rounded-lg text-white shadow-md">
            <h3 class="text-2xl font-bold mb-4 flex text-center justify-center">International Collaboration Networks</h3>
            <p class="mb-6 flex text-center justify-center">
                We cooperate with international entities to promote fair labor mobility and capacity-building for Kenyan professionals.
            </p>
        </div>

        <!-- Partner 7 -->
        <div class="bg-green-800 p-6 rounded-lg text-white shadow-md md:col-span-1">
            <h3 class="text-2xl font-bold mb-4 flex text-center justify-center">Vocational & Training Institutions</h3>
            <p class="mb-6 flex text-center justify-center">
                We work with institutions that equip job seekers with practical skills tailored to international job market demands.
            </p>
        </div>

    </div>
</section>

<?php
$content = ob_get_clean();
include 'src/includes/app.inc.php';
include 'src/includes/Footer.inc.php';

?>