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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    @include('admin.navbar')
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
    
            <li><a href="home" style="text-decoration: none">Home</a></li>
            <li class="transaction">
              <a href="" style="text-decoration: none">Transaction</a>
    
              <!-- DROPDOWN MENU -->
              <ul class="dropdown">
                <li><a href="payment" style="text-decoration: none">Payment</a></li>
                <li><a href="AdmTransactionTopup.html" style="text-decoration: none">Top Up</a></li>
              </ul>
            </li>
    
            <li><a class="active" href="category" style="text-decoration: none">Category</a></li>
            <li><a href="product" style="text-decoration: none">Product</a></li>
            <li><a href="game" style="text-decoration: none">Game</a></li>
          </div>
        </ul>
      </nav> --}}
    <div class="category_container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
