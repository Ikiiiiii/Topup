<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/admin">@yield('brand')</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="/detailProd">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/project">Penjualan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-dark nav-link">Logout</button>
                </form>
              </li>
              @yield('logout')
            </ul>
          </div>
    </div>
</nav>