<?php
/*
 * "title":"Islay Anderson - All blogs",
 * "excerpt":"Just a bunch of blogs init",
 * "thumbnail":"Screenshot-2025-01-25-at-21.48.09-png-e1737841806929.avif",
 * "date":""
 */

include __DIR__ . '/../assets/php/functions.php';

head(get_post_meta(__FILE__));

?>

    <body>
    <div class="spread">
        <?php foreach (get_blogs() as $blog): ?>
            <div class="page p1">
                <article role="article">
                    <a href="<?= $blog['path'] ?>" rel="bookmark" title="<?= $blog['title'] ?>">
                        <div class="title">
                            <h2 class="big_abstract"><?= $blog['title'] ?></h2>
                        </div>
                        <div class="excerpt">
                            <?= $blog['excerpt'] ?>
                        </div>
                        <div class="featured">
                            <img src="/assets/images/<?= $blog['thumbnail'] ?>">
                        </div>
                    </a>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
    </body>

<?php foot();
