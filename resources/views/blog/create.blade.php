<!DOCTYPE html>
<html>
<head>
    <title>Create Blog Post</title>
</head>
<body>
    <h1>Create Blog Post</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/blog" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" required></textarea><br><br>

        <button type="submit">Create Post</button>
    </form>

    <a href="/blog">Back to Blog Posts</a>
</body>
</html>