<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hanoi.ink – Tattoo Studios in Hanoi</title>
    <!-- Tailwind CSS + custom kleuren -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'vn-red': '#da251d',
              'vn-yellow': '#ffcd00',
              'vn-black': '#191919',
              'vn-white': '#ffffff'
            }
          }
        }
      }
    </script>
</head>
<body class="bg-vn-black text-vn-white min-h-screen flex items-center justify-center">
    <div class="flex flex-col items-center justify-center gap-8 w-full">
        <h1 class="text-5xl font-extrabold mb-4 tracking-tight text-vn-yellow drop-shadow-md">
            Hanoi.<span class="text-vn-red">ink</span>
        </h1>
        <p class="text-xl text-vn-yellow font-medium mb-6 text-center max-w-xl">
            Discover tattoo studios in Hanoi.<br>Welcome to the boldest ink community!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 w-full max-w-xs">
            <a href="/register"
                class="flex-1 px-6 py-3 rounded-xl bg-vn-red hover:bg-vn-yellow hover:text-vn-black text-vn-white font-bold text-lg transition duration-150 text-center shadow-lg">
                Register
            </a>
            <a href="/login"
                class="flex-1 px-6 py-3 rounded-xl bg-vn-yellow hover:bg-vn-red hover:text-vn-white text-vn-black font-bold text-lg transition duration-150 text-center shadow-lg">
                Log In
            </a>
            <a href="/just-visiting"
                class="flex-1 px-6 py-3 rounded-xl bg-transparent border-2 border-vn-yellow hover:bg-vn-yellow hover:text-vn-black text-vn-yellow font-bold text-lg transition duration-150 text-center shadow-lg">
                Just Visiting
            </a>
        </div>
    </div>
</body>
</html>
