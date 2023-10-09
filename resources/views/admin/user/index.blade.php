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
        <a href="/admin/user/create">create</a>
    </div>
    <div>
        @foreach ($users as $user)
        <div>{{$user->name}}</div>
        <a href="/admin/user/{{$user->id}}">show</a>
        <a href="/admin/user/{{$user->id}}/edit">edit</a>
        <form action="/admin/user/{{$user->id}}" method="post">
            @csrf
            @method('delete');
            <button type="submit">delete</button>
        </form>
    @endforeach
    </div>
  
</body>
</html>