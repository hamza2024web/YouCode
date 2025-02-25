<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouVento - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-blue-600">Login to YouVento</h2>
        <form class="mt-6" action="/login" method="post" >
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700" for="email">Email</label>
                <input name="email" type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your email" required>
                @error('email')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password">Password</label>
                <input name="password" type="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700">Login</button>
        </form>
        <p class="mt-4 text-center text-gray-600">Don't have an account? <a href="/registre" class="text-blue-600 hover:underline">Register here</a></p>
    </div>
</body>
</html>
