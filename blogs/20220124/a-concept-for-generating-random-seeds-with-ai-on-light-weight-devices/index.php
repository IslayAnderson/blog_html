<?php
/*
 * "title":"A Concept for Generating Random Seeds with AI on Light Weight Devices",
 * "excerpt":"Obviously, this is nothing new, but I was thinking about the potential NSA backdoor in intel’s random number generator RDRAND and the vulnerabilities in the UNIX PRNG.",
 * "thumbnail":"thumbnail-5.jpg",
 * "date":"2022-24-01"
 */
include $_SERVER['DOCUMENT_ROOT'] . '/assets/php/functions.php';
head(get_post_meta(__FILE__));

?>

    <body>
    <div class="basic">

        <h1>A Concept for Generating Random Seeds with AI on Light Weight Devices</h1>

        <p>Obviously, this is nothing new, but I was thinking about the potential NSA backdoor in intel’s random number
            generator RDRAND and the vulnerabilities in the UNIX PRNG.</p>

        <p>Many suggestions to get around this problem uses taking photos of something with natural randomness for “True
            Randomness” like Cloudflare’s LavaRand or Bruno Sanguinetti’s Quantum random number generation on a mobile
            phone proposal.</p>

        <p>So this problem has been solved for years now so why did I even think about it?</p>

        <p>I currently use an encrypted thumb drive to store keys and similar mission-critical data and was looking for
            better solutions and came across a DIY solution using an arm processor and that got me thinking about using
            a little camera sensor, maybe pointing at some gell in a box that you shake up to make bubbles but that
            would be quite large.</p>

        <p>giving the device a cellular connection introduces its own problems but makes the device pocketable and
            inconspicuous, imagine you’re at work and you plug this big box and cable into your workstation you’re gonna
            get looks.</p>

        <p>The bellow code has many issues one being using base64 to encode the only image allows for and entropy of
            65536000000(with my dyslexic brain I can’t even read that number) and the code for that particular AI
            generation is open source but it also requires that you have the same model set and still the results still
            might not result in the same outcome but the idea is you run your own AI generation and handshake with your
            personal device.</p>

        <pre>
            import requests
            import base64
            import random

            def faceRand():
                imageSeed = requests.get('https://thispersondoesnotexist.com/image')
                randomSeed = base64.b64encode(imageSeed.content)
                #cloudflares lavalamps got nothing on this

                random.seed(randomSeed)

                return random.random()

            print(faceRand())
        </pre>
    </div>
    </body>

<?php foot();

