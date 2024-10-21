<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
</head>
<body>
    <h1>Blog Posts</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('blog.create') }}">Create New Post</a>

    <ul>
        @forelse($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <hr>
            </li>
        @empty
            <li>No posts available.</li>
        @endforelse
    </ul>
</body>
</html>