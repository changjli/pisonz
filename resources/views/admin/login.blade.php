<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    @if (session()->has('error'))
        <div>{{session('error')}}</div>
    @endif
    <form action="/admin/login" method="POST">
        @csrf
        <h1>Login</h1>
        <div>
            <label for="">email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">password</label>
            <input type="text" name="password">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>

    <form action="/admin/register" method="POST">
        @csrf
        <h1>Register</h1>
        <div>
            <label for="">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">password</label>
            <input type="text" name="password">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>