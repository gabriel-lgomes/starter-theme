<?php

   $title       = ((isset($title) && !empty($title)) ? $title : '');
   $description = ((isset($description) && !empty($description)) ? $description : '');
   $keywords    = ((isset($keywords) && !empty($keywords)) ? $keywords : '');

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="title" content="<?= $title;?>" />
    <meta name="description" content="<?= $description;?>" />
    <meta name="keywords" content="<?= $keywords;?>" />
    <meta name="robots" content="index,follow" />

    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $title;?>" />
    <meta property="og:description" content="<?= $description;?>" />

    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:locale" content="" />

    <link rel="icon" href="" />

    <title><?= $title;?></title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="/assets/css/styles.min.css" media="all">
    <link rel="stylesheet" href="/assets/css/styles.mobile.min.css" media="screen and (max-width: 767px)">
    <link rel="stylesheet" href="/assets/css/styles.desktop.min.css" media="screen and (min-width: 992px)">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header></header>
    <footer></footer>
