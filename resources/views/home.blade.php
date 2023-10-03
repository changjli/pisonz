<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pisonz Store</title>
  <link rel="stylesheet" href="{{ asset('css/styleAdmHome.css') }}">
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  {{-- <nav class="navbar">
    <!-- LOGO -->
    <div class="logo"><a href="home"><img src="{{ asset('assets/v1_25.png')}}" alt="pisonzlogo" width="60px" height="40px"></a></div>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">

      <!-- USING CHECKBOX HACK -->
      <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="hamburger">&#9776;</label>

      <!-- NAVIGATION MENUS -->
      <div class="menu">

        <li><a class="active" href="home">Home</a></li>
        <li class="transaction">
          <a href="#viewtransaction">Transaction</a>

          <!-- DROPDOWN MENU -->
          <ul class="dropdown">
            <li><a href="#viewtransaction">Payment</a></li>
            <li><a href="AdmTransactionTopup.html">Top Up</a></li>
          </ul>
        </li>

        <li><a href="#viewcategory">Category</a></li>
        <li><a href="#viewproduct">Product</a></li>
        <li><a href="#viewgame">Game</a></li>
      </div>
    </ul>
  </nav> --}}

  <nav>
    <div class="logo"><a href="home"><img src="{{ asset('assets/v1_25.png')}}" alt="pisonzlogo" width="60px" height="40px"></a></div>
    <label for="btn" class="icon">
      <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
      <li><a class="active" href="home">Home</a></li>
      <li><a href="#">Admin</a></li>
      <li>
        <label for="btn-1" class="show">Transaction +</label>
        <a href="#viewtransaction">Transaction</a>
        <input type="checkbox" id="btn-1">
        <ul>
          <li><a href="#viewtransaction">Payment</a></li>
          <li><a href="#viewtransaction">Top Up</a></li>
        </ul>
      </li>
      <li><a href="#viewcategory">Category</a></li>
      <li><a href="#viewproduct">Product</a></li>
      <li><a href="#viewgame">Game</a></li>
    </ul>
  </nav>

<!--transaction section-->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Transaction</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>View Transaction</b></h1>
      <p><span style="font-size:36px">View your payment or topup here.</span></p>
      <button class="button"><a href="payment">View Payment</a></button>
      <button class="button"><a href="AdmTransactionTopup.html">View Topup</a></button>
    </div>
    <div class="column-33" id="viewtransaction">
        <img src="{{ asset('assets/transexample.png') }}" width="335" height="471">
    </div>
  </div>
</div>
<!--category section-->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33"  id="viewcategory">
      <img src="{{ asset('assets/categoryexample.jpeg') }}" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>Category</b></h1>
      <h1 class="large-font" style="color:red;"><b>View Category</b></h1>
      <p><span style="font-size:24px">View your category.</span></p>
      <button class="button"><a href="category">View Category</a></button>
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
      <button class="button"><a href="product">View Product</a></button>
    </div>
    <div class="column-33" id="viewproduct">
        <img src="{{ asset('assets/download.png') }}" width="335" height="471" >
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
      <button class="button"><a href="game" style="">View Game</a></button>
    </div>
  </div>
</div>




  <a href="#" class="btnup" style="color: white">UP</a>

</body>
</html>