<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Tevs Creative is...">
  <meta name="keywords" content="Tevs Creative,Tevs,Creative,Web Design,Tyler Evans, Web Developer">
  <?php include("includes/CSSInclude.php");?>
  <title><?php print $PAGE_TITLE;?></title>
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
          <p>
            <a href="/images/portfolio-items/posters/Abeka_Poster.jpg" class="btn btn-primary quick_view m-top-md" data-fancybox="quick-view" data-qw-form="qw-form-1">
            Open demo</a>
            <span class="hidden">
              <a class="quick_view" data-fancybox="quick-view" href="images/portfolio-items/posters/Ads_Poster.png">#2</a>
              <a class="quick_view" data-fancybox="quick-view" href="images/portfolio-items/posters/PG_Poster.jpg">#3</a>
            </span>
          </p>
          <div id="qw-form-1" class="hidden">
            <h3>Some Fancy Dress</h3>
            <p>
              There should be a price tag and a brief description of the product.
            </p>
            <p>
              Also, a form where customers could, for example, choose product size, color and quantity.
            </p>
            <p>
              <button class="btn btn-primary" data-fancybox-close="">Add to cart</button>
            </p>
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