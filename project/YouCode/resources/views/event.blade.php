<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode - Create Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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
                <a href="/dashboard" class="flex items-center space-x-3 text-gray-600 hover:text-blue-600 p-3 rounded-lg hover:bg-blue-50 transition">
                    <i data-feather="grid" class="w-5 h-5"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/event" class="flex items-center space-x-3 text-blue-600 bg-blue-50 p-3 rounded-lg">
                    <i data-feather="calendar" class="w-5 h-5"></i>
                    <span>Events</span>
                </a>
                <a href="#" class="flex items-center space-x-3 text-gray-600 hover:text-blue-600 p-3 rounded-lg hover:bg-blue-50 transition">
                    <i data-feather="settings" class="w-5 h-5"></i>
                    <span>Settings</span>
                </a>
            </nav>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-6 overflow-y-auto bg-gradient-to-br from-blue-50 to-indigo-100">
            <div class="container mx-auto max-w-4xl">
                <div class="bg-white shadow-2xl rounded-3xl overflow-hidden grid md:grid-cols-12">
                    <!-- Event Illustration Section -->
                    <div class="md:col-span-5 bg-gradient-to-br from-blue-600 to-purple-700 p-8 flex flex-col justify-center relative overflow-hidden text-white">
                        <!-- Floating Shapes -->
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-white/10 rounded-full"></div>
                        <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-white/10 rounded-full"></div>

                        <div class="z-10 space-y-6">
                            <div class="flex items-center space-x-4 justify-center">
                                <div class="bg-white/20 p-3 rounded-xl">
                                    <i data-feather="calendar" class="w-8 h-8 text-white"></i>
                                </div>
                                <h2 class="text-3xl font-bold">Create Event</h2>
                            </div>

                            <p class="text-white/80 text-center">
                                Plan and organize your upcoming events with ease. 
                                Fill out the details to create a new event for YouCode community.
                            </p>

                            <div class="space-y-4">
                                <div class="flex items-center space-x-3 bg-white/10 p-3 rounded-xl">
                                    <i data-feather="check-circle" class="w-6 h-6 text-green-400"></i>
                                    <div>
                                        <h4 class="font-semibold">Easy Event Management</h4>
                                        <p class="text-xs text-white/70">Quick and intuitive event creation</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3 bg-white/10 p-3 rounded-xl">
                                    <i data-feather="share-2" class="w-6 h-6 text-yellow-400"></i>
                                    <div>
                                        <h4 class="font-semibold">Share with Community</h4>
                                        <p class="text-xs text-white/70">Instantly notify YouCode members</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Creation Form -->
                    <div class="md:col-span-7 p-10">
                        <form action="/eventsCrate" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <input type="hidden" name="staff_id" value="{{$user->id}}">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Event Title</label>
                                <div class="relative">
                                    <input type="text" name="title" required class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300"placeholder="Enter event title">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-feather="type" class="w-5 h-5 text-gray-400"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Start Date</label>
                                    <div class="relative">
                                        <input 
                                            type="datetime-local" 
                                            name="date_start" 
                                            required 
                                            class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300"
                                        >
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-feather="calendar" class="w-5 h-5 text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">End Date</label>
                                    <div class="relative">
                                        <input 
                                            type="datetime-local" 
                                            name="date_end" 
                                            required 
                                            class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-300"
                                        >
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-feather="calendar" class="w-5 h-5 text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Event Description</label>
                                <div class="relative">
                                    <textarea 
                                        name="description" 
                                        rows="4" 
                                        class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300"
                                        placeholder="Provide event details"
                                    ></textarea>
                                    <div class="absolute inset-y-0 left-0 pl-3 pt-3 pointer-events-none">
                                        <i data-feather="align-left" class="w-5 h-5 text-gray-400"></i>
                                    </div>
                                </div>
                            </div>

                            <button 
                                type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition duration-300 transform hover:scale-105 flex items-center justify-center space-x-2"
                            >
                                <i data-feather="plus-circle" class="w-6 h-6"></i>
                                <span>Create Event</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Feather Icons
        feather.replace();
    </script>
</body>
</html>