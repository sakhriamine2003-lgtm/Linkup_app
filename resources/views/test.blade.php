@foreach ($posts as $post)
<p>{{$post->id}}</p>
<P>{{$post->user->name}}</P>
<P>{{$post->user->email}}</P>
@endforeach
