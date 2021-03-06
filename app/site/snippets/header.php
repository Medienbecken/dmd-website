<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimum-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= url('/favicon-32x32.png') ?>">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php snippet('inline') ?>

  <?php echo css('assets/css/bootstrap.min.css') ?>
  <?php echo css('assets/css/main.css') ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>

<?php snippet('menu') ?>
