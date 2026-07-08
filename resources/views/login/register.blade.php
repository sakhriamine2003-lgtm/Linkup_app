<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-lg">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Créer un compte
        </h2>

       <form action="{{ route('register.store') }}" method="POST" class="space-y-5">
    @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nom complet
                </label>
                <input
                    type="text"
                    name="name"
                    placeholder="Entrer votre nom"
                    class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >

            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    placeholder="exemple@gmail.com"
                    class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
                    @error('email')<p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Mot de passe
                </label>
                <input
                    type="password"
                    name="password"
                    placeholder="Entrer mot de passe"
                    class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                 >
        @error('password')<p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror            </div>


            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Créer un compte
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-5">
            Déjà un compte ?
            <a href="" class="text-blue-600 font-semibold hover:underline">
                Se connecter
            </a>
        </p>

    </div>

</body>
</html>
