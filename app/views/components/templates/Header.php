<header id="header" class="header">
  <nav class="navbar navbar-expand-lg bg-body-tertiary py-0">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="/assets/images/logo.png" alt="Danny Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="navigation" class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/#start">Start</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#connect">Find me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#project">Inspiration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#contact">Contact</a>
          </li>
          <li id="nav__user-dropdown" class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000!important; font-weight: bold;"></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" onClick="onLogout();">Logout</a></li>
            </ul>
          </li>
        </ul>
        <a id="login-button" href="/login" class="button button--appearance-ghost">Login</a>
      </div>
    </div>
  </nav>
</header>