<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-slate-900"">

    <div>
        <div class="flex items-center justify-center h-screen">
            <div class="w-1/3">
                <div class="p-6 bg-white rounded-lg">
                    <form enctype="multipart/form-data" action="{{ route('UserStore') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                Username
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') border-invalid @enderror"
                                id="username" name="username" type="text" placeholder="Username"
                                value="{{ old('username') }}">
                            @error('username')
                                <p class="mt-1 text-xs text-invalid">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-invalid @enderror"
                                id="email" name="email" type="text" placeholder="Email"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="mt-1 text-xs text-invalid">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="phone">
                                Phone
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('phone') border-invalid @enderror"
                                id="phone" name="phone" type="text" placeholder="Phone"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <p class="mt-1 text-xs text-invalid">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-invalid @enderror"
                                id="password" name="password" type="password" placeholder="Password">
                            @error('password')
                                <p class="mt-1 text-xs text-invalid">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="pfp" class="block mb-2 text-sm font-bold text-gray-700">
                                Profile Pic
                            </label>
                            <input
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="pfp" type="file" name="pfp">

                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
