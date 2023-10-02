<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="/admin/user" method="POST">
            @csrf
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
                <button type="submit">create</button>
            </div>
        </form>
    </div>
</body>
</html>