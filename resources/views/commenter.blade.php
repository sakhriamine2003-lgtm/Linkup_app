<script src="https://cdn.tailwindcss.com"></script>


{{-- <form action="{{ route('comments.store') }}" method="POST" --}}
{{-- class="max-w-2xl mx-auto mt-10 bg-white border border-gray-200 rounded-2xl shadow-lg p-6 sm:p-8"> --}}

    @csrf

    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900">
            Ajouter un commentaire
        </h2>
        <p class="text-gray-500 mt-2 text-sm">
            Partagez votre avis ou votre remarque.
        </p>
    </div>

    <!-- Nom -->
    <div class="mb-5">
        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
            Nom complet
        </label>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-3 text-gray-800
                   placeholder-gray-400 transition
                   focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none"
            placeholder="Entrez votre nom"
            required
        >

        @error('name')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email -->
    <div class="mb-5">
        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
            Adresse email
        </label>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-3 text-gray-800
                   placeholder-gray-400 transition
                   focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none"
            placeholder="exemple@email.com"
            required
        >

        @error('email')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
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
        >{{ old('content') }}</textarea>

        @error('content')
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
