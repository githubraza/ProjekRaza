<nav class=" navbar navbar-expand-lg navbar-dark">
<div class='container'>
<a class="navbar-brand" href="/"><i class="bi bi-building"></i> | SG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{($title === "Home") ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{($title === "Listing") ? 'active' : '' }}" href="/listing">Listing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{($title === "Cart") ? 'active' : '' }}" href="/cart">Cart</a>
      </li>
    </ul>

    @if (Auth::check())
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link {{($title === "Logout") ? 'active' : '' }}" href="/logout" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Logout</a>
      </li>
    </ul>

    @else
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link {{($title === "Login") ? 'active' : '' }}" href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Daftar/Masuk</a>
      </li>
    </ul>
    @endif

  </div>
</nav>
</div>
</div>
