<?php include __DIR__ . '/assets/php/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  META DATA  -->
    <title>Islay Anderson Blog Full-Stack Developer Project Updates, and Technical Insights</title>
    <meta name="description"
          content="London/Essex based PHP, Vue, Node, Next developer with 10 years experience working in education and marketing">
    <link rel="canonical" href="https://blog.islayanderson.co.uk/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title"
          content="Islay Anderson Blog Full-Stack Developer Project Updates, and Technical Insights">
    <meta property="og:description"
          content="London/Essex based PHP, Vue, Node, Next developer with 10 years experience working in education and marketing">
    <meta property="og:url" content="https://blog.islayanderson.co.uk/">
    <meta property="og:site_name" content="Islay Anderson Blog">
    <meta property="article:modified_time" content="<?= strtotime('1 day ago') ?>">

    <!--  META IMAGES  -->
    <link rel="icon" href="/assets/images/150x150.png" sizes="32x32">
    <link rel="icon" href="/assets/images/300x300.png" sizes="192x192">
    <link rel="apple-touch-icon" href="/assets/images/300x300.png">
    <meta name="msapplication-TileImage"
          content="/assets/images/300x300.png">
    <meta property="og:image" content="/assets/images/000015700003-1.jpg">
    <meta property="og:image:width" content="1297">
    <meta property="og:image:height" content="1946">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary_large_image">

    <!--  VENDOR STYLESHEET  -->
    <link rel="stylesheet" href="/assets/vendor/highlightjs/default.css">
    <script src="/assets/vendor/highlightjs/highlight.min.js"></script>
    <!--  MAIN STYLESHEET  -->
    <link rel="stylesheet" id="stylesheet-css"
          href="/stylesheets/main.css"
          type="text/css" media="all">

</head>
<body>
<div class="spread">
    <div class="page p1">
        <div class="feature">
            <img width="1297" height="1946"
                 src="/assets/images/000015700003-1.jpg"
                 class=""
                 alt="Black and white image of people walking past a modernist building"
                 decoding="async" fetchpriority="high"
                 style="">
            <h1 class="accent">Lamentations of a Terrible Engineer, Islay Anderson</h1>
        </div>
        <div class="latest-blogs">
            <?php
            $posts = get_blogs();
            ?>
            <div class="inner">
                <?php for ($i = 0; $i <= 2; $i++) : ?>
                    <a href="<?= $posts[$i]->path ?>">
                        <p><?= $posts[$i]->excerpt ?></p>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
        <div class="menu">
            <div class="menu-main-menu-container">
                <ul id="menu-main-menu" class="menu">
                    <li class="menu-item">
                        <a href="/blogs/">All Blogs</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://flic.kr/ps/474ycr">All Photography</a>
                    </li>
                    <li class="menu-item">
                        <a href="mailto:me@islayanderson.co.uk">Contact Me</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= rand(1, 2) == 1 ? '/assets/cv/Islay_Anderson_CV_260125-long.pdf' : '/assets/cv/Islay_Anderson_CV_260124-short.pdf' ?>">
                            My CV
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="decoration_text d1 big_abstract">
            <span>CODE</span>
        </div>
        <div class="decoration_text d2 big_abstract">
            <span>PHP</span>
        </div>
        <div class="decoration_text d3 big_abstract">
            <span>ART</span>
        </div>
    </div>
</div>
</body>
<script>hljs.highlightAll();</script>
</html>