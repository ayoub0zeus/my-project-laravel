<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
</head>
<body>

    <h1>Article Title :{{ $article->title }}</h1>
    
    <p> Article Content :{{ $article->content }}</p>

    <p>Created at: {{ $article->created_at }}</p>
    <p>Last updated at: {{ $article->updated_at }}</p>

</body>
</html>
