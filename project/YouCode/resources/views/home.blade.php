<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode Quiz Platform</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="youcode-logo.png" alt="YouCode Logo" class="h-10 mr-4">
                <h1 class="text-2xl font-bold text-blue-600">YouCode Quiz Platform</h1>
            </div>
            <div class="flex items-center space-x-6">
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">
                    <i class="fas fa-home mr-2"></i>Home
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">
                    <i class="fas fa-chart-bar mr-2"></i>Progress
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-700 text-white rounded-2xl p-8 mb-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Welcome, Student!</h2>
                <p class="text-blue-100 mb-6">
                    Ready to test your skills and enhance your knowledge? 
                    Choose from our available quizzes and challenge yourself!
                </p>
            </div>
        </div>

        <!-- Quiz Categories -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Programming Quiz -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                            Programming
                        </span>
                        <span class="text-gray-500">
                            <i class="fas fa-clock mr-2"></i>30 mins
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Web Development Basics</h3>
                    <p class="text-gray-600 mb-4">Test your knowledge of HTML, CSS, and JavaScript fundamentals.</p>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-question-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">10 Questions</span>
                        </div>
                        <a href="/candidat" class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-700 text-white rounded-lg hover:from-blue-700 hover:to-purple-800 transition duration-300">
                            Start Quiz
                        </a>
                    </div>
                </div>
            </div>

            <!-- Database Quiz -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                            Database
                        </span>
                        <span class="text-gray-500">
                            <i class="fas fa-clock mr-2"></i>45 mins
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">SQL Fundamentals</h3>
                    <p class="text-gray-600 mb-4">Challenge your knowledge of database management and SQL queries.</p>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-question-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">15 Questions</span>
                        </div>
                        <a href="/candidat" class="px-6 py-2 bg-gradient-to-r from-green-600 to-teal-700 text-white rounded-lg hover:from-green-700 hover:to-teal-800 transition duration-300">
                            Start Quiz
                        </a>
                    </div>
                </div>
            </div>

            <!-- Networking Quiz -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">
                            Networking
                        </span>
                        <span class="text-gray-500">
                            <i class="fas fa-clock mr-2"></i>40 mins
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Network Protocols</h3>
                    <p class="text-gray-600 mb-4">Explore your understanding of network fundamentals and protocols.</p>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-question-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">12 Questions</span>
                        </div>
                        <a href="/candidat" class="px-6 py-2 bg-gradient-to-r from-red-600 to-pink-700 text-white rounded-lg hover:from-red-700 hover:to-pink-800 transition duration-300">
                            Start Quiz
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Statistics -->
        <div class="mt-12 bg-white rounded-2xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Your Progress</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg text-center">
                    <i class="fas fa-trophy text-4xl text-blue-600 mb-4"></i>
                    <h4 class="text-xl font-semibold text-gray-800">Completed Quizzes</h4>
                    <p class="text-3xl font-bold text-blue-600">7</p>
                </div>
                <div class="bg-green-50 p-6 rounded-lg text-center">
                    <i class="fas fa-chart-line text-4xl text-green-600 mb-4"></i>
                    <h4 class="text-xl font-semibold text-gray-800">Average Score</h4>
                    <p class="text-3xl font-bold text-green-600">85%</p>
                </div>
                <div class="bg-purple-50 p-6 rounded-lg text-center">
                    <i class="fas fa-medal text-4xl text-purple-600 mb-4"></i>
                    <h4 class="text-xl font-semibold text-gray-800">Highest Score</h4>
                    <p class="text-3xl font-bold text-purple-600">95%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t mt-12">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <p class="text-gray-600">&copy; 2023 YouCode. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-700 hover:text-blue-600">
                    <i class="fab fa-facebook text-xl"></i>
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600">
                    <i class="fab fa-linkedin text-xl"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>