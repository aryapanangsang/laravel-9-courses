<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <h2> Daftar Nama Students</h2>
        <table border="1 ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $tampil)
                    <tr>
                        <td>{{ $tampil->id }}</td>
                        <td>{{ $tampil->name }}</td>
                        <td>{{ $tampil->score }}</td>
                    </tr>
                @endforeach        
            </tbody>
        </table>                
    </div>
</body>
</html>