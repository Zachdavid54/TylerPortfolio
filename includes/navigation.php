<?php
$ini = parse_ini_file('app.ini');
?>

<nav class="navbar navbar-expand-lg m-btm-lg p-md">
  <a class="navbar-brand logo" href="#">
    <img src="/images/tevs-logo.svg" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link<?php if ($CURRENT_PAGE == " Index") {?> active
          <?php }?>" href="<?php echo $ini['base_url']; ?>/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link<?php if ($CURRENT_PAGE == " Contact") {?> active
          <?php }?>" href="<?php echo $ini['base_url']; ?>/contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a href="mailto:tevs.creative@gmail.com" class="btn btn-primary">Get In Touch</a>
      </li>
    </ul>
  </div>
</nav>