<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Login Admin</h2>

    @If ($errors->any())
        <div style="color: red;">
                {{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <input name="username" placeholder="username" required>
        <br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        </form>
     
</body>
</html>