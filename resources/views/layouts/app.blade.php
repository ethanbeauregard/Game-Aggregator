<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Game</title>
  <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">

<!-- Header -->
  <header class="border-b border-gray-800">
    <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
      <div class="flex flex-col lg:flex-row items-center">
        <a href="/">
          <img src="/assets/505-games-logo-png-transparent.png" alt="laracasts-logo" class="w-24 flex-none">
        </a>
        <ul class="flex ml-0 lg:ml-16 mt-6 lg:mt-0 space-x-8">
          <li>
            <a href="#" class="hover:text-gray-400">Games</a>
          </li>
          <li>
            <a href="#" class="hover:text-gray-400">Reviews</a>
          </li>
          <li>
            <a href="#" class="hover:text-gray-400">Coming Soon</a>
          </li>
        </ul>
      </div>
      <div class="flex mt-6 lg:mt-0 items-center">
        <div class="relative">
          <input type="text" class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline w-64 px-3 py-1" placeholder="Search...">
        </div>
        <div class="ml-6">
          <a href="#">
            <img src="assets/avatar.jpg" alt="avatar" class="rounded-full w-8">
          </a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="py-8">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">
      Powered By <a href="#" class="underline hover:text-gray-400">IGDB API</a>
    </div>
  </footer>
</body>
</html>