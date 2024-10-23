<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">
    <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-semibold mb-6 text-center">Login</h2>
        <form id="loginForm" class="space-y-4">
            <div>
                <label for="username" class="block text-sm mb-2">Username</label>
                <input type="text" id="username" name="username" required
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div>
                <label for="password" class="block text-sm mb-2">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <button type="submit"
                    class="w-full py-3 bg-blue-600 hover:bg-purple-700 rounded-lg text-white font-bold transition-all duration-300 transform hover:-translate-y-1 active:translate-y-0">
                Login
            </button>
        </form>
        <div class="mt-6 text-center">
            <p class="text-gray-400 text-sm">Don't have an account? 
                <a href="#" class="text-blue-400 hover:underline">Sign up</a>
            </p>
        </div>
    </div>
</body>
</html>
