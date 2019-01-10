<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Tevs Creative is...">
  <meta name="keywords" content="Tevs Creative,Tevs,Creative,Web Design,Tyler Evans, Web Develope">
  <?php include("includes/CSSInclude.php");?>
  <title><?php print $PAGE_TITLE;?></title>
  <style>

  </style>
</head>

<body>
  <div class="header-bar"></div>
  <?php include("includes/navigation.php");?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
          <p class="m-btm-md">
            Hello, my name is Tyler Evans. My goal as a UI/UX Designer is to create memorable digital experiences. Experiences
            that are user friendly & long lasting. Take a look at some of my below projects.
          </p>
          <div class="divide-bar m-btm-md"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 m-btm-md">
          <div class="item">
          <a href="images/portfolio-items/posters/Abeka_Poster.jpg" data-fancybox="images" data-caption="This is the caption.">
            <img src="images/portfolio-items/posters/Abeka_Poster.jpg" alt="" />
          </a>
          </div>
        </div>
        <div class="col-md-6 m-btm-md">
          <div class="item">
            <img src="images/portfolio-items/posters/Library_Poster.jpg" alt="portfolio poster">
          </div>
        </div>
        <div class="col-md-6 m-btm-md">
          <div class="item">
            <img src="images/portfolio-items/posters/Eagles_Poster.jpg" alt="portfolio poster">
          </div>
        </div>
        <div class="col-md-6 m-btm-md">
          <div class="item">
            <img src="images/portfolio-items/posters/PG_Poster.jpg" alt="portfolio poster">
          </div>
        </div>
        <div class="col-md-6 m-btm-md">
          <div class="item">
            <img src="images/portfolio-items/posters/Ads_Poster.png" alt="portfolio poster">
          </div>
        </div>
        <div class="col-md-6 m-btm-md">
          <div class="item">
            <img src="images/portfolio-items/posters/RickS_Poster.jpg" alt="portfolio poster">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php include("includes/footer.php");?>

  <?php include("includes/JSInclude.php");?>
</body>

</html>