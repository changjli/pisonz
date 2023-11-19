<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pisonz Store</title>
    <link rel = "icon" href = "{{ asset('assets/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/styleAdmHome.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <nav>
        <div class="logo"><a href="/admin"><img src="{{ asset('assets/v1_25.png') }}" alt="pisonzlogo" width="60px"
                    height="40px"></a></div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="/admin">Home</a></li>
            <li><a href="#viewtransaction">Payment</a></li>
            <li><a href="#viewtransaction">Top Up</a></li>
            <li><a href="#viewcategory">Category</a></li>
            <li><a href="#viewproduct">Product</a></li>
            <li><a href="#viewgame">Game</a></li>
            <li><a href="#viewpromo">Promo</a></li>
            <li><a href="#viewbanner">Banner</a></li>
            <li>
                <form action="/admin/logout" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn" style="cursor: pointer">Logout</button>
                </form>
            </li>
        </ul>
    </nav>

    <!--transaction section-->
    <div class="container">
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font"><b>Transaction</b></h1>
                <h1 class="large-font" style="color:MediumSeaGreen;"><b>View Transaction</b></h1>
                <p><span style="font-size:36px">View your payment or topup here.</span></p>
                <button class="button"><a href="/admin/payments">View Payment</a></button>
                <button class="button"><a href="/admin/transactions">View Topup</a></button>
            </div>
            <div class="column-33" id="viewtransaction">
                <img src="{{ asset('assets/transexample.png') }}" width="335" height="471">
            </div>
        </div>
    </div>
    <!--category section-->
    <div class="container" style="background-color:#f1f1f1">
        <div class="row">
            <div class="column-33" id="viewcategory">
                <img src="{{ asset('assets/categoryexample.jpeg') }}" alt="App" width="335" height="471">
            </div>
            <div class="column-66">
                <h1 class="xlarge-font"><b>Category</b></h1>
                <h1 class="large-font" style="color:red;"><b>View Category</b></h1>
                <p><span style="font-size:24px">View your category.</span></p>
                <button class="button"><a href="/admin/categories">View Category</a></button>
            </div>
        </div>
    </div>
    <!--product section-->
    <div class="container">
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font"><b>Product</b></h1>
                <h1 class="large-font" style="color:MediumSeaGreen;"><b>View your product</b></h1>
                <p><span style="font-size:36px">Use the button below to view your product.</span></p>
                <button class="button"><a href="/admin/products">View Product</a></button>
            </div>
            <div class="column-33" id="viewproduct">
                <img src="{{ asset('assets/download.png') }}" width="335" height="471">
            </div>
        </div>
    </div>
    <!--game section-->
    <div class="container" style="background-color:#f1f1f1">
        <div class="row">
            <div class="column-33" id="viewgame">
                <img src="{{ asset('assets/categoryexample.jpeg') }}" alt="App" width="335" height="471">
            </div>
            <div class="column-66">
                <h1 class="xlarge-font"><b>Game</b></h1>
                <h1 class="large-font" style="color:red;"><b>View your games</b></h1>
                <p><span style="font-size:24px">Use the button below to view your game.</span></p>
                <button class="button"><a href="/admin/games" style="">View Game</a></button>
            </div>
        </div>
    </div>
    {{-- Promo Section --}}
    <div class="container">
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font"><b>Promo</b></h1>
                <h1 class="large-font" style="color:MediumSeaGreen;"><b>View Promo here</b></h1>
                <p><span style="font-size:36px">Use the button below to view promo page.</span></p>
                <button class="button"><a href="/admin/promos">View Promo</a></button>
            </div>
            <div class="column-33" id="viewpromo">
                <img src="{{ asset('assets/download.png') }}" width="335" height="471">
            </div>
        </div>
    </div>
    <!--banner section-->
    <div class="container" style="background-color:#f1f1f1">
        <div class="row">
            <div class="column-33" id="viewbanner">
                <img src="{{ asset('assets/categoryexample.jpeg') }}" alt="App" width="335" height="471">
            </div>
            <div class="column-66">
                <h1 class="xlarge-font"><b>Banner</b></h1>
                <h1 class="large-font" style="color:red;"><b>View Banner here</b></h1>
                <p><span style="font-size:24px">Use the button below to view banner page.</span></p>
                <button class="button"><a href="/admin/banners" style="">View Banner</a></button>
            </div>
        </div>
    </div>

    <a href="#" class="btnup" style="color: white">UP</a>

</body>

</html>
