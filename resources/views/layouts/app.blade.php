<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LinkUp</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-md px-8 py-4">
        <div class="max-w-5xl mx-auto flex items-center justify-between">

            <h1 class="text-2xl font-bold text-blue-600">
                LinkUp
            </h1>

            <ul class="flex items-center gap-12 ml-[50px]">
                <li>
                    <a class="text-gray-700 hover:text-blue-600 font-medium"
                       href="{{ route('login.show') }}">
                        Se connecter
                    </a>
                </li>






                <li>
                  <a href="#"
   class="group flex items-center gap-3 rounded-full border border-gray-200 bg-white px-3 py-2 shadow-sm transition-all duration-300 hover:border-blue-300 hover:bg-blue-50 hover:shadow-md">

    <div class="flex h-9 w-9 items-center justify-center rounded-full bg-gradient-to-br from-blue-600 to-indigo-600 text-sm font-bold text-white shadow">
        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
    </div>

    <span class="hidden sm:block text-sm font-semibold text-gray-700 transition group-hover:text-blue-700">
        {{ auth()->user()->name }}
    </span>

  
</a>
                </li>
            </ul>



        </div>
    </nav>

    <!-- Content -->
    <main class="py-8">
        @yield('content')
        @yield('creepost')
    </main>

</body>
</html>
