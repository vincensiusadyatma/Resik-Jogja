<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Resik Jogja</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md p-6">
        <!-- Judul -->
        <div class="text-left mb-10">
            <span class="text-gray-400 text-5xl font-semibold">Halo !</span>
            <h1 class="text-6xl font-extrabold text-gray-900 leading-tight">Selamat Datang</h1>
        </div>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-6">
            @csrf

            <div>
                <input type="email" id="email" name="email" 
                    class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-gray-800"
                    placeholder="Email">
            </div>

            <div class="relative">
                <input type="password" id="password" name="password" 
                    class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-gray-800"
                    placeholder="Password">

                <!-- Tombol toggle password -->
                <span id="togglePassword" 
                      class="absolute right-2 top-2 text-gray-500 cursor-pointer">
                    
                    <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" 
                         class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" 
                              d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 
                              9.542 7c-1.274 4.057-5.064 7-9.542 
                              7S1.732 14.057.458 10zM14 10a4 
                              4 0 11-8 0 4 4 0 018 0z" 
                              clip-rule="evenodd" />
                    </svg>

                    <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" 
                         class="h-5 w-5 hidden" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" 
                              d="M12 5c-7.633 0-11 7-11 7s3.367 7 11 7 
                              11-7 11-7-3.367-7-11-7zm0 11a4 4 0 110-8 4 4 0 010 8z" 
                              clip-rule="evenodd"/>
                        <path d="M3 3l18 18" stroke="currentColor" stroke-width="2" />
                    </svg>
                </span>
            </div>

            <button type="submit" 
                class="w-full bg-gray-900 text-white py-3 rounded-lg shadow hover:bg-gray-800 transition">
                Masuk
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Belum punya akun? 
            <a href="#" class="text-gray-900 font-semibold hover:underline">Daftar</a>
        </p>
    </div>

    <!-- Script toggle -->
    <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordInput = document.getElementById("password");
        const eyeOpen = document.getElementById("eyeOpen");
        const eyeClosed = document.getElementById("eyeClosed");

        togglePassword.addEventListener("click", () => {
            const isPassword = passwordInput.type === "password";
            passwordInput.type = isPassword ? "text" : "password";

            eyeOpen.classList.toggle("hidden", !isPassword);
            eyeClosed.classList.toggle("hidden", isPassword);
        });
    </script>

</body>
</html>
