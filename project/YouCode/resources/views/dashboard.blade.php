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
                        <a href="/UsersManagement" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition">
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
                    <button id="addQuizBtn" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition">
                        <i class="fas fa-plus mr-2"></i> Add Quiz
                    </button>
                </ul>
            </nav>


            <div class="absolute bottom-0 left-0 right-0 p-4">
                <a href="/logout">
                    <button class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg transition">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </a>
            </div>
        </aside>
    </div>

    <!-- Quiz Creation Modal -->
    <div id="quizModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center overflow-y-auto">
        <div class="bg-white rounded-lg shadow-xl w-[600px] max-h-[90vh] p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">Create Quiz Question</h2>
                <button id="closeModalBtn" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="quizForm" class="space-y-6" action="/quiz" method="post">
                @csrf
                <div id="questionContainer" class="space-y-6">
                    <!-- Dynamic Questions -->
                    <script>
                        for (let i = 1; i <= 10; i++) {
                            document.write(`
                                <div class="question-block">
                                    <label class="block text-gray-700 font-semibold mb-2">Question ${i}</label>
                                    <input type="text" name="questions[]" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Enter question ${i}" required>
                                    <h3 class="text-lg font-semibold text-gray-700 mt-4">Possible Answers</h3>
                                    ${[1, 2, 3, 4].map(num => `
                                        <div class="flex items-center space-x-2 mt-2">
                                            <input type="radio" name="correct_answer_${i}" value="response_${num}" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                            <input type="text" name="responses_${i}[]" class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Response ${num}" required>
                                        </div>
                                    `).join('')}
                                </div>
                            `);
                        }
                    </script>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-between mt-6">
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center">
                        <i class="fas fa-save mr-2"></i> Save Questions
                    </button>
                </div>
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
    </script>
</body>

</html>