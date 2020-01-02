<?php
include 'config/config.php';
include 'libraries/Database.php';
include 'helpers/format_helper.php';
?>
<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Blog Test</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        
        <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col"><img src="images/sup.png" alt="logo" height="42"></div>
          <div class="col-12 text-left">
            <a class="blog-header-logo text-dark" href="index.php">Blog About Test</a>
          </div>
          
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <!-- <nav class="nav d-flex justify-content-between"> -->
        <nav class="nav d-flex justify-content-center">
          <a class="nav-items nav-link p-2" href="index.php">Home</a>
          <a class="nav-items nav-link p-2" href="posts.php">All posts</a>
        </nav>
      </div>

      <div class="jumbotron p-3 text-white rounded bg-dark">
        <div class="col px-0 text-center">
          <h1 class="display-4 font-italic">PHP Test Blog</h1>
          <p class="lead my-3">Tutorials, articles and many other usefull  stuff</p>
          
        </div>
      </div>
      