<?php
/*
 * "title":"root word highlighting in assistive tools",
 * "excerpt":"In my last update to this project I implemented functionality to check if the text was in the viewport to improve performance and using the perceived contrast algorithm laid out in the wcag 2.1 spec, functionality that changes the font colour of the highlighted text to the highest contrast colour against the existing background.",
 * "thumbnail":"thumbnail.jpg",
 * "date":"2023-02-09"
 */
include $_SERVER['DOCUMENT_ROOT'] . '/assets/php/functions.php';
head(get_post_meta(__FILE__));

?>

    <body>
    <div class="basic">

        <h1>Morphological understanding and root word highlighting in bionic reading assistive tools</h1>


        <p>In my last update to this project I implemented functionality to check if the text was in the viewport to
            improve performance and using the perceived contrast algorithm laid out in the wcag 2.1 spec, functionality
            that changes the font colour of the highlighted text to the highest contrast colour against the existing
            background.</p>


        <p>This update introduces root word highlighting to bionic reading, instead of highlighting just the first half
            of the word the system finds the root of the word and highlights just that.</p>


        <p>As described by:&nbsp;<a
                    href="https://web.archive.org/web/20230317052300/https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4405785/">An
                investigation of morphological awareness and processing in adults with low literacy</a>&nbsp;tests in
            adults and children suggest that encouraging a breakdown and understanding of words and their particular
            components shows an improvement in the frequency of correct understanding and spelling.</p>


        <p>By highlighting the root of words it aims to take advantage of already existing knowledge and recognition of
            words to assist reading accuracy.</p>


        <p>Bionic reading</p>


        <figure class="wp-block-image size-full"><img
                    src="https://blog.islayanderson.co.uk/wp-content/uploads/2023/11/image-3.png" alt=""
                    class="wp-image-212"/></figure>


        <p>Root highlighting</p>


        <figure class="wp-block-image size-full"><img
                    src="https://blog.islayanderson.co.uk/wp-content/uploads/2023/11/image-2.png" alt=""
                    class="wp-image-211"/></figure>


        <p>My fork of the bionic reading extension can be found on my&nbsp;<a
                    href="https://github.com/IslayAnderson/bionic-reading-root-highlighting"
                    target="_blank" rel="noreferrer noopener">GitHub</a></p>


        <p>cites</p>


        <p>Tighe, E.L. and Binder, K.S. (2015)&nbsp;<em>An investigation of morphological awareness and processing in
                adults with low literacy</em>,&nbsp;<em>Applied psycholinguistics</em>. U.S. National Library of
            Medicine. Available at: https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4405785/ (Accessed: February 5, 2023).
        </p>


    </div>
    </body>

<?php foot();

