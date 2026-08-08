<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">

        <!-- Admin Sidebar Navigation -->
        <aside class="w-64 bg-gray-900 text-white flex flex-col justify-between p-4">
            <div>
                <!-- Brand / Logo -->
                <div class="text-xl font-bold border-b border-gray-800 pb-4 mb-6 flex items-center gap-2">
                    <span class="bg-indigo-600 text-xs px-2 py-1 rounded uppercase tracking-wider font-semibold">Admin</span>
                    System Portal
                </div>

                <!-- Nav Menu Links -->
                <nav class="space-y-2">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 bg-indigo-600 text-white p-3 rounded-lg font-medium">
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-gray-300 hover:bg-gray-800 hover:text-white p-3 rounded-lg font-medium transition">
                        <span>Manage Students</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-gray-300 hover:bg-gray-800 hover:text-white p-3 rounded-lg font-medium transition">
                        <span>Courses & Classes</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-gray-300 hover:bg-gray-800 hover:text-white p-3 rounded-lg font-medium transition">
                        <span>System Settings</span>
                    </a>
                </nav>
            </div>

            <!-- Logout Link -->
            <div class="border-t border-gray-800 pt-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left text-red-400 hover:text-red-300 p-2 font-medium">
                        Log Out
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <!-- Top Header Bar -->
            <header class="bg-white shadow-sm p-4 flex justify-between items-center border-b">
                <h1 class="text-2xl font-bold text-gray-800">Administrator Panel</h1>
                <div class="text-gray-600 font-medium">
                    Logged in as <span class="text-indigo-600 font-semibold"></span>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-6 space-y-6">
                <!-- Overview Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                        <p class="text-sm font-medium text-gray-500">Total Students</p>
                        <p class="text-3xl font-bold text-indigo-600 mt-2">1,248</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                        <p class="text-sm font-medium text-gray-500">Active Courses</p>
                        <p class="text-3xl font-bold text-gray-800 mt-2">32</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                        <p class="text-sm font-medium text-gray-500">Pending Registrations</p>
                        <p class="text-3xl font-bold text-amber-500 mt-2">14</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                        <p class="text-sm font-medium text-gray-500">System Status</p>
                        <p class="text-xl font-bold text-green-600 mt-2">Healthy</p>
                    </div>
                </div>

                <!-- Quick Actions / Table Preview -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Registrations</h2>
                    <p class="text-gray-600">Student registration list and administrative actions will show here.</p>
                </div>
            </main>
        </div>

    </div>
</body>
</html>