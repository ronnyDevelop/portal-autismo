<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tea-Acompaño</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <!-- Bulma Version 0.6.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" integrity="sha256-2k1KVsNPRXxZOsXQ8aqcZ9GOOwmJTMoOB5o5Qp1d6/s=" crossorigin="anonymous" />
     <link rel="stylesheet" type="text/css" href="../css/hero.css">
</head>
<body>

  <section class="hero is-info is-medium is-bold">
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item" href="../">
              <img src="http://bulma.io/images/bulma-type-white.png" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
              <a class="navbar-item" href="/">
                Inicio
              </a>
              <a class="navbar-item" href="about">
                Sobre nosotros
              </a>
              <a class="navbar-item" href="foro">
                Foro
              </a>
              <a class="navbar-item" href="contacto">
                Contacto
              </a>
              <a class="navbar-item" href="register">
                Registro
              </a>
              <a class="navbar-item" href="login">
                Login
              </a>
              <span class="navbar-item">
                <a class="button is-white is-outlined is-small" href="https://github.com/dansup/bulma-templates/blob/master/templates/hero.html">
                  <span class="icon">
                    <i class="fa fa-github"></i>
                  </span>
                  <span>View Source</span>
                </a>
              </span>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          The new standard in &lt;insert industry here&gt;
        </h1>
        <h2 class="subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </h2>
      </div>
    </div>

  </section>

  <div class="box cta">
    <p class="has-text-centered">
      <span class="tag is-primary">New</span> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

    @yield('content')

  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>Tea-Acompaño</strong> by <a href="https://josearandav.github.io/">José Aranda Vera</a>. The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
        </p>
        <p>
          <a class="icon" href="https://github.com/josearandav">
            <i class="fa fa-github"></i>
          </a>
        </p>
      </div>
    </div>
  </footer>
  <script async type="text/javascript" src="../js/bulma.js"></script>
</body>
</html>

