{{-- navbar --}}
<nav id="nav">
    <div class="logo"><a href="home"><img src="{{ asset('assets/v1_25.png') }}" alt="pisonzlogo" width="60px"
                height="40px"></a></div>
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
        <li><a class="links-menu" href="/admin">Home</a></li>
        <li><a class="links-menu" href="/admin/payments">Payment</a></li>
        <li><a class="links-menu" href="/admin/transactions">Top Up</a></li>
        <li><a class="links-menu" href="/admin/categories">Category</a></li>
        <li><a class="links-menu" href="/admin/products">Product</a></li>
        <li><a class="links-menu" href="/admin/games">Game</a></li>
        <li><a class="links-menu" href="/admin/promos">Promo</a></li>
        <li><a class="links-menu" href="/admin/banners">Banner</a></li>
        <li>
            <form action="/admin/logout" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </li>
    </ul>
</nav>