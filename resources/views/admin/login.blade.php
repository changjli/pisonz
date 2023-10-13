<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @if (session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div>{{ session('error') }}</div>
    @endif
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="w-[300px] h-[500px] shadow-md p-6 rounded-md flex flex-col items-center">
            <img src="{{ asset('assets/bglogo.png') }}" alt="" class="w-[120px] h-[100px]">
            <div class="mt-2 text-xl text-primary font-bold">Login</div>
            <form action="/admin/login" method="POST" class="mt-2 w-full">
                @csrf
                <div class="flex flex-col mt-2">
                    <label for="">Email</label>
                    <input type="text" name="email"
                        class="border-2 border-primary px-2 py-1 rounded-sm mt-1 text-sm"
                        placeholder="enter email here">
                </div>
                <div class="flex flex-col mt-2">
                    <label for="">Password</label>
                    <input type="password" name="password"
                        class="border-2 border-primary px-2 py-1 rounded-sm mt-1 text-sm"
                        placeholder="enter password here">
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="bg-primary text-white py-1 px-5 rounded-lg text-center w-full hover:bg-white hover:border-2 hover:border-primary hover:text-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
