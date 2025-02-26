<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode - Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden">
            <!-- Quiz Header -->
            <div class="bg-blue-600 text-white p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold">Programming Fundamentals Quiz</h1>
                        <p class="text-blue-100">Test your coding knowledge</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <i class="fas fa-clock mr-2"></i>
                            <span id="timer" class="font-semibold">30:00</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-question-circle mr-2"></i>
                            <span id="questionCounter">1/10</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quiz Content -->
            <div id="quizContainer" class="p-8">
                <!-- Question Section -->
                <div id="questionSection">
                    <h2 id="questionText" class="text-xl font-semibold text-gray-800 mb-6">
                        What is the primary purpose of a constructor in object-oriented programming?
                    </h2>

                    <!-- Response Options -->
                    <div id="responseOptions" class="space-y-4">
                        <label class="block">
                            <input 
                                type="radio" 
                                name="response" 
                                value="a" 
                                class="mr-3 hidden"
                            >
                            <div class="response-card bg-gray-100 p-4 rounded-lg hover:bg-blue-50 cursor-pointer transition">
                                <span class="font-medium text-gray-700">
                                    To create an instance of a class
                                </span>
                            </div>
                        </label>

                        <label class="block">
                            <input 
                                type="radio" 
                                name="response" 
                                value="b" 
                                class="mr-3 hidden"
                            >
                            <div class="response-card bg-gray-100 p-4 rounded-lg hover:bg-blue-50 cursor-pointer transition">
                                <span class="font-medium text-gray-700">
                                    To define class methods
                                </span>
                            </div>
                        </label>

                        <label class="block">
                            <input 
                                type="radio" 
                                name="response" 
                                value="c" 
                                class="mr-3 hidden"
                            >
                            <div class="response-card bg-gray-100 p-4 rounded-lg hover:bg-blue-50 cursor-pointer transition">
                                <span class="font-medium text-gray-700">
                                    To initialize object properties
                                </span>
                            </div>
                        </label>

                        <label class="block">
                            <input 
                                type="radio" 
                                name="response" 
                                value="d" 
                                class="mr-3 hidden"
                            >
                            <div class="response-card bg-gray-100 p-4 rounded-lg hover:bg-blue-50 cursor-pointer transition">
                                <span class="font-medium text-gray-700">
                                    To delete class instances
                                </span>
                            </div>
                        </label>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between mt-8">
                        <button 
                            id="prevButton" 
                            class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300 transition"
                        >
                            Previous
                        </button>
                        <button 
                            id="nextButton" 
                            class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition"
                        >
                            Next
                        </button>
                    </div>
                </div>

                <!-- Result Section (Hidden by default) -->
                <div 
                    id="resultSection" 
                    class="hidden text-center space-y-6"
                >
                    <div class="bg-green-100 p-6 rounded-lg">
                        <h2 class="text-2xl font-bold text-green-800 mb-4">
                            Quiz Completed!
                        </h2>
                        <div class="flex justify-center space-x-8">
                            <div>
                                <p class="text-lg font-semibold text-gray-700">Total Questions</p>
                                <p class="text-2xl font-bold text-blue-600">10</p>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-700">Correct Answers</p>
                                <p class="text-2xl font-bold text-green-600">8</p>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-700">Score</p>
                                <p class="text-2xl font-bold text-purple-600">80%</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button 
                            class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition"
                        >
                            Review Answers
                        </button>
                        <button 
                            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition"
                        >
                            Take Another Quiz
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        class QuizApp {
            constructor() {
                // UI Elements
                this.questionText = document.getElementById('questionText');
                this.responseOptions = document.getElementById('responseOptions');
                this.prevButton = document.getElementById('prevButton');
                this.nextButton = document.getElementById('nextButton');
                this.timerElement = document.getElementById('timer');
                this.questionCounter = document.getElementById('questionCounter');
                this.questionSection = document.getElementById('questionSection');
                this.resultSection = document.getElementById('resultSection');

                // Quiz State
                this.currentQuestionIndex = 0;
                this.selectedResponses = [];
                this.totalTime = 30 * 60; // 30 minutes
                this.timeRemaining = this.totalTime;

                // Quiz Questions
                this.questions = [
                    {
                        text: "What is the primary purpose of a constructor in object-oriented programming?",
                        options: [
                            "To create an instance of a class",
                            "To define class methods",
                            "To initialize object properties",
                            "To delete class instances"
                        ],
                        correctAnswer: 2
                    },
                    // Add more questions here
                ];

                this.initEventListeners();
                this.startQuiz();
                this.startTimer();
            }

            initEventListeners() {
                // Response Selection
                this.responseOptions.addEventListener('click', (e) => {
                    const label = e.target.closest('label');
                    if (label) {
                        const radio = label.querySelector('input[type="radio"]');
                        radio.checked = true;

                        // Remove active state from all options
                        document.querySelectorAll('.response-card').forEach(card => {
                            card.classList.remove('bg-blue-100', 'border-blue-500');
                        });

                        // Add active state to selected option
                        label.querySelector('.response-card').classList.add('bg-blue-100', 'border-blue-500');
                    }
                });

                // Navigation Buttons
                this.prevButton.addEventListener('click', () => this.navigateQuestion(-1));
                this.nextButton.addEventListener('click', () => this.navigateQuestion(1));
            }

            startQuiz() {
                this.loadQuestion(this.currentQuestionIndex);
            }

            loadQuestion(index) {
                const question = this.questions[index];
                this.questionText.textContent = question.text;

                // Reset and populate response options
                this.responseOptions.innerHTML = question.options.map((option, i) => `
                    <label class="block">
                        <input 
                            type="radio" 
                            name="response" 
                            value="${i}" 
                            class="mr-3 hidden"
                        >
                        <div class="response-card bg-gray-100 p-4 rounded-lg hover:bg-blue-50 cursor-pointer transition">
                            <span class="font-medium text-gray-700">${option}</span>
                        </div>
                    </label>
                `).join('');

                // Update question counter
                this.questionCounter.textContent = `${index + 1}/${this.questions.length}`;

                // Manage navigation button states
                this.prevButton.disabled = index === 0;
                this.nextButton.disabled = false;

                if (index === this.questions.length - 1) {
                    this.nextButton.textContent = 'Finish';
                } else {
                    this.nextButton.textContent = 'Next';
                }
            }

            navigateQuestion(direction) {
                // Save current response
                const selectedRadio = this.responseOptions.querySelector('input[type="radio"]:checked');
                if (selectedRadio) {
                    this.selectedResponses[this.currentQuestionIndex] = parseInt(selectedRadio.value);
                }

                // Navigate questions
                this.currentQuestionIndex += direction;

                if (this.currentQuestionIndex < 0) {
                    this.currentQuestionIndex = 0;
                    return;
                }

                if (this.currentQuestionIndex >= this.questions.length) {
                    this.finishQuiz();
                    return;
                }

                this.loadQuestion(this.currentQuestionIndex);
            }

            startTimer() {
                const timerInterval = setInterval(() => {
                    this.timeRemaining--;
                    const minutes = Math.floor(this.timeRemaining / 60);
                    const seconds = this.timeRemaining % 60;
                    
                    this.timerElement.textContent = 
                        `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                    if (this.timeRemaining <= 0) {
                        clearInterval(timerInterval);
                        this.finishQuiz();
                    }
                }, 1000);
            }

            finishQuiz() {
                // Calculate score
                const correctAnswers = this.selectedResponses.filter((response, index) => 
                    response === this.questions[index].correctAnswer
                ).length;

                const score = Math.round((correctAnswers / this.questions.length) * 100);

                // Hide question section, show result section
                this.questionSection.classList.add('hidden');
                this.resultSection.classList.remove('hidden');

                // Update result section
                this.resultSection.querySelector('div:first-child').innerHTML = `
                    <h2 class="text-2xl font-bold text-green-800 mb-4">
                        Quiz Completed!
                    </h2>
                    <div class="flex justify-center space-x-8">
                        <div>
                            <p class="text-lg font-semibold text-gray-700">Total Questions</p>
                            <p class="text-2xl font-bold text-blue-600">${this.questions.length}</p>
                        </div>
                        <div>
                            <p class="text-lg font-semibold text-gray-700">Correct Answers</p>
                            <p class="text-2xl font-bold text-green-600">${correctAnswers}</p>
                        </div>
                        <div>
                            <p class="text-lg font-semibold text-gray-700">Score</p>
                            <p class="text-2xl font-bold text-purple-600">${score}%</p>
                        </div>
                    </div>
                `;
            }
        }

        // Initialize Quiz
        document.addEventListener('DOMContentLoaded', () => {
            new QuizApp();
        });
    </script>
</body>
</html>