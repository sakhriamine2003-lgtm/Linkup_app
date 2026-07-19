<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-3xl mx-auto mt-8">

    @forelse($post->comments as $comment)

    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-5 mb-4 hover:shadow-md transition">

        <div class="flex gap-4">

            <!-- Avatar -->
            <div
                class="w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-lg">

                {{ strtoupper(substr($comment->user->name ?? 'U',0,1)) }}

            </div>

            <div class="flex-1">

                <!-- Header -->

                <div class="flex justify-between items-start">

                    <div>

                        <h3 class="font-semibold text-gray-900">
                            {{ $comment->user->name ?? 'Utilisateur' }}
                        </h3>

                        <span class="text-xs text-gray-500">
                            {{ $comment->created_at->diffForHumans() }}
                        </span>

                    </div>

                    <a href=""
                       class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                        Modifier
                    </a>

                </div>

                <!-- Comment -->

                <p class="mt-4 text-gray-700 leading-7">
                    {{ $comment->conntenu }}
                </p>

                <!-- Footer -->

                <div class="flex items-center gap-6 mt-5 border-t pt-4">

                    <button
                        class="flex items-center gap-2 text-gray-600 hover:text-blue-600 transition">

                        👍

                        <span>J'aime</span>

                    </button>

                    <button
                        class="flex items-center gap-2 text-gray-600 hover:text-red-500 transition">

                        👎

                        <span>Je n'aime pas</span>

                    </button>

                    <button
                        class="flex items-center gap-2 text-gray-600 hover:text-green-600 transition">

                        💬

                        <span>Répondre</span>

                    </button>

                </div>

            </div>

        </div>

    </div>

    @empty

    <div
        class="bg-white rounded-xl border border-dashed border-gray-300 p-10 text-center">

        <p class="text-gray-500">
            Aucun commentaire pour le moment.
        </p>

    </div>

    @endforelse


    <div class="mt-8">

        <a href="{{ route('feed') }}"
           class="inline-flex items-center gap-2 bg-blue-600 text-white px-5 py-3 rounded-xl hover:bg-blue-700 transition">

            ← Retour au feed

        </a>

    </div>

</div>
