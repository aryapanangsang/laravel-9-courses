<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data Student</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                alert('{{ $error }}')
            </script>
        @endforeach
    @endif

    <form action="{{ route('store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nama Student">
        <input type="number" name="score" placeholder="Score Student">
        <button type="submit">Add</button>
    </form>
    <br>
    <a style="padding: 10px 25px; background-color: red; color:white" href="{{ route('home') }}"> Go Back Home</a>

</body>
</html>