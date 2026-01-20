<?php
/*
 * "title":"Forced to Care About Internet Explorer: lazy loading",
 * "excerpt":"If you work in the public sector you’ll be forced to care about IE and especially speed and as is the public sector you need to spend as little time as possible time on any project.",
 * "thumbnail":"thumbnail.jpg",
 * "date":"2022-24-01"
 */
include $_SERVER['DOCUMENT_ROOT'] . '/assets/php/functions.php';
head(get_post_meta(__FILE__));

?>

    <body>
    <div class="basic">

        <h1>Forced to Care About Internet Explorer: lazy loading</h1>

        <p>If you work in the public sector you’ll be forced to care about IE and especially speed and as is the public
            sector you need to spend as little time as possible time on any project.</p>

        <p>So we tried every lazy load library we could find and consistently found issues with all of them using modern
            Javascript so I decided to just make a simple script using old Javascript and it just works</p>

        <pre>
            var replaceSrc = function () {
                x = document.getElementsByClassName('lazy-load-me');
                for (i = 0; i &lt; x.length; i++){
                    if (x[i].getBoundingClientRect().top &lt; window.innerHeight) {
                        img = x[i]
                        if(window.innerWidth &lt; 850 &amp;&amp; x[i].getAttribute('mobi-src') != null){
                            lazySRC = x[i].getAttribute('mobi-src');
                        }else{
                            lazySRC = x[i].getAttribute('desk-src');
                        }
                        if(x[i].tagName == 'VIDEO'){
                            x[i].canPlayType("video/mp4");
                            x[i].src = lazySRC;
                            x[i].load();
                            x[i].onload = x[i].play();
                            x[i].classList.remove("lazy-load-me");
                        }else{
                            x[i].src = lazySRC;
                            x[i].classList.remove("lazy-load-me");
                        }
                    }
                }
            };
            replaceSrc();
            window.addEventListener('scroll', replaceSrc, false);
        </pre>
    </div>
    </body>

<?php foot();

