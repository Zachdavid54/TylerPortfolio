<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/CSSInclude.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="order-sm-2 col-sm-4 bg-primary-1 sidebar">
            <div class="row">
                <div class="col-md-12 p-md">
                    <div class="logo">
                        <a href="#"><img src="Images/tevs-logo.svg" alt="logo"></a>
                    </div>

                    <?php include("includes/navigation.php");?>

                    <p class="m-top-md">Hello, my name is Tyler Evans. My goal as a UI/UX Designer is to create
                        memorable digital
                        experiences. Experiences that are user friendly &amp; long lasting.</p>
                    <a href="mailto:tevs.creative@gmail.com" class="btn btn-primary m-top-md">Get In Touch</a>
                </div>
            </div>
        </div>
        <div class="order-sm-1 col-sm-8 p-md">
            <p class="m-top-md">Add Content Here</p>
        </div>
    </div>
</div>
<?php include("includes/JSInclude.php");?>
<?php include("includes/footer.php");?>

</body>
</html>