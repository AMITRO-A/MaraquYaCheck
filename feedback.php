<?php
include('header.php');
?>

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-3xl font-bold text-center mb-6">Feedback - Maracuya Confectionery</h1>
        <p class="text-lg text-gray-700 mb-4 text-center">
            We value your feedback and would love to hear your thoughts about our products and services. Please fill out the form below to share your feedback with us.
        </p>
        <form action="#" method="post" class="space-y-6">
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
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit Feedback</button>
            </div>
        </form>
        <div id="feedback-thankyou" class="hidden mt-4 text-center text-green-500">
            Thank you for your feedback!
        </div>
    </div>
</div>

<?php
include('footer.php');
?>

<script>
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    document.getElementById('feedback-thankyou').classList.remove('hidden');
    setTimeout(() => {
        document.getElementById('feedback-thankyou').classList.add('hidden');
    }, 3000);
});
</script>
