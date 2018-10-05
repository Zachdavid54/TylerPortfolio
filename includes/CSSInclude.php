<title><?php print $PAGE_TITLE;?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
<?php } ?>

<?php
$ini = parse_ini_file('app.ini');
?>
<link  href="<?php echo $ini['base_url']; ?>/Includes/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="<?php echo $ini['base_url']; ?>/Includes/css/elements.css" type="text/css" rel="stylesheet">
<link href="<?php echo $ini['base_url']; ?>/Includes/css/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo $ini['base_url']; ?>/Includes/css/header.css" type="text/css" rel="stylesheet">

<title>tevs.creative</title>