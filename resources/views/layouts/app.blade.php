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

            <ul class="flex items-center gap-6">
                <li>
                    <a class="text-gray-700 hover:text-blue-600 font-medium"
                       href="{{ route('login.show') }}">
                        Se connecter
                    </a>
                </li>

                <li>
                    <a class="text-gray-700 hover:text-blue-600 font-medium"
                       href="#">
                        xxxxxx
                    </a>
                </li>
            </ul>

            <span class="text-sm text-gray-500">
                Réseau social Laravel
            </span>

        </div>
    </nav>

    <!-- Content -->
    <main class="py-8">
        @yield('content')
    </main>

</body>
</html>
