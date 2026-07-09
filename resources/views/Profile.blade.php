<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-4xl mx-auto py-10 px-4">

        <!-- Card dyal User -->
        <div class="bg-white rounded-2xl shadow p-6 mb-6">
            <div class="flex items-center gap-4">

{{-- @if (Auth::check()) --}}

                <!-- Avatar -->
                <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-3xl font-bold">
                    {{strtoupper(substr(Auth::user()->name,0,1)) }}
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800">
                       Name : {{Auth::user()->name}}
                    </h1>

                    <p class="text-gray-500 mt-1">
                       Email : {{Auth::user()->email}}
                    </p>

                    <p class="text-gray-600 mt-2">
                       Company : {{Auth::user()->company}}
                    </p>

                    <p class="text-sm text-gray-400 mt-1">
                       Created-at : {{Auth::user()->created_at}}
                    </p>
                </div>

            </div>
        </div>


        <!-- Statistiques -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">

            <div class="bg-white rounded-xl shadow p-5 text-center">
                <h2 class="text-2xl font-bold text-blue-600">
                  Posts
                </h2>

            {{-- @foreach ($posts as $post ) --}}
    <p class="text-gray-500 text-sm  bg-blue-600 text-white   w-14  mx-auto">
        N : {{($posts->count())}}
       </p>
        @foreach ($posts as $post )

            {{-- $ var = --}}

            <p class="bg-white rounded-2xl shadow p-6 mb-6">
                {{$post->id}} : {{$post->content}}
            </p>



        @endforeach


            </div>

            <div class="bg-white rounded-xl shadow p-5 text-center">
                <h2 class="text-2xl font-bold text-green-600">
                    Nombre commentaires
                </h2>
                <p class="text-gray-500 text-sm">Commentaires</p>
            </div>

            <div class="bg-white rounded-xl shadow p-5 text-center">
                <h2 class="text-2xl font-bold text-purple-600">
                    Nombre likes
                </h2>
                <p class="text-gray-500 text-sm">Likes</p>
            </div>

        </div>



</body>
</html>
