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
    <div>
        <form action="/admin/user/{{$user->id}}" method="POST">
            @method('PUT')
            @csrf
            <div>
                <label for="">name</label>
                <input type="text" name="name" value="{{old('name', $user->name)}}">
            </div>
            <div>
                <label for="">email</label>
                <input type="text" name="email" value="{{old('email', $user->email)}}">
            </div>
            <div>
                <button type="submit">update</button>
            </div>
        </form>
    </div>
</body>
</html>