<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-700 via-indigo-700 to-purple-700 overflow-hidden relative">

    <!-- Background -->
    <div class="absolute -top-24 -left-24 w-80 h-80 rounded-full bg-blue-400/30 blur-3xl animate-pulse"></div>

    <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-purple-500/20 blur-3xl animate-pulse"></div>

    <!-- Card -->

    <div class="relative w-full max-w-md mx-4 rounded-3xl bg-white/90 backdrop-blur-xl shadow-2xl border border-white/40 p-8 transition-all duration-300 hover:scale-[1.02]">

        <!-- Icon -->

        <div class="flex justify-center mb-6">

            <div class="w-20 h-20 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 flex items-center justify-center shadow-xl">

                <i class="fa-solid fa-user-plus text-white text-3xl"></i>

            </div>

        </div>

        <h2 class="text-3xl font-bold text-center text-gray-800">
            Créer un compte
        </h2>

        <p class="text-center text-gray-500 mt-2 mb-8">
            Rejoignez la communauté LinkUp
        </p>

        <form action="{{ route('register.store') }}" method="POST" class="space-y-5">

            @csrf

            <!-- Name -->

            <div>

                <label class="text-sm font-medium text-gray-700">
                    Nom complet
                </label>

                <div class="relative mt-2">

                    <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="text"
                        name="name"
                        placeholder="Entrer votre nom"
                        required
                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-blue-200 focus:border-blue-600 outline-none transition">

                </div>

            </div>

            <!-- Email -->

            <div>

                <label class="text-sm font-medium text-gray-700">
                    Email
                </label>

                <div class="relative mt-2">

                    <i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="email"
                        name="email"
                        placeholder="exemple@gmail.com"
                        required
                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-blue-200 focus:border-blue-600 outline-none transition">

                </div>

                @error('email')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <!-- Password -->

            <div>

                <label class="text-sm font-medium text-gray-700">
                    Mot de passe
                </label>

                <div class="relative mt-2">

                    <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="password"
                        name="password"
                        placeholder="Entrer votre mot de passe"
                        required
                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-blue-200 focus:border-blue-600 outline-none transition">

                </div>

                @error('password')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <!-- Submit -->

            <button
                type="submit"
                class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold hover:shadow-xl hover:scale-105 transition-all duration-300">

                <i class="fa-solid fa-user-plus mr-2"></i>

                Créer un compte

            </button>

        </form>

        <!-- Divider -->

        <div class="flex items-center my-8">

            <div class="flex-1 border-t"></div>

            <span class="mx-4 text-gray-400 text-sm">
                ou
            </span>

            <div class="flex-1 border-t"></div>

        </div>

    

        </div>

        <!-- Login -->

        <p class="text-center text-sm text-gray-600 mt-8">

            Déjà un compte ?

            <a href=""
               class="text-blue-600 font-semibold hover:underline">

                Se connecter

            </a>

        </p>

    </div>

</body>
</html>
