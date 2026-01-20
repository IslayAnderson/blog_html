<?php
/*
 * "title":"Concept for monitoring and understanding component use on production systems",
 * "excerpt":"When taking on the codebase for an existing monolithic website that tightly integrated with the processes and
            policies of organisation like those seen in the public sector its important to get a map and full
            understanding of where and how components placed on the website.",
 * "thumbnail":"thumbnail.jpg",
 * "date":"2023-02-09"
 */
include $_SERVER['DOCUMENT_ROOT'] . '/assets/php/functions.php';
head(get_post_meta(__FILE__));

?>

    <body>
    <div class="basic">
 
        <h1>Concept for monitoring and understanding component use on production systems</h1>

        <p>watch the project repository for testing updates </p>

        <a class="wp-block-button__link wp-element-button" href="https://github.com/IslayAnderson/ComponentWatch">ComponentWatcher</a>

        <p>When taking on the codebase for an existing monolithic website that tightly integrated with the processes and
            policies of organisation like those seen in the public sector its important to get a map and full
            understanding of where and how components placed on the website.<br>Modern and well integrated CMS's to some
            degree have solved this problem but in the scenario many of us face ourselves in we are taking on a code
            base held together with figurative bailing wire and duct tape built on decades of old outdated technologies.
        </p>

        <p>as far as this project goes I realise my goal is to essentially replicate functionality that can be used in
            large tools like silk tide or site improve although, what I'm building isn't how those tools intend for
            their admins to use said functionality. As well as those tools make use of spiders for looking at pages
            who's reliability is questionable in my experience especially in the case of huge corporate site that will
            have 10's if not 100's of orphan pages.</p>


        <p>all this rambling is just my justification for continuing to build this project and also influencing my
            choice to change direction.</p>


        <p>if you look at the early commits in the repo, for some reason I started by building a templating system?
            Don't ask I work on personal projects late at night and I think the caffeine had gotten to me. That said I
            getting the core functionality working as priority then going on to build the comforts, you know like a
            normal project.</p>


        <p>As of today I have built the Reporters class, it's setters and getters and started building the dynamic
            javascript that is rendered and run client side. </p>


        <figure class="wp-block-image size-full"><img
                    src="https://blog.islayanderson.co.uk/wp-content/uploads/2024/02/image.png" alt=""
                    class="wp-image-241"/></figure>


    </div>
    </body>

<?php foot();

