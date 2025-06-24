<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.index') }}">Back</a> | 
<a href="{{ route('posts.edit', $post) }}">Edit</a> | 
<form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
