<header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fs-6" href="/">Laravel 40</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

      </div>

      <div id="navbarSearch" class="navbar-search">
        <input class="form-control border-0" type="text" placeholder="Search" aria-label="Search">
      </div>

      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger" style="margin-left: 10px;">Logout <i class="bi bi-box-arrow-right"></i></button>
      </form>
    </div>
  </header>
