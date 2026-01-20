<?php
/*
 * "title":"CSS-only Responsive Navigation Menu",
 * "excerpt":"In one of the many unsuccessful job applications, I have completed this one required me to build a navigation menu as a technical test.",
 * "thumbnail":"thumbnail.jpg",
 * "date":"2022-24-01"
 */
include $_SERVER['DOCUMENT_ROOT'] . '/assets/php/functions.php';
head(get_post_meta(__FILE__));

?>

    <body>
    <div class="basic">

        <h1>Problematic Uranium</h1>

        <p>In one of the many unsuccessful job applications, I have completed this one required me to build a navigation
            menu as a technical test.</p>

        <p>I decided to build one entirely in CSS rather than using a JavaScript library like jQuery which was
            “allowed”.</p>

        <p>I didn’t get the job but I can always display what I completed here.</p>

        <pre class="wp-block-preformatted">
            nav {
              text-align: center;
              padding: 10px;
              background-color: #e2e2e2; }

            nav .menu-item {
              display: inline-block;
              width: 150px;
              border-bottom: solid 2px #ea5a0b;
              border-right: 2px solid transparent;
              border-left: 2px solid transparent;
              border-top: 2px solid transparent;
              transition: all .75s;
              margin: 3px; }

            .has-child ul {
              display: none;
              background-color: #e2e2e2;
              border: solid 2px #ea5a0b; }

            .has-child:hover &gt; ul {
              display: block;
              float: left;
              list-style: none;
              width: 150px;
              text-align: left;
              position: absolute;
              margin-top: 10px;
              margin-left: -1.5px; }

            nav .menu-item a {
              text-decoration: none;
              padding-top: 10px;
              padding-bottom: 10px;
              padding-left: 15px;
              padding-right: 15px; }

            .has-child ul li {
              border: none; }

            .has-child ul li:hover {
              border: none; }

            nav .menu-item:hover {
              border-right: solid 2px #ea5a0b;
              border-left: solid 2px #ea5a0b;
              border-top: solid 2px #ea5a0b; }

            .burger {
              display: none;
              cursor: pointer;
              width: 35px;
              margin: auto; }

            .bar1, .bar2, .bar3 {
              width: 35px;
              height: 5px;
              background-color: #333;
              margin: 6px 0;
              transition: 0.4s; }

            #burger:checked ~ .burger &gt; .bar1 {
              -webkit-transform: rotate(-45deg) translate(-9px, 6px);
              transform: rotate(-45deg) translate(-9px, 6px); }

            #burger:checked ~ .burger &gt; .bar2 {
              opacity: 0; }

            #burger:checked ~ .burger &gt; .bar3 {
              -webkit-transform: rotate(45deg) translate(-8px, -8px);
              transform: rotate(45deg) translate(-8px, -8px); }

            #burger:checked ~ .nav {
              display: block !important; }

            #burger {
              display: none; }

            .container {
              margin: auto;
              width: 90%;
              max-width: 1600px; }

            @media only screen and (max-width: 320px) {
              /* BASE
                =================== */
              /* LAYOUT
                =================== */
              /* MODULE
                =================== */ }

            @media only screen and (max-width: 480px) {
              .nav {
                display: none; }
              .burger {
                display: block; } }
            </pre>
        <pre class="wp-block-preformatted">&lt;nav&gt;
          &lt;div class="container"&gt;
            &lt;img class="logo" src="./img/mso-web-agency-logo.png"&gt;
            &lt;input type="checkbox" id="burger" class="burger"&gt;
              &lt;label for="burger" class="burger"&gt;
                &lt;div class="bar1"&gt;&lt;/div&gt;
                &lt;div class="bar2"&gt;&lt;/div&gt;
                &lt;div class="bar3"&gt;&lt;/div&gt;
            &lt;/label&gt;
              &lt;ul class="nav"&gt;
                &lt;li class="menu-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
                &lt;li class="menu-item"&gt;&lt;a href="#"&gt;About Us&lt;/a&gt;&lt;/li&gt;
                &lt;li class="menu-item has-child"&gt;&lt;a href="#"&gt;Services&lt;/a&gt;
                    &lt;ul&gt;
                        &lt;li class="menu-item"&gt;&lt;a href="#"&gt;Web Design&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="menu-item"&gt;&lt;a href="#"&gt;Branding&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="menu-item"&gt;&lt;a href="#"&gt;Consultancy&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="menu-item"&gt;&lt;a href="#"&gt;SEO&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/li&gt;
                &lt;li class="menu-item"&gt;&lt;a href="#"&gt;Our Work&lt;/a&gt;&lt;/li&gt;
                &lt;li class="menu-item"&gt;&lt;a href="#"&gt;Contact Us&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/nav&gt;</pre>
    </div>
    </body>

<?php foot();

