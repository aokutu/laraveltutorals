<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-sky-400 to-white min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md">
        
        <!-- Title -->
        <h2 class="text-3xl font-bold text-center text-sky-500 mb-6">
            Login
        </h2>

        <!-- Form -->
        <form action="processloggin" method="POST" class="space-y-4">
              @csrf
            
            <!-- Email -->
            <div>
                <label class="block text-gray-600 mb-1">Email</label>
                <input 
                    type="text" 
                    name="name"
                    placeholder="Enter your Name"
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
                    placeholder="Enter your password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400"
                    required
                >
            </div>

            <!-- Login Button -->
            <button 
                type="submit"
                class="w-full bg-sky-500 text-white py-2 rounded-lg hover:bg-sky-600 transition duration-300"
            >
                Login
            </button>
        </form>

        <!-- Divider -->
        <div class="flex items-center my-6">
            <div class="flex-grow border-t"></div>
            <span class="mx-3 text-gray-400 text-sm">OR</span>
            <div class="flex-grow border-t"></div>
        </div>

        <!-- Register Button -->
        <a href="newregistration">
            <button 
                class="w-full border border-sky-500 text-sky-500 py-2 rounded-lg hover:bg-sky-50 transition duration-300"
            >
                New Registration#
            </button>
        </a>

    </div>

</body>
</html>