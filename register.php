<?php
include('header.php');

if (isset($_SESSION['username'])) {
    echo "<div class='flex flex-col items-center justify-center h-screen bg-gray-100'>
            <p class='text-center text-2xl'>You are already logged in as " . htmlspecialchars($_SESSION['username']) . ".</p>
          </div>";
} else {
?>
<div class="flex flex-col items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <form action="register-action.php" method="post" class="space-y-4">
            <h2 class="text-2xl font-bold text-center">Register</h2>
            <div>
                <label for="username" class="block text-lg font-medium text-gray-700">Username:</label>
                <input type="text" id="username" name="username" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="password" class="block text-lg font-medium text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</button>
            </div>
        </form>
    </div>
</div>
<?php
}
include('footer.php');
?>
    