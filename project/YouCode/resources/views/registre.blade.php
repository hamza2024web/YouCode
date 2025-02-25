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

            <!-- Registration Form -->
            <div class="md:col-span-7 p-10 flex items-center">
                <div class="w-full">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                        Start Your YouCode Journey
                    </h2>
                    <p class="text-center text-gray-600 mb-8">
                        Fill out the form below to begin your candidate assessment
                    </p>

                    <form action="/store" method="post" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-600 mb-2" for="name">Name</label>
                                <div class="relative">
                                    <input type="text" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300" placeholder="First Name" required>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-2" for="prenom">Prenom</label>
                                <div class="relative">
                                    <input type="text" name="prenom" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300" placeholder="Last Name" required>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5.121 17.804A13.937 13.937 0 0111 16.5c2.998 0 5.7.815 7.879 2.304M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs text-gray-600 mb-2" for="email">Email Address</label>
                            <div class="relative">
                                <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-300" placeholder="you@example.com" required>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-600 mb-2" for="password">Password</label>
                                <div class="relative">
                                    <input type="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 transition duration-300" placeholder="Create password" required>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-2" for="password_confirmation">Confirm Password</label>
                                <div class="relative">
                                    <input type="password" name="password_confirmation" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300" placeholder="Confirm password" required>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-600 mb-2" for="date_de_naissance">Date of Birth</label>
                                <input type="date" name="date_de_naissance" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300" required>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-2" for="CIN">CIN</label>
                                <input type="text" name="CIN" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition duration-300" placeholder="Enter CIN" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-600 mb-2" for="Phone_numbre">Phone Number</label>
                                <input type="tel" name="Phone_numbre" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 transition duration-300" placeholder="+212 6XXXXXXXX" required>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-2" for="campus">Campus</label>
                                <select name="campus" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300">
                                    <option>Youssofia</option>
                                    <option>Safi</option>
                                    <option>Nador</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mr-2" required>
                            <label class="text-xs text-gray-600">
                                I agree to the Terms and Conditions
                            </label>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition duration-300 transform hover:scale-105">
                            Create Account
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Already registered?
                            <a href="/login" class="text-blue-600 hover:underline font-semibold">
                                Check your application status
                            </a>
                        </p>
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