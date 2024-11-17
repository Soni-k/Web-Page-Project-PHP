<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
			<img src="./public/logo.png" alt="">
		</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <?php
if (!empty($_SESSION['user']['name'])) { // Check if the user is logged in
?>
  <li class="nav-item">
    <a class="nav-link" href="?login=true">Logout</a>
  </li>
<?php
} else { // If the user is not logged in
?>
  <li class="nav-item">
    <a class="nav-link" href="?login=true">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?signup=true">Signup</a>
  </li>
<?php
}
?>


        <!-- <?php
         if(!empty($_SESSION['user']['name'])){ ?>
        // if($_SESSION['user']['name']){ ?>
          <li class="nav-item">
          <a class="nav-link" href="?login=true">Logout</a>
        </li>
        <?php } ?>

        <?php
        if(!$_SESSION['user']['name']){ ?>
           <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
				<li class="nav-item">
          <a class="nav-link" href="?signup=true">Signup</a>
        </li>
        <?php } ?> -->

        <!-- <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
				<li class="nav-item">
          <a class="nav-link" href="?signup=true">Signup</a>
        </li> -->
       

        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
				<a class="nav-link" href="#">Latest Question</a>
          <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
        </li>
      </ul>
    </div>
  </div>
</nav>