<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <?php include("includes/CSSInclude.php");?>
  <title>
    <?php print $PAGE_TITLE;?>
  </title>
</head>

<body>
  <div class="header-bar"></div>
  <div class="container-fluid">
    <div class="row">
      <?php include("includes/navigation.php");?>
      <div class="order-sm-1 col-sm-8 p-md">
        <div class="row">
          <div class="col-md-12">
            <img class="m-btm-md" src="images/contact_photo.jpg" alt="contact_photo">
            <h2>What do I do?</h2>
            <p>I am currently a Digital Designer for Pensacola Christian College.</p>
          </div>
        </div>
        <?php include("includes/footer.php");?>
      </div>
    </div>
  </div>
  <?php include("includes/JSInclude.php");?>
</body>

</html>