<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Koperasi Jember</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen">
    <div class="relative h-full w-full bg-cover bg-center" style="background-image: url('img/Bg Unej.webp');">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
        <div class="relative z-10 flex items-center justify-center h-full w-full px-4">
            <div class="bg-white bg-opacity-35 rounded-xl shadow-xl w-full max-w-md p-4 sm:p-6">
                <div class="text-center mb-6">
                    <div class="w-20 h-20 sm:w-24 sm:h-24 mx-auto mb-3 rounded-full overflow-hidden">
                        <img src="{{ asset('img/LOGO_UNEJ(1).png') }}" alt="Logo" class="w-full h-full object-contain">
                    </div>
                    <h1 class="text-xl sm:text-2xl font-bold text-gray-700">KOPERASI JEMBER</h1>
                </div>

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="username" placeholder="Username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base" required>
                    </div>
                    <div class="mb-6">
                        <input type="password" name="password" placeholder="Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base" required>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="w-40 text-white text-base font-semibold bg-gradient-to-r from-blue-500 to-blue-700 py-2 rounded-md transition duration-300 hover:from-yellow-400 hover:to-yellow-600">
                            LOGIN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
