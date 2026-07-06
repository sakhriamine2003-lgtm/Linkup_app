<script src="https://cdn.tailwindcss.com"></script>


<form action="{{ route('SaveComment' , $post->id ) }}" method="POST" >
{{-- class="max-w-2xl mx-auto mt-10 bg-white border border-gray-200 rounded-2xl shadow-lg p-6 sm:p-8"> --}}

    @csrf
 {{-- <input type="hidden" name="post_id" value="{{'post_id'}}"> --}}

    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900">
            Ajouter un commentaire
        </h2>
        <p class="text-gray-500 mt-2 text-sm">
            Partagez votre avis ou votre remarque.
        </p>
    </div>
    <!-- Commentaire -->
    <div class="mb-6">
        <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
            Commentaire
        </label>

        <textarea
            id="content"
            name="content"
            rows="5"
            class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-3 text-gray-800
                   placeholder-gray-400 transition resize-none
                   focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none"
            placeholder="Écrivez votre commentaire..."
            required
        >{{ old('conntenu') }}</textarea>

        @error('conntenu')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>

    <!-- Button -->
    <div class="flex justify-end">
        <button
            type="submit"
            class=" mx-auto inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3
                   text-sm font-semibold text-white shadow-md transition
                   hover:bg-blue-700 hover:shadow-lg
                   focus:outline-none focus:ring-4 focus:ring-blue-200"
        >
            Publier le commentaire
        </button>
    </div>
</form>
