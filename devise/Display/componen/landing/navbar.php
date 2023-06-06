<!-- Larger screens navbar -->
<nav class="navbar navbar-expand-lg d-none d-lg-block">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <i class="bi bi-arrows-angle-expand text-white"></i>
    </a>

    <!-- Centered links -->
    <div class="navbar-collapse justify-content-center">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Docs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Community</a>
        </li>
      </ul>
    </div>

    <!-- Search bar -->
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">
        <i class="bi bi-search"></i>
      </button>
    </form>
  </div>
</nav>

<!-- Smaller screens navbar -->
<nav class="navbar navbar-dark bg-dark d-lg-none">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <i class="bi bi-arrows-angle-expand"></i>
    </a>

    <!-- Hamburger icon -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Offcanvas sidebar -->
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="sidebarNav" aria-labelledby="sidebarNavLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarNavLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Docs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Community</a>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>