<?php
  include('connection.php')
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="http://localhost:8001/static/Styles/home-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<body class="content">
<header class="nav__content head">
    <img src="http://localhost:8001/static/Photos/Escape.svg" alt="Escape">
    <nav class="header__nav">
        <ul class="logo__list">
            <li>home</li>
            <li>categories</li>
            <li>about</li>
            <li>contact</li>
        </ul>
    </nav>
</header>

<main>
    <div class="main__head">
        <h1 class="main__head__title">Let's do it together.</h1>
        <h2 class="main__head__subtitle">We travel the world in search of stories. Come along for the ride.</h2>
        <div class="main__button">
            <a>View Latest Posts</a>
        </div>
    </div>
    <ul class="main__menu">
        <li class="menu__nature">Nature</li>
        <li class="menu__photography">Photography</li>
        <li class="menu__relaxation">Relaxation</li>
        <li class="menu__vacation">Vacation</li>
        <li class="menu__travel">Travel</li>
        <li class="menu__adventure">Adventure</li>
    </ul>
    <div class="content-color">
        <div class="content__block-borders">
            <h2 class="content__title">Featured Posts</h2>
            <div class="rectangle"></div>
            
            <div class="content__block">
            <?php 
                foreach ($posts as $post) {
                  if ($post['id'] > 2) {
                    break;
                  }
                  include 'post_feautured_preview.php';
                }
            ?>
            </div>
            <h2 class="content__title">Most Recent</h2>
            <div class="rectangle"></div>
        </div>
        <div class="small__cards">
            <?php 
                foreach ($posts as $post) {
                  if ($post['id'] < 3) {
                    continue;
                  }
                  include 'post_recent_preview.php';
                }
            ?>
        </div>
    </div>
</main>

<footer  class="footer">
    <div class="footer-color">
        <div class="footer__nav head">
            <img src="http://localhost:8001/static/Photos/Escape.svg" alt="Escape">
            <ul class="logo__list bottom__li">
                <li>home</li>
                <li>categories</li>
                <li>about</li>
                <li>contact</li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
