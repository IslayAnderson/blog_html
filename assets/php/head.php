<?php
/**
 * @param $meta
 * @return void
 */
function head($meta)
{
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--  META DATA  -->
        <title><?= $meta['title'] ?></title>
        <meta name="description"
              content="<?= $meta['excerpt'] ?>">
        <link rel="canonical" href="https://blog.islayanderson.co.uk/">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title"
              content="<?= $meta['title'] ?>">
        <meta property="og:description"
              content="<?= $meta['excerpt'] ?>">
        <meta property="og:url" content="https://blog.islayanderson.co.uk/">
        <meta property="og:site_name" content="Islay Anderson Blog">
        <meta property="article:modified_time" content="<?= $meta['date'] ?: strtotime('1 day ago') ?>">

        <!--  META IMAGES  -->
        <link rel="icon" href="/assets/images/150x150.png" sizes="32x32">
        <link rel="icon" href="/assets/images/300x300.png" sizes="192x192">
        <link rel="apple-touch-icon" href="/assets/images/300x300.png">
        <meta name="msapplication-TileImage"
              content="/assets/images/300x300.png">
        <meta property="og:image" content="/assets/<?= $meta['thumbnail'] ?>">
        <meta property="og:image:width" content="1297">
        <meta property="og:image:height" content="1946">
        <meta property="og:image:type" content="image/jpeg">
        <meta name="twitter:card" content="summary_large_image">

        <!--  VENDOR STYLESHEET  -->
        <link rel="stylesheet" href="/assets/vendor/highlightjs/styles/default.css">
        <script src="/assets/vendor/highlightjs/highlight.min.js"></script>
        <!--  MAIN STYLESHEET  -->
        <link rel="stylesheet" id="stylesheet-css"
              href="stylesheets/main.css"
              type="text/css" media="all">

    </head>
    <?php
}
