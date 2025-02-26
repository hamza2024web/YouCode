<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode Quiz - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-blue-600 to-blue-800 text-white min-h-screen p-6">
            <div class="mb-8 text-center">
                <h1 class="text-2xl font-bold">YouCode Quiz</h1>
                <p class="text-sm text-blue-200">Admin Dashboard</p>
            </div>

            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition">
                            <i class="fas fa-question-circle mr-3"></i>
                            Manage Quizzes
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition">
                            <i class="fas fa-users mr-3"></i>
                            User Management
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition">
                            <i class="fas fa-chart-line mr-3"></i>
                            Analytics
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition">
                            <i class="fas fa-cog mr-3"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="absolute bottom-0 left-0 right-0 p-4">
                <button class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg transition">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">
            <!-- Header -->
            <header class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-semibold text-gray-800">Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="pl-8 pr-4 py-2 rounded-full border focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button id="addQuizBtn" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-plus mr-2"></i> Add Quiz
                    </button>
                    <div class="relative">
                        <i class="fas fa-bell text-2xl text-gray-600"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">3</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img src="https://via.placeholder.com/40" class="rounded-full" alt="Admin Profile">
                        <span>Admin Name</span>
                    </div>
                </div>
            </header>

            <!-- Stats Overview -->
            <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-gray-500 text-sm">Total Quizzes</h3>
                            <p class="text-2xl font-bold text-blue-600">45</p>
                        </div>
                        <i class="fas fa-clipboard-list text-blue-500 text-2xl"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-gray-500 text-sm">Active Users</h3>
                            <p class="text-2xl font-bold text-green-600">1,200</p>
                        </div>
                        <i class="fas fa-users text-green-500 text-2xl"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-gray-500 text-sm">Completed Quizzes</h3>
                            <p class="text-2xl font-bold text-purple-600">350</p>
                        </div>
                        <i class="fas fa-check-circle text-purple-500 text-2xl"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-gray-500 text-sm">Pending Approvals</h3>
                            <p class="text-2xl font-bold text-yellow-600">12</p>
                        </div>
                        <i class="fas fa-hourglass-half text-yellow-500 text-2xl"></i>
                    </div>
                </div>
            </section>

            <!-- Recent Activity -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Recent Quizzes -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Recent Quizzes</h3>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center border-b pb-2">
                            <div>
                                <h4 class="font-semibold">JavaScript Fundamentals</h4>
                                <p class="text-sm text-gray-500">Created by: John Doe</p>
                            </div>
                            <span class="text-green-500">Active</span>
                        </li>
                        <li class="flex justify-between items-center border-b pb-2">
                            <div>
                                <h4 class="font-semibold">Python Programming</h4>
                                <p class="text-sm text-gray-500">Created by: Jane Smith</p>
                            </div>
                            <span class="text-yellow-500">Pending</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <div>
                                <h4 class="font-semibold">Web Development</h4>
                                <p class="text-sm text-gray-500">Created by: Mike Johnson</p>
                            </div>
                            <span class="text-blue-500">Draft</span>
                        </li>
                    </ul>
                </div>

                <!-- User Performance -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Top Performers</h3>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center border-b pb-2">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/40" class="rounded-full mr-3" alt="User">
                                <div>
                                    <h4 class="font-semibold">Emma Wilson</h4>
                                    <p class="text-sm text-gray-500">95% Average Score</p>
                                </div>
                            </div>
                            <span class="text-green-500">🏆</span>
                        </li>
                        <li class="flex justify-between items-center border-b pb-2">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/40" class="rounded-full mr-3" alt="User">
                                <div>
                                    <h4 class="font-semibold">Alex Rodriguez</h4>
                                    <p class="text-sm text-gray-500">92% Average Score</p>
                                </div>
                            </div>
                            <span class="text-blue-500">🥈</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/40" class="rounded-full mr-3" alt="User">
                                <div>
                                    <h4 class="font-semibold">Sarah Lee</h4>
                                    <p class="text-sm text-gray-500">88% Average Score</p>
                                </div>
                            </div>
                            <span class="text-yellow-500">🥉</span>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>

    <!-- Quiz Creation Modal -->
    <div id="quizModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-xl w-96 p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Create New Quiz</h2>
                <button id="closeModalBtn" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form id="quizForm" action="/quiz" method="post" class="space-y-6 p-6 bg-white shadow-lg rounded-2xl">
                @csrf
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create a New Quiz</h2>

                <!-- Dynamic Question and Answer Fields -->
                <div id="questionContainer" class="space-y-4">
                    <div class="question-block">
                        <label for="questionInput" class="block text-gray-700">Question</label>
                        <input type="text" name="question"class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"placeholder="Enter your question" required>

                        <label for="responseInput" class="block text-gray-700 mt-2">Correct Answer</label>
                        <input type="text" name="response"class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"placeholder="Enter the correct answer" required>
                    </div>
                </div>

                <!-- Add More Questions Button -->
                <button type="button" id="addQuestion"class="mt-4 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
                    + Add Question
                </button>

                <!-- Submit Button -->
                <button type="submit"class="mt-6 bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg w-full">
                    Create Quiz
                </button>
            </form>
        </div>
    </div>

    <script>
        // Modal functionality
        const addQuizBtn = document.getElementById('addQuizBtn');
        const quizModal = document.getElementById('quizModal');
        const closeModalBtn = document.getElementById('closeModalBtn');
        // Open Modal
        addQuizBtn.addEventListener('click', () => {
            quizModal.classList.remove('hidden');
        });

        // Close Modal
        closeModalBtn.addEventListener('click', () => {
            quizModal.classList.add('hidden');
        });
        document.getElementById('addQuestion').addEventListener('click', function() {
            const container = document.getElementById('questionContainer');
            const newQuestion = document.createElement('div');
            newQuestion.classList.add('question-block');

            newQuestion.innerHTML = `
            <label class="block text-gray-700">Question</label>
            <input type="text" name="question" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your question" required>

            <label class="block text-gray-700 mt-2">Correct Answer</label>
            <input type="text" name="response" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the correct answer" required>
        `;

            container.appendChild(newQuestion);
        });
    </script>
</body>

</html>