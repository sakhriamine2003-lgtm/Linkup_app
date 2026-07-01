<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">
            Connexion
        </h2>

        <p class="text-center text-gray-500 mb-6">
            Connectez-vous à votre compte
        </p>

        <form action="/login" method="POST" class="space-y-5">

            <!-- Laravel CSRF -->
            <!-- @csrf -->

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Adresse email
                </label>
                <input
                    type="email"
                    name="email"
                    placeholder="exemple@email.com"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Mot de passe
                </label>
                <input
                    type="password"
                    name="password"
                    placeholder="Votre mot de passe"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2 text-sm text-gray-600">
                    <input
                        type="checkbox"
                        name="remember"
                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                    >
                    Se souvenir de moi
                </label>

                <a href="#" class="text-sm text-blue-600 hover:underline">
                    Mot de passe oublié ?
                </a>
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition duration-300"
            >
                Se connecter
            </button>

        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Vous n'avez pas de compte ?
            <a href="/register" class="text-blue-600 font-medium hover:underline">
                Créer un compte
            </a>
        </p>

    </div>

</body>
</html>
