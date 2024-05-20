<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Display</title>
    @vite('resources/css/app.css')

</head>

<body class="min-h-screen bg-slate-900">

    <div class="block p-5 text-center bg-black">
        <h4 class="text-2xl tracking-widest text-white">List Of All Users</h4>
    </div>

    <div class="fixed flex items-center justify-center w-screen min-h-screen p-5">
        <div class="w-full max-w-4xl p-5 bg-white rounded-lg shadow-lg">

            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-left border-b">ID</th>
                        <th class="px-4 py-2 text-left border-b">Username</th>
                        <th class="px-4 py-2 text-left border-b">Email</th>
                        <th class="px-4 py-2 text-left border-b">Phone</th>
                        <th class="px-4 py-2 text-left border-b">PFP</th>
                        <th class="px-4 py-2 text-left border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($allUsers->isNotEmpty())
                        @foreach ($allUsers as $user)
                            <tr>
                                <td class="px-4 py-2 border-b">CT-{{ $user->id }}</td>
                                <td class="px-4 py-2 border-b">{{ $user->username }}</td>
                                <td class="px-4 py-2 border-b">{{ $user->email }}</td>
                                <td class="px-4 py-2 border-b">{{ $user->phone }}</td>
                                <td class="px-4 py-2 border-b">
                                    @if ($user->profile != '')
                                        <img class="rounded-full" src="{{ asset('uploads/images/' . $user->profile) }}"
                                            width="50px" alt="img">
                                    @endif
                                </td>
                                <td class="px-4 py-2 border-b">
                                    <!-- Add action buttons or links here -->
                                    <a class="px-2 py-1 text-sm text-white bg-blue-500 rounded" href="">Edit</a>
                                    <a class="px-2 py-1 text-sm text-white bg-red-500 rounded" href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="px-4 py-2 text-center border-b">No users found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>

</body>

</html>
