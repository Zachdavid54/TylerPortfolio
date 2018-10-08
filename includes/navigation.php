<?php
$ini = parse_ini_file('app.ini');
?>

<div class="order-sm-2 col-sm-4 bg-primary-1 sidebar">
    <div class="row">
        <div class="col-md-12 p-md">
            <div class="logo">
                <a href="/"><img src="images/tevs-logo.svg" alt="logo"></a>
            </div>
            <ul class="nav flex-column m-top-md">
                <li class="nav-item">
                    <a class="nav-link <?php if ($CURRENT_PAGE == " Index") {?>active
                        <?php }?>" href="
                        <?php echo $ini['base_url']; ?>/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($CURRENT_PAGE == " Contact") {?>active
                        <?php }?>" href="
                        <?php echo $ini['base_url']; ?>/contact.php">Contact</a>
                </li>
            </ul>
            <p class="m-top-md">Hello, my name is Tyler Evans. My goal as a UI/UX Designer is to create memorable digital experiences. Experiences that are user friendly &amp; long lasting.</p>
            <a href="mailto:tevs.creative@gmail.com" class="btn btn-primary m-top-md">Get In Touch</a>
        </div>
    </div>
</div>
