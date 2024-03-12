<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example</title>
</head>
<body>   

    {{-- <p>Hi My Name is {{ $name }}</p>
    <p>Alamat Saya di {{ $address }}</p> --}}

    {{-- <p>{{ $activity }} :</p>
    @foreach ($students as $student)
        <p>{{ $student->name }}</p>   
    @endforeach --}}

    <p>{{ $student }} :</p>
    @foreach ($activities as $activity)
        <p>{{ $activity->name }}</p>   
    @endforeach
    
</body>
</html>
