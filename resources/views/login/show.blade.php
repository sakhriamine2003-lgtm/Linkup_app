<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - LinkUp</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

    <style>
        body{
            background: linear-gradient(135deg,#2563eb,#7c3aed,#1d4ed8);
            background-size: 300% 300%;
            animation: gradientMove 12s ease infinite;
        }

        @keyframes gradientMove{
            0%{background-position:0% 50%;}
            50%{background-position:100% 50%;}
            100%{background-position:0% 50%;}
        }

        @keyframes fadeUp{
            from{
                opacity:0;
                transform:translateY(40px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        .card{
            animation:fadeUp .8s ease;
        }

        .input{
            transition:.3s;
        }

        .input:focus{
            transform:translateY(-2px);
            box-shadow:0 15px 35px rgba(37,99,235,.15);
        }
    </style>

</head>

<body class="min-h-screen flex items-center justify-center relative overflow-hidden">

    <!-- Background -->
    <div class="absolute w-80 h-80 bg-blue-400 rounded-full blur-3xl opacity-30 -top-20 -left-20 animate-pulse"></div>

    <div class="absolute w-96 h-96 bg-purple-500 rounded-full blur-3xl opacity-20 bottom-0 right-0 animate-pulse"></div>

    <!-- Card -->
    <div class="card w-full max-w-md mx-4 backdrop-blur-xl bg-white/90 rounded-3xl shadow-2xl border border-white/30 p-8">

        <!-- Logo -->
        <div class="text-center">

            <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-r from-blue-600 to-purple-600 flex items-center justify-center shadow-xl mb-5">

                <i class="fa-solid fa-user text-white text-3xl"></i>

            </div>

            <h2 class="text-3xl font-bold text-gray-800">
                Connexion
            </h2>

            <p class="text-gray-500 mt-2">
                Connectez-vous à votre compte LinkUp
            </p>

        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('login.store') }}" class="mt-8">

            @csrf

            <!-- Email -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Adresse email
                </label>

                <div class="relative">

                    <i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="email"
                        name="email"
                        placeholder="exemple@email.com"
                        required
                        class="input w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                </div>

                @error('email')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <!-- Password -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Mot de passe
                </label>

                <div class="relative">

                    <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="password"
                        name="password"
                        placeholder="Votre mot de passe"
                        required
                        class="input w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                </div>

            </div>

            <!-- Remember -->

            <div class="flex items-center justify-between text-sm">

                <label class="flex items-center gap-2 text-gray-600">

                    <input type="checkbox"
                           name="remember"
                           class="rounded">

                    Se souvenir de moi

                </label>

                <a href="#"
                   class="text-blue-600 hover:underline">

                    Mot de passe oublié ?

                </a>

            </div>

            <!-- Button -->

            <button
                type="submit"
                class="w-full mt-8 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold hover:scale-105 hover:shadow-2xl transition duration-300">

                <i class="fa-solid fa-right-to-bracket mr-2"></i>

                Se connecter

            </button>

        </form>

        <!-- Divider -->

        <div class="flex items-center my-8">

            <div class="flex-1 h-px bg-gray-300"></div>

            <span class="px-3 text-gray-500 text-sm">
                ou
            </span>

            <div class="flex-1 h-px bg-gray-300"></div>

        </div>


        <!-- Register -->

        <p class="text-center text-sm text-gray-600 mt-8">

            Vous n'avez pas de compte ?

            <a href="{{ route('register') }}"
               class="font-semibold text-blue-600 hover:underline">

                Créer un compte

            </a>

        </p>

    </div>

</body>
</html>
