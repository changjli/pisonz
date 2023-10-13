{{-- navbar --}}
<nav>
    <div class="logo"><a href="home"><img src="{{ asset('assets/v1_25.png') }}" alt="pisonzlogo" width="60px"
                height="40px"></a></div>
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
        <li><a class="active" href="/admin">Home</a></li>
        <li><a href="/admin/users">Admin</a></li>
        <li><a href="/admin/payments">Payment</a></li>
        <li><a href="/admin/transactions">Top Up</a></li>
        <li><a href="/admin/categories">Category</a></li>
        <li><a href="/admin/products">Product</a></li>
        <li><a href="/admin/games">Game</a></li>
        <li>
            <form action="/admin/logout" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </li>
    </ul>
</nav>
