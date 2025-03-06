<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode Staff Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 font-inter">
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <div class="w-64 bg-white shadow-xl p-6 space-y-6 hidden md:block">
            <div class="flex items-center space-x-3 mb-8">
                <img src="/path/to/youcode-logo.png" alt="YouCode Logo" class="h-10 w-10 rounded-full">
                <h1 class="text-2xl font-bold text-blue-600">YouCode</h1>
            </div>

            <nav class="space-y-2">
                <a href="#" class="flex items-center space-x-3 text-blue-600 bg-blue-50 p-3 rounded-lg">
                    <i data-feather="grid" class="w-5 h-5"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/event" class="flex items-center space-x-3 text-gray-600 hover:text-blue-600 p-3 rounded-lg hover:bg-blue-50 transition">
                    <i data-feather="calendar" class="w-5 h-5"></i>
                    <span>Events</span>
                </a>
                <a href="#" class="flex items-center space-x-3 text-gray-600 hover:text-blue-600 p-3 rounded-lg hover:bg-blue-50 transition">
                    <i data-feather="settings" class="w-5 h-5"></i>
                    <span>Settings</span>
                </a>
            </nav>

            <div class="absolute bottom-6 left-6 right-6">
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <h4 class="font-semibold text-blue-600">Upgrade to Pro</h4>
                    <p class="text-xs text-gray-500 mb-3">Unlock more features</p>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                        Upgrade
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-6 overflow-y-auto">
            <!-- Header -->
            <header class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Dashboard</h2>
                    <p class="text-gray-600">Welcome back, Admin!</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i data-feather="bell" class="w-6 h-6 text-gray-600"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <img src="/path/to/profile.jpg" alt="Profile" class="h-10 w-10 rounded-full">
                        <div>
                            <h4 class="font-semibold">John Doe</h4>
                            <p class="text-xs text-gray-500">Admin</p>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Cards -->
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-gray-700">Total Students</h3>
                        <i data-feather="users" class="w-6 h-6 text-blue-500"></i>
                    </div>
                    <div class="text-3xl font-bold text-blue-600">1,234</div>
                    <div class="text-sm text-green-500 flex items-center">
                        <i data-feather="arrow-up" class="w-4 h-4 mr-1"></i>
                        12% this month
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-gray-700">Active Courses</h3>
                        <i data-feather="book-open" class="w-6 h-6 text-green-500"></i>
                    </div>
                    <div class="text-3xl font-bold text-green-600">42</div>
                    <div class="text-sm text-blue-500 flex items-center">
                        <i data-feather="plus" class="w-4 h-4 mr-1"></i>
                        5 new this week
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-gray-700">Pending Applications</h3>
                        <i data-feather="file-text" class="w-6 h-6 text-yellow-500"></i>
                    </div>
                    <div class="text-3xl font-bold text-yellow-600">87</div>
                    <div class="text-sm text-red-500 flex items-center">
                        <i data-feather="alert-triangle" class="w-4 h-4 mr-1"></i>
                        Requires attention
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-gray-700">Total Revenue</h3>
                        <i data-feather="dollar-sign" class="w-6 h-6 text-purple-500"></i>
                    </div>
                    <div class="text-3xl font-bold text-purple-600">$124,567</div>
                    <div class="text-sm text-green-500 flex items-center">
                        <i data-feather="trending-up" class="w-4 h-4 mr-1"></i>
                        15% increase
                    </div>
                </div>
            </div>

            <!-- Charts and Tables -->
            <div class="grid md:grid-cols-2 gap-6 mt-8">
                <!-- Student Enrollment Chart -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-gray-700 mb-4">Student Enrollment</h3>
                    <canvas id="enrollmentChart"></canvas>
                </div>

                <!-- Recent Applications -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-gray-700">Recent Applications</h3>
                        <a href="#" class="text-blue-500 text-sm">View All</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="/path/to/student1.jpg" alt="Student" class="h-10 w-10 rounded-full">
                                <div>
                                    <h4 class="font-semibold">Ahmed Hassan</h4>
                                    <p class="text-xs text-gray-500">Web Development</p>
                                </div>
                            </div>
                            <span class="text-sm text-green-500">Approved</span>
                        </div>
                        <!-- More application entries -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Feather Icons
        feather.replace();

        // Enrollment Chart
        const ctx = document.getElementById('enrollmentChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Student Enrollment',
                    data: [120, 190, 300, 250, 420, 380],
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                }
            }
        });
    </script>
</body>
</html>