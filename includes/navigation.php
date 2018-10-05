<?php
$ini = parse_ini_file('app.ini');
?>
<ul class="nav flex-column m-top-md">
    <li class="nav-item">
        <a class="nav-link active" <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="<?php echo $ini['base_url']; ?>/index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Work") {?>active<?php }?>" href="<?php echo $ini['base_url']; ?>/work.php">About Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="<?php echo $ini['base_url']; ?>/contact.php">Contact</a>
    </li>
</ul>