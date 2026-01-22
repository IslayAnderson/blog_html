<?php
/*
 * "title":"Image ALT Scraping for Accessibility Reporting",
 * "excerpt":"In a previous employment we had someone who’s job it was to update alt tags on images and shareholders and management needed reports on progress so I built a small script to just that as well as another to make suggestions for the alt tag using the google vision API.",
 * "thumbnail":"thumbnail-2.jpg",
 * "date":"2022-24-01"
 */
include $_SERVER['DOCUMENT_ROOT'] . '/assets/php/functions.php';
head(get_post_meta(__FILE__));

?>

    <body>
    <div class="basic">

        <h1>A Concept for Generating Random Seeds with AI on Light Weight Devices</h1>

        <p>In a previous employment we had someone who’s job it was to update alt tags on images and shareholders and
            management needed reports on progress so I built a small script to just that as well as another to make
            suggestions for the alt tag using the google vision API.</p>

        <pre>
            import requests
            import json
            import sys
            import time
            from selenium import webdriver
            from selenium.webdriver.common.keys import Keys
            from selenium.webdriver.firefox.options import Options

            URLS = [line.rstrip('\n') for line in open('urls')]

            options = Options()

            options.set_headless(True)

            driver = webdriver.Firefox(options=options)

            #driver = webdriver.Firefox()

            print(URLS)

            imageslist = []

            i = 0
            while i &lt; len(URLS):

                print(URLS[i])

                try:

                    driver.get(URLS[i])

                    imageLen = driver.execute_script("return document.images.length;")

                    b = 0

                    while b &lt; imageLen:

                        imageslist.append(driver.execute_script("if(document.images[" + str(b) + "].alt == '' | 'null'){ return document.images[" + str(b) + "].src}"))

                        print(imageslist[b])

                        b += 1

                    images = '\n'.join(str(e) for e in imageslist)

                    with open("images", "a+") as file:
                        file.write(URLS[i] + ': ' + images + '\n')

                    i += 1

                except:

                    print('Failed')

                    i += 1

            driver.quit()
        </pre>
    </div>
    </body>

<?php foot();

