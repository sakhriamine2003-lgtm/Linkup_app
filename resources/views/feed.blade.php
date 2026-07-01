@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto mt-8 px-4">

    <h2 class="text-3xl font-bold text-gray-800 mb-6">
        Fil d'actualité
    </h2>
    

    @forelse ($posts as $post)

        <div class="bg-white rounded-xl shadow-md p-5 mb-5 border border-gray-200">

            <div class="flex items-center gap-4 mb-4">

                @if ($post->user->image_url)
                    <img
                        src="{{ $post->user->image_url }}"
                        class="w-14 h-14 rounded-full object-cover border"
                        alt="Photo utilisateur"
                    >
                @else
                    <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-sm">
                        Photo
                    </div>
                @endif

                <div>
                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ $post->user->name }}
                    </h3>

                    <p class="text-sm text-gray-500">
                        {{ $post->user->headline ?? 'Utilisateur LinkUp' }}
                    </p>
                </div>

            </div>

            <p class="text-gray-700 text-base leading-relaxed mb-4">
                {{ $post->content }}
            </p>

            <small class="text-gray-400">
                {{ $post->created_at->format('d/m/Y H:i') }}
            </small>

        </div>

    @empty

        <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 p-4 rounded-lg">
            Aucun post pour le moment...
        </div>

    @endforelse

</div>

@endsection
