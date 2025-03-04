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