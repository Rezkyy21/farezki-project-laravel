<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Login Page</title>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center" style="background-image: url('your-floral-background-url'); background-size: cover; background-position: center;">

  <!-- Login Form -->
  <div class="bg-white/90 backdrop-blur-md p-6 rounded-lg shadow-lg max-w-xs w-full">
    <form class="space-y-4" id="loginForm">
      <!-- Username Field -->
      <div>
        <label for="username" class="block text-gray-700">Username</label>
        <input type="text" id="username" class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400" placeholder="Enter your username">
      </div>

      <!-- Password Field -->
      <div>
        <label for="password" class="block text-gray-700">Password</label>
        <input type="password" id="password" class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400" placeholder="Enter your password">
      </div>

      <!-- Login Button -->
      <div>
        <button type="submit" class="w-full p-2 bg-pink-400 text-white font-bold rounded-md hover:bg-pink-500 transition">Login</button>
      </div>
     
        <button type="" href="{{ route('login') }}" class="w-full p-2 bg-pink-400 text-white font-bold rounded-md hover:bg-pink-500 transition">Back</button>
      </div>
    </form>
  </div>
  <script src="assets/js/script.js"></script>

</body>
</html>
