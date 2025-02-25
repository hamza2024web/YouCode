<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode Candidate Challenge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-100 min-h-screen flex items-center justify-center font-inter overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="bg-white shadow-2xl rounded-3xl overflow-hidden max-w-6xl mx-auto grid md:grid-cols-12 border-2 border-blue-50">
            <!-- Left Sidebar with Detailed Information -->
            <div class="md:col-span-5 bg-gradient-to-br from-blue-600 to-purple-700 p-8 text-white flex flex-col justify-center relative overflow-hidden">
                <!-- Floating Shapes -->
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-white/10 rounded-full"></div>
                <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-white/10 rounded-full"></div>

                <div class="z-10 space-y-6">
                    <div class="flex items-center space-x-4">
                        <h1 class="text-4xl font-bold">Candidate Challenge</h1>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center space-x-3 bg-white/10 p-3 rounded-xl">
                            <i data-feather="target" class="text-green-400 w-6 h-6"></i>
                            <div>
                                <h3 class="font-semibold">Comprehensive Assessment</h3>
                                <p class="text-xs text-white/70">Evaluate your technical and problem-solving skills</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 bg-white/10 p-3 rounded-xl">
                            <i data-feather="clock" class="text-yellow-400 w-6 h-6"></i>
                            <div>
                                <h3 class="font-semibold">Time-Boxed Challenge</h3>
                                <p class="text-xs text-white/70">60 minutes to showcase your potential</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 bg-white/10 p-3 rounded-xl">
                            <i data-feather="award" class="text-red-400 w-6 h-6"></i>
                            <div>
                                <h3 class="font-semibold">Career Opportunity</h3>
                                <p class="text-xs text-white/70">Your gateway to becoming a YouCode student</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 bg-white/5 rounded-xl p-5 border border-white/10">
                        <h4 class="text-xl font-bold mb-3">Quiz Sections</h4>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                                <span>Logic & Problem Solving</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                                <span>Programming Fundamentals</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-purple-400 rounded-full"></span>
                                <span>Analytical Reasoning</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-red-400 rounded-full"></span>
                                <span>Technical Aptitude</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-like Information -->
        <div class="mt-8 text-center max-w-3xl mx-auto">
            <p class="text-gray-600 text-sm">
                The YouCode Candidate Challenge is your first step towards a transformative tech education.
                We're looking for passionate, creative, and driven individuals ready to shape the future of technology.
            </p>
        </div>
    </div>

    <script>
        // Initialize Feather Icons
        feather.replace();
    </script>
</body>

</html>