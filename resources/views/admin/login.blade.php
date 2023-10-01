<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        @csrf
        <h1>Login</h1>
        <div>
            <label for="">email</label>
            <input type="text">
        </div>
        <div>
            <label for="">password</label>
            <input type="text">
        </div>
    </form>

    <form action="" method="POST">
        @csrf
        <h1>Register</h1>
        <div>
            <label for="">email</label>
            <input type="text">
        </div>
        <div>
            <label for="">password</label>
            <input type="text">
        </div>
    </form>
</body>
</html>