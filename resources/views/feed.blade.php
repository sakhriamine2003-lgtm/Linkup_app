@extends('layouts.app')

@section('content')




<div class="max-w-3xl mx-auto mt-8 px-4">
<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                    <div class="flex items-center gap-2">


                        <a href= "feedcreate" class="flex-1 border border-gray-400 hover:bg-gray-100 text-gray-500 text-sm font-medium rounded-full py-3 px-5 transition text-left cursor-text">
                            Commencer un post
                        </a>
                    </div>

                    <div class="flex items-center justify-around mt-3 pt-2">
                        <a href="" class="flex items-center gap-2 text-gray-500 hover:bg-gray-100 px-3 py-2 rounded-md transition text-sm font-semibold cursor-pointer">
                            <svg class="h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24"><path d="M19 4H5a3 3 0 00-3 3v10a3 3 0 003 3h14a3 3 0 003-3V7a3 3 0 00-3-3zm1 13a1 1 0 01-1 1H5a1 1 0 01-1-1v-4.586l3.293-3.293a1 1 0 011.414 0l3.346 3.346a1 1 0 001.414 0l3.536-3.536a1 1 0 011.414 0L20 12.586V17zm0-6.414l-3.293-3.293a3 3 0 00-4.242 0l-3.536 3.536-2.586-2.586a3 3 0 00-4.242 0L2 10.586V7a1 1 0 011-1h14a1 1 0 011 1v3.586z"></path></svg>
                            <span class="hidden sm:inline">Média</span>
                        </a>
                        <a href="" class="flex items-center gap-2 text-gray-500 hover:bg-gray-100 px-3 py-2 rounded-md transition text-sm font-semibold cursor-pointer">
                            <svg class="h-6 w-6 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5v-5z"></path></svg>
                            <span class="hidden sm:inline">Événement</span>
                        </a>
                        <a href="" class="flex items-center gap-2 text-gray-500 hover:bg-gray-100 px-3 py-2 rounded-md transition text-sm font-semibold cursor-pointer">
                            <svg class="h-6 w-6 text-orange-800" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"></path></svg>
                            <span class="hidden sm:inline">Article</span>
                        </a>
                    </div>
                </div>



    <h2 class="text-3xl font-bold text-gray-800 mb-6">
        Fil d'actualité
    </h2>

    @forelse ($posts as $post)

        <div class="bg-white rounded-xl shadow-md p-5 mb-5 border border-gray-200">

            <div class="flex items-center gap-4 mb-4">

    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-lg">
        {{ strtoupper(substr($post->user->name,0,1)) }}
    </div>


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
      {{-- <form action="{{ route('AjouteCommenter' )}}" method="POST" >

                <button   type="submit">commenter</button>
                <input type="hidden" name="post_id" value="{{$post->id}}">
</form> --}}
<a class="mx-12" href="{{ route('AjouteCommenter', $post->id) }}">
    Ajouter commentaire
</a>

<a class="mx-12" href="{{ route('PostUserComments', $post->id) }}">
    Lire commentaire
</a>



        </div>

    @empty

        <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 p-4 rounded-lg">
            Aucun post pour le moment...
        </div>

    @endforelse

</div>

@endsection
