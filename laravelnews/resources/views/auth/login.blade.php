<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Main Content -->
    <div class="flex justify-center items-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-1/2 lg:w-1/3 xl:w-1/4 animate-fadeIn mt-8 mx-4">
            <!-- Tambahkan mx-4 di sini -->
            <h1 class="text-2xl md:text-3xl font-semibold text-red-500 mb-2 text-center">Selamat Datang</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="Email" class="block text-gray-700 font-semibold">Email</label>
                    <input type="text" name="email" id="Email"
                        class="mt-1 p-2 border rounded w-full focus:ring focus:ring-red-300"
                        placeholder="Enter your Email">
                </div>
                <div class="mb-2">
                    <label for="password" class="block text-gray-700 font-semibold">Password</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 p-2 border rounded w-full focus:ring focus:ring-red-300"
                        placeholder="Enter your password">
                    <input type="checkbox" id="showPassword" class="mt-2">
                    <label for="showPassword" class="text-gray-700 ml-2 cursor-pointer select-none">Show Password</label>
                </div>
                <div class="mb-2">
                    <a href="{{ route('register') }}">Don't Have an Account? <span style="color: blue;">Register</span></a>
                    {{-- <a href="{{ route('password.request') }}">Forgot Password</a> --}}
                </div>
                <button type="submit"
                    class="w-full bg-red-500 text-white p-2 rounded hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300">Login</button>
            </form>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById("password");
        const showPasswordCheckbox = document.getElementById("showPassword");

        showPasswordCheckbox.addEventListener("change", function () {
            if (showPasswordCheckbox.checked) {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });
    </script>

</body>

</html>
