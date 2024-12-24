<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        @if($errors->any())
            <div class="bg-red-100 text-red-500 text-sm rounded-lg p-4 mb-4">
                {{ $errors->first() }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       required>
            </div>
            <button type="submit" class="w-full bg-yellow-400 text-black px-4 py-2 rounded-lg font-bold hover:bg-yellow-300">
                Login
            </button>
        </form>
        <p class="mt-4 text-sm text-gray-600 text-center">
            Don't have an account? <a href="{{ route('register') }}" class="text-yellow-400 font-bold hover:underline">Register</a>
        </p>
        
    </div>
</body>
</html>
