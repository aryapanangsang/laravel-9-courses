<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Student</title>
</head>
<body>    
    <form action="{{ route('update', $student) }}" method="post">
        @method('patch')
        @csrf
        <input type="text" name="name" value="{{ $student->name }}">
        <input type="number" name="score" value="{{ $student->score }}">
        <button type="submit">Update</button>
    </form>
    <br>
    <a style="padding: 10px 25px; background-color: red; color:white" href="{{ route('home') }}"> Go Back Home</a>

</body>
</html>