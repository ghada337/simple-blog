<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $post->title }}" placeholder="Title">
        <textarea name="content" placeholder="Content">{{ $post->content }}</textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
