<title><?php print $PAGE_TITLE;?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
<?php } ?>

<?php
$ini = parse_ini_file('app.ini');
?>
<script  href="<?php echo $ini['base_url']; ?>/Includes/js/common-scripts.js" ></script>
<script href="<?php echo $ini['base_url']; ?>/Includes/js/matchheight.js" ></script>
<script href="<?php echo $ini['base_url']; ?>/Includes/js/bootstrap.min.js"></script>
<script href="<?php echo $ini['base_url']; ?>/Includes/js/popper.min.js" ></script>
<script href="<?php echo $ini['base_url']; ?>/Includes/js/jquery-3.2.1.min.js"></script>

<title>tevs.creative</title>

