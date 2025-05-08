<?php
$title = "Contact Us - Horizon Hub Agency";
include 'src/includes/header.inc.php';

ob_start();
?>

<!-- Hero Section -->
<div
    style="
 background-image: url('src/images/smiling-customer-service-agent.jpg');
 background-position: center;
    background-size: cover;
" class="w-[90%] mx-auto h-64  bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('../src/images/contact-hero.jpg');">
    <div class="text-center ">
        <h1 class="text-4xl font-bold">Contact Us</h1>
        <p class="text-lg mt-2">We would love to hear from you.</p>
    </div>
</div>

<!-- Contact Info Section -->
<div class="w-[90%] mx-auto my-16 grid grid-cols-1 md:grid-cols-2 gap-10 bg-gray-50 p-8 rounded-lg shadow-md">
    <!-- Left - Contact Details -->
    <div class="flex flex-col gap-6">
        <h2 class="text-green-600 text-xl font-bold">Get in Touch</h2>
        <p class="text-gray-700 font-semibold text-lg">
            Don't hesitate to contact us for more information.
        </p>

        <div class="flex items-start gap-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M17.657 16.657L13.414 12l4.243-4.243a6 6 0 10-8.486 8.486L12 13.414l4.243 4.243z" />
            </svg>
            <div>
                <p class="text-red-600 font-bold">Physical Address</p>
                <p class="text-gray-600">UAP Old Mutual Tower 2nd floor,<br> Upper Hill Road, Upper Hill, Nairobi.</p>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M16 12h2a2 2 0 002-2V6a2 2 0 00-2-2h-2M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h2m2 0h4m-2 16v-6m-6 6v-6m12 6v-6" />
            </svg>
            <div>
                <p class="text-red-600 font-bold">Email us</p>
                <p class="text-gray-600">Diaspora@Mfa.Go.Ke</p>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 5h2l3 7 3-7h2l-3 7 3 7h-2l-3-7-3 7H3l3-7-3-7z" />
            </svg>
            <div>
                <p class="text-red-600 font-bold">Call us</p>
                <p class="text-gray-600">+254 (0) 20 4949662 | +254 (0) 20 4949632</p>
            </div>
        </div>
    </div>


</div>

<!-- Contact Form Section -->
<div class="w-full bg-cover bg-center py-16" style="background-image: url('../src/images/contact-form-bg.jpg');">
    <div class="w-[90%] mx-auto bg-white p-8 rounded-lg shadow-lg max-w-3xl">
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-8">Send us a message</h2>
        <form action="#" method="POST" class="flex flex-col gap-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="text" name="name" placeholder="Name" required class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="email" name="email" placeholder="Email" required class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="text" name="subject" placeholder="Subject" required class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="text" name="phone" placeholder="Phone Number" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <textarea name="message" rows="5" placeholder="Message" required class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            <div class="text-center">
                <button type="submit" class="bg-green-600 text-white font-bold py-3 px-8 rounded-md hover:bg-green-700 transition">
                    SEND MESSAGE
                </button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'src/includes/app.inc.php';
include 'src/includes/Footer.inc.php';
?>