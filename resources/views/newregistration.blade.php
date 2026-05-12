<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-sky-400 to-white min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md">

        <!-- Title -->
        <h2 class="text-3xl font-bold text-center text-sky-500 mb-6">
            Create Account
        </h2>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-4">

            <!-- Name -->
            <div>
                <label class="block text-gray-600 mb-1">Full Name</label>
                <input 
                    type="text" 
                    name="name"
                    placeholder="Enter your full name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400"
                    required
                >
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-600 mb-1">Email</label>
                <input 
                    type="email" 
                    name="email"
                    placeholder="Enter your email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400"
                    required
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-600 mb-1">Password</label>
                <input 
                    type="password" 
                    name="password"
                    placeholder="Create password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400"
                    required
                >
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-gray-600 mb-1">Confirm Password</label>
                <input 
                    type="password" 
                    name="password_confirmation"
                    placeholder="Confirm password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400"
                    required
                >
            </div>

            <!-- Register Button -->
            <button 
                type="submit"
                class="w-full bg-sky-500 text-white py-2 rounded-lg hover:bg-sky-600 transition duration-300"
            >
                Register
            </button>
        </form>

        <!-- Divider -->
        <div class="flex items-center my-6">
            <div class="flex-grow border-t"></div>
            <span class="mx-3 text-gray-400 text-sm">OR</span>
            <div class="flex-grow border-t"></div>
        </div>

        <!-- Back to Login -->
        <a href="loggin">
            <button 
                class="w-full border border-sky-500 text-sky-500 py-2 rounded-lg hover:bg-sky-50 transition duration-300"
            >
                Already have an account? Login
            </button>
        </a>

    </div>

</body>
</html>