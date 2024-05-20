<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    @vite('resources/css/app.css')

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                alert('{{ session('success') }}');
            @endif
        });
    </script>
</head>

<body class="flex items-center justify-center min-h-screen bg-slate-900">
    <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-5 text-2xl font-bold text-center">Login</h2>
        <form action="{{ route('AllUsers') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="w-full px-4 py-2 font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Login
                </button>
            </div>
        </form>
        <div class="mt-6 text-center">
            <a href="{{ route('UserCreate') }}" class="text-sm text-blue-500 hover:underline">Don't have an account?
                Register</a>
        </div>
    </div>
</body>


</html>
