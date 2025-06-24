<h1>Edit Post</h1>
<form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('PUT')
    <input name="title" value="{{ $post->title }}" placeholder="Title"><br>
    <textarea name="content" placeholder="Content">{{ $post->content }}</textarea><br>
    <button type="submit">Update</button>
</form>
