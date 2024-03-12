<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Picture</title>
</head>
<body>
    <p>{{ $picture->name }}</p>
    <p>{{ $picture->path }}</p>
    <img src="{{ $url }}" alt="" width="200px">

    <form action="{{ route('picture.delete', $picture) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Delete</button>
    </form>

    <form action="{{ route('picture.copy', $picture) }}" method="get">        
        <button type="submit">Copy</button>
    </form>
    <form action="{{ route('picture.move', $picture) }}" method="get">        
        <button type="submit">move</button>
    </form>
</body>
</html>