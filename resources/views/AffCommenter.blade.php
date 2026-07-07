<script src="https://cdn.tailwindcss.com"></script>

<div class="mt-6 space-y-5">

    @forelse ($post->comments as $comment)

        <div class="flex items-start gap-3">

            {{-- Avatar --}}
            <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold shrink-0">
                {{ strtoupper(substr($comment->user->name ?? 'U', 0, 1)) }}
            </div>

            {{-- Comment content --}}
            <div class="flex-1">

                {{-- Name + time --}}
                <div class="flex items-center gap-2">
                    <h4 class="font-semibold text-gray-900 text-sm">
                        {{ '@' . ($comment->user->name ?? 'Utilisateur') }}
                    </h4>

                    <span class="text-xs text-gray-500">
                        {{ $comment->created_at->diffForHumans() }}
                    </span>
                </div>

                {{-- Comment text --}}
                <p class="text-gray-800 text-sm mt-1 leading-relaxed">
                {{ $comment->conntenu}}
                </p>




                {{-- Actions --}}
                <div class="flex items-center gap-5 mt-2 text-gray-600 text-sm">
                    <button class="hover:text-blue-600">
                        👍
                    </button>

                    <button class="hover:text-red-500">
                        👎
                    </button>

                    <button class="font-semibold hover:text-blue-600">
                        Reply
                    </button>
                </div>

            </div>
        </div>




    @empty

        <p class="text-sm text-gray-400 italic">
            Aucun commentaire pour le moment.
        </p>

    @endforelse
    <a href="{{ route('feed') }}"
           class="inline-block mt-6 text-sm text-blue-600 hover:underline">
            Retour au feed
        </a>

</div>
