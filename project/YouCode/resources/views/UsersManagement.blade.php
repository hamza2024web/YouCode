<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                    <li><a href="/dashboard" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
                    </li>
                    <li><a href="#" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition"><i class="fas fa-question-circle mr-3"></i>Manage Quizzes</a>
                    </li>
                    <li><a href="/UsersManagement" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition"><i class="fas fa-users mr-3"></i>User Management</a>
                    </li>
                    <li><a href="#" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition"><i class="fas fa-chart-line mr-3"></i>Analytics</a>
                    </li>
                    <li><a href="#" class="flex items-center p-2 hover:bg-blue-700 rounded-lg transition"><i class="fas fa-cog mr-3"></i>Settings</a>
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

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">User Management</h1>
                <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" id="addUserBtn">Add User</button>
            </header>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">User List</h2>
                <table class="min-w-full border-collapse bg-white">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="px-6 py-3 text-left text-sm font-medium">Username</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Email</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">CIN</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Phone Number</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Score</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Status</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-700">
                        @foreach ($users as $user)
                        <tr class="hover:bg-gray-100 border-t border-gray-200">
                            <!-- User Information -->
                            <td class="px-6 py-4">{{ $user->name }}</td>
                            <td class="px-6 py-4">{{ $user->email }}</td>
                            <td class="px-6 py-4">{{ $user->CIN }}</td>
                            <td class="px-6 py-4">{{ $user->Phone_numbre }}</td>

                            <!-- Display User Scores -->
                            <td class="px-6 py-4">
                                @foreach ($user->quizResults as $result)
                                {{ $result->score }}
                                <br>
                                @endforeach
                            </td>

                            <!-- Status: Passed or Not Passed -->
                            <td class="px-6 py-4">
                                @php
                                // Check if any score is 50 or more
                                $hasPassed = $user->quizResults->contains(function ($result) {
                                return $result->score >= 50;
                                });
                                @endphp

                                @if($hasPassed)
                                <button class="bg-green-500 text-white px-4 py-2 rounded">Passed</button>
                                @else
                                <button class="bg-red-500 text-white px-4 py-2 rounded">Not Passed</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </main>
    </div>

    <div id="addUserModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 w-150">
            <h2 class="text-xl font-bold mb-4">Add New User</h2>
            <form action="/storeStaff" method="post" class="space-y-4" id="addUserForm">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <label class="block text-xs text-gray-600 mb-2" for="role">Role</label>
                    <select name="role" id="role"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 appearance-none">
                        <option value="Administrateur">Administrateur</option>
                        <option value="Staff">Staff</option>
                        <option value="CME">CME</option>
                    </select>

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
            <div>
                <button onclick="closeModal()" class="w-full bg-gradient-to-r from-red-600 to-purple-600 text-white px-4 py-3 rounded-lg font-semibold hover:from-red-700 hover:to-purple-700 transition duration-300 transform hover:scale-105">
                    Cancel
                </button>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('addUserBtn').onclick = function() {
            document.getElementById('addUserModal').classList.remove('hidden');
        };

        function closeModal() {
            document.getElementById('addUserModal').classList.add('hidden');
        }
    </script>
</body>

</html>