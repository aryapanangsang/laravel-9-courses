<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show-Student</title>
</head>
<body>
    <h4>Detail Data Student</h4>

    <p>Id :{{ $student->id }}</p>
    <p>Nama :{{ $student->name }}</p>
    <p>Score :{{ $student->score }}</p>

    <h5>Student Activities</h5>
    @foreach ($student->activities as $activity)
        <p>{{ $activity->name }}</p>
    @endforeach

    <br>
    <div class="tombol">
        <a style="padding: 10px 25px; background-color: red; color:white" href="{{ $student->id - 1 }} ">Prev</a>
        <a style="padding: 10px 25px; background-color: blue; color:white" href="{{ $student->id + 1}} ">Next</a>
    </div>
    <br>
    <br>
    <a style="padding: 10px 25px; background-color: seagreen; color:white" href="{{ route('home') }}">Home</a>
</body>
</html>