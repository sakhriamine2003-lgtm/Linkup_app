@extends('layouts.app')

@section('content')



<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-8">

    <!-- Create Post -->
    <div class="bg-white rounded-2xl shadow border border-gray-200 p-5 mb-8">

        <div class="flex items-center gap-3">

            <div class="w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
                A
            </div>

            <a href="feedcreate"
               class="flex-1 bg-gray-100 hover:bg-gray-200 rounded-full px-5 py-3 text-gray-500 transition">
                Commencer un post...
            </a>

        </div>

        <div class="border-t mt-5 pt-3 flex justify-around">

            <button class="flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium">
                📷 Média
            </button>

            <button class="flex items-center gap-2 text-gray-600 hover:text-orange-500 font-medium">
                📅 Événement
            </button>

            <button class="flex items-center gap-2 text-gray-600 hover:text-green-600 font-medium">
                📝 Article
            </button>

        </div>

    </div>


    <h2 class="text-2xl font-bold mb-6">
        Fil d'actualité
    </h2>


    @foreach($posts as $post)

    <div class="bg-white rounded-2xl shadow-md border border-gray-200 mb-8 overflow-hidden">

        <!-- Header -->
        <div class="flex justify-between items-center p-5">

            <div class="flex items-center gap-4">

                <div
                    class="w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold">

                    {{ strtoupper(substr($post->user->name,0,1)) }}

                </div>

                <div>

                    <h3 class="font-bold text-gray-900">
                        {{ $post->user->name }}
                    </h3>

                    <p class="text-sm text-gray-500">
                        {{ $post->user->headline }}
                    </p>

                    <span class="text-xs text-gray-400">
                        {{ $post->created_at->diffForHumans() }}
                    </span>

                </div>

            </div>

        </div>


        <!-- Content -->

        <div class="px-5 pb-5">

            <p class="text-gray-700 leading-8 text-[16px]">
                {{ $post->content }}
            </p>

        </div>


        <!-- Stats -->

        <div class="px-5 py-3 border-t flex justify-between text-sm text-gray-500">

            <span>
                👍 25 Likes
            </span>

            <span>
                💬 {{ $post->comments->count() }} commentaires
            </span>

        </div>


        <!-- Actions -->

        <div class="border-t grid grid-cols-4">

            <button
                class="py-4 hover:bg-gray-100 transition flex justify-center items-center gap-2">

                👍

                J'aime

            </button>

            <a href="{{ route('AjouteCommenter',$post->id) }}"
               class="py-4 hover:bg-gray-100 transition flex justify-center">

                💬 Commenter

            </a>

            <a href="{{ route('PostUserComments',$post->id) }}"
               class="py-4 hover:bg-gray-100 transition flex justify-center">

                👁 Voir

            </a>

            <button
                class="py-4 hover:bg-gray-100 transition flex justify-center">

                ↗ Partager

            </button>

        </div>

    </div>

    @endforeach
@endsection
</div>

</body>
