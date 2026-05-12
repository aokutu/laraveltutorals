<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Sky Blue Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex bg-sky-50">

    <!-- LEFT SIDE (20%) -->
    <div class="w-1/5 bg-white shadow-lg border-r border-sky-200 flex flex-col">

        <!-- Logo -->
        <div class="p-6 text-center border-b border-sky-200">
            <h1 class="text-2xl font-bold text-sky-700">MyApp</h1>
        </div>

        <!-- Menu -->
    <div class="flex-1 p-4 space-y-3">
        <a href="/logout" class="block px-4 py-2 rounded-lg hover:bg-sky-100">🚪 Logout</a>
        <a href="/users" class="block px-4 py-2 rounded-lg hover:bg-sky-100">👥 Employees</a>
        <a href="/leave" class="block px-4 py-2 rounded-lg hover:bg-sky-100">📝 Pending Leave Approvals</a>
        <a href="/approved" class="block px-4 py-2 rounded-lg hover:bg-sky-100">📋 Approved Leaves</a>
     
    </div>

        <!-- Footer -->
        <div class="p-4 border-t border-sky-200 text-sm text-gray-400 text-center">
            v1.0
        </div>

    </div>

    <!-- RIGHT SIDE (80%) -->
    <div class="w-4/5 p-8">

        <!-- Top Bar -->
        <div class="bg-white p-4 rounded-xl shadow mb-6 flex justify-between items-center border border-sky-100">

            <h2 class="text-xl font-semibold text-gray-700">Dashboard</h2>

            <button class="bg-sky-700 text-white px-4 py-2 rounded-lg hover:bg-sky-800 transition">
                + New
            </button>

        </div>

        <!-- Content -->
        <div class="grid grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-xl shadow border border-sky-100">
                <h3 class="text-sky-700 font-bold">Card 1</h3>
                <p class="text-gray-500 mt-2">Content goes here...</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow border border-sky-100">
                <h3 class="text-sky-700 font-bold">Card 2</h3>
                <p class="text-gray-500 mt-2">Content goes here...</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow border border-sky-100">
                <h3 class="text-sky-700 font-bold">Card 3</h3>
                <p class="text-gray-500 mt-2">Content goes here...</p>
            </div>

        </div>

    </div>

</body>
</html>