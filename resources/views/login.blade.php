<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Login</h2>

                    <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-700">
                    Login
                </button>
            </div>
        </form>

        </div>
    </div>

</body>
</html>
