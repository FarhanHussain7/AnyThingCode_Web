<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./public/logo3.png" alt="" class="img-fluid" style="max-height: 40px;">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <?php
        $isLoggedIn = isset($_SESSION['user']) && !empty($_SESSION['user']['username']);

        if ($isLoggedIn) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="/PROJECT/logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/PROJECT/client/ask.php">Ask Question</a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signUp=true">SignUp</a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Latest Question</a>
        </li>
      </ul>
    </div>
  </div>
</nav>