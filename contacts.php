<?php
include('header.php');
?>

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-5xl">
        <h1 class="text-3xl font-bold text-center mb-6">Contact Us - Maracuya Confectionery</h1>
        <p class="text-lg text-gray-700 mb-6 text-center">
            We would love to hear from you! Whether you have questions about our products, need assistance with an order, or just want to share your feedback, feel free to get in touch with us using the information below.
        </p>
        <div class="space-y-4 text-lg text-gray-700">
            <div class="flex items-center">
                <span class="font-semibold w-32">Address:</span>
                <span>Kokshetau, 137 Auezov str., h.2, office 3</span>
            </div>
            <div class="flex items-center">
                <span class="font-semibold w-32">Email:</span>
                <span>📧 MaraqYA@gmail.com</span>
            </div>
            <div class="flex items-center">
                <span class="font-semibold w-32">Phone:</span>
                <span>📞 +7 (708) 752 09 34</span>
            </div>
        </div>
        <p class="text-lg text-gray-700 mt-6 text-center">
            You can also fill out the contact form below, and we will get back to you as soon as possible.
        </p>
        <form action="#" method="post" class="space-y-6 mt-6">
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700">Name:</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="message" class="block text-lg font-medium text-gray-700">Message:</label>
                <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Send Message</button>
            </div>
        </form>
        <div id="contact-thankyou" class="hidden mt-4 text-center text-green-500">
            Thank you for contacting us! We will get back to you soon.
        </div>
    </div>
</div>

<?php
include('footer.php');
?>

<script>
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    document.getElementById('contact-thankyou').classList.remove('hidden');
    setTimeout(() => {
        document.getElementById('contact-thankyou').classList.add('hidden');
    }, 3000);
});
</script>
