<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/styleAdmHome.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <nav>
        <div class="logo"><a href="home"><img src="{{ asset('assets/v1_25.png') }}" alt="pisonzlogo" width="60px"
                    height="40px"></a></div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li>
                <label for="btn-1" class="show">Transaction +</label>
                <a href="#">Transaction</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="payment">Payment</a></li>
                    <li><a href="#">Top Up</a></li>
                </ul>
            </li>
            <li><a class="active" href="category">Category</a></li>
            <li><a href="product">Product</a></li>
            <li><a href="game">Game</a></li>
        </ul>
    </nav>

    <div class="category_container">
        @yield('content')
    </div>
</body>

</html>
