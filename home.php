<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>
<?php include 'header.php'; ?>
<?php include 'themeSelector.php'; ?>
    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="img/favicon/android-icon-48x48.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        Lifeforce v1
    </a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="webworkers.php">Web workers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="canvas.php">Canvas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Animation</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="logout.php" method="GET">
        <button class="btn btn-outline-success" type="submit">Log out</button>
      </form>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Lifeforce Project v1</h1>
    <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
    <a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.3/components/navbar/" role="button">Bootstrap 5.3 - Navbar &raquo;</a>
    <br><br>
    <p class="lead">Some documentation for Web Workers.</p>
    <a class="btn btn-lg btn-primary" href="https://developer.mozilla.org/en-US/docs/Web/API/Web_Workers_API/Using_web_workers" role="button">Using Web Workers &raquo;</a>
    <a class="btn btn-lg btn-primary" href="https://www.w3schools.com/html/html5_webworkers.asp" role="button">HTML Web Workers API &raquo;</a>
    <br><br>
    <p class="lead">Some documentation for Canvas.</p>
    <a class="btn btn-lg btn-primary" href="https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Basic_usage" role="button">Basic Usage &raquo;</a>
    <a class="btn btn-lg btn-primary" href="https://joshondesign.com/p/books/canvasdeepdive/toc.html" role="button">HTML Canvas Deep Dive &raquo;</a>
    
    <br><br>
    <ul class="list-group">
      <li class="list-group-item">Enable Boostrap 5 Navbar</li>
      <li class="list-group-item">Create a Favicon</li>
      <li class="list-group-item">All JavaScript files folder is "js"</li>
      <li class="list-group-item">All CSS files folder is "css"</li>
      <li class="list-group-item">All image files folder is "img"</li>
      <li class="list-group-item">Examples for HTML5 Web Workers</li>
      <li class="list-group-item">Example for HTML5 Canvas</li>
    </ul>
  </div>
</main>

<?php include 'footer.php'; ?>
