<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouVento - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-blue-600">Create an Account</h2>
        <form class="mt-6" method="post" action="/store">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700" for="name">Name</label>
                <input type="text" id="name" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your full name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="name">Prenom</label>
                <input type="text" id="prenom" name="prenom" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your full name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Create a password" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password_confirmation">Password Confirmation</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Confirm your password" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="date_de_naissance">Date De Naissance</label>
                <input type="date" id="date_de_naissance" name="date_de_naissance" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password_confirmation">CIN :</label>
                <input type="text" id="cin" name="cin" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Confirm your CIN" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password_confirmation">Phone Numbre :</label>
                <input type="text" id="phone_numbre" name="phone_numbre" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Confirm your Phone Numbre" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="campus">Campus</label>
                <select name="campus" id="campus" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <option value="Youssofia">Youssofia</option>
                    <option value="Asfi">Safi</option>
                    <option value="Nador">Nador</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-200">Register</button>
        </form>
        <p class="mt-4 text-center text-gray-600">Already have an account? <a href="/login" class="text-blue-600 hover:underline">Login here</a></p>
    </div>
</body>

</html>