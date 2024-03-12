<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    `<title>Halaman Index</title>
</head>
<body>
    <div class="main">
        <h1>{{ __('Welcome to This Page!') }}</h1>
        <p>Locale : {{ App::getLocale() }}</p>        
        <a href="{{ route('set_locale', 'en') }}">English</a>
        <a href="{{ route('set_locale', 'id') }}">Indonesia</a>
        @if(Auth::check())            
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">{{__('Logout') }}</button>
            </form>
            <p>Id User : {{ $id }}</p>
            <p>{{ __('Name') }} : {{ $user->name }}</p>
            <p>{{ __('Email') }}: {{ $user->email }}</p>
            <p>{{ __('Role') }} : {{ $user->role }}</p>
        @else 
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Score') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($student as $data)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td><a href="{{ route('show', $student->id) }}">{{ $student->name }}</a></td>
                        <td>{{ $student->Score }}</td>
                        <td>{{ __('Action') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

      {{ __('Current Page') }} :  {{ $student->currentPage() }} <br>
      {{ __('Total Page') }}  {{ $student->total() }} <br>
      {{ __('Data Per Page') }}  {{ $student->perPage() }}        
        {{ $student->links('pagination::bootstrap-4') }}

    </div>
</body>
</html>