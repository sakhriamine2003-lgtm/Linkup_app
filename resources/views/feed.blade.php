@extends('layouts.app')
@section('content')

<h2>Fil d'actualité</h2>
@forelse ($posts as $post)
 <div class="post-card">
 <h3>{{ $post->user->name }}</h3>
 <p>{{ $post->user->headline ?? 'Utilisateur LinkUp' }}</p>
 @if ($post->user->image_url)
 <img src="{{ $post->user->image_url }}" width="50">
 @else
 <div>Photo placeholder</div>
 @endif
 <p>{{ $post->content }}</p>
 <small>{{ $post->created_at->format('d/m/Y H:i') }}</small>
 </div>
@empty

 <p>Aucun post pour le moment...</p>
@endforelse
@endsection