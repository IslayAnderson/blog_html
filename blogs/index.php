<?php
/*
 * "title":"Islay Anderson - All blogs",
 * "excerpt":"Just a bunch of blogs init",
 * "thumbnail":"Screenshot-2025-01-25-at-21.48.09-png-e1737841806929.avif",
 * "date":""
 */

include __DIR__ . '/../assets/php/functions.php';

head(get_post_meta(__FILE__));


$blogs = (array)get_blogs();

//var_dump(gettype($blogs));
function sortFunction($a, $b)
{
    if (!isset($a['date']) || !isset($b['date'])) return 0;
    if ($a['date'] == $b['date']) return 0;
    return strtotime($a['date']) - strtotime($b['date']);
}

usort($blogs, 'sortFunction');

?>

    <body>
    <div class="spread">
        <?php foreach ($blogs as $blog): ?>
            <?php $blog = (array)$blog ?>
            <div class="page p1">
                <article role="article" class="post">
                    <a href="<?= $blog['path'] ?>" rel="bookmark" title="<?= $blog['title'] ?>">
                        <div class="title">
                            <h2 class="big_abstract"><?= $blog['title'] ?></h2>
                        </div>
                        <div class="excerpt">
                            <p><?= $blog['excerpt'] ?></p>
                            <div class="featured">
                                <img src="/assets/images/<?= $blog['thumbnail'] ?>">
                            </div>
                        </div>
                    </a>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
    </body>

<?php foot();
