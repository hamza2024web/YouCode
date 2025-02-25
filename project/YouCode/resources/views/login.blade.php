<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode Quiz Platform</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Heroicons -->
    <link href="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/dist/heroicons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex items-center justify-center p-6">
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 bg-white shadow-2xl rounded-3xl overflow-hidden max-w-4xl mx-auto">
            <!-- Left Side - Illustration -->
            <div class="hidden md:block bg-gradient-to-br from-blue-600 to-purple-700 p-12 flex items-center justify-center">
                <div class="text-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-48 w-48 mx-auto mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <h2 class="text-3xl font-bold mb-4">YouCode Quiz Platform</h2>
                    <p class="text-blue-100">Empower your learning journey with our interactive quiz system</p>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="p-10 flex items-center justify-center">
                <div class="w-full max-w-md">
                    <div class="mb-8 text-center">
                        <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back!</h1>
                        <p class="text-gray-500">Sign in to access your quiz dashboard</p>
                    </div>

                    <form action="/login" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Email Input -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="email">
                                Email Address
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <input type="email" name="email" required class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"placeholder="Enter your email">
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="password">
                                Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input type="password" name="password" required class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"placeholder="Enter your password">
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label class="ml-2 block text-sm text-gray-900">
                                    Remember me
                                </label>
                            </div>
                            <div>
                                <a href="#" class="text-sm text-blue-600 hover:text-blue-500">
                                    Forgot password?
                                </a>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                        >
                            Sign In
                        </button>
                    </form>

                    <!-- Social Login or Register -->
                    <div class="mt-6 text-center">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">
                                    Don't have an account?
                                </span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="registre" class="w-full flex justify-center py-2 px-4 border border-blue-300 rounded-md shadow-sm text-sm font-medium text-blue-600 bg-white hover:bg-blue-50">
                                Create New Account
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</body>
</html>