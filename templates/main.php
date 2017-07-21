<!DOCTYPE html>

<html lang="<?= $language ?>">
    <head>
        <meta charset="UTF-8">
        <title><?= $titleTag ?></title>
        <meta name="description" content="<?php $metaDescription ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="author" content="Rafael Garcia Doblas">
        <meta name="robots" content="index, follow">

        <!-- Facebook Open Graph -->
        <link rel="canonical" href="http://rafaelgarciadoblas.com/" />
        <meta property="og:title" content="Proud Software Developer">
        <meta property="og:site_name" content="Rafael Garcia Doblas">
        <meta property="og:url" content="http://rafaelgarciadoblas.com">
        <meta property="og:description" content="<?= $ogDescription ?>">
        <meta property="og:type" content="website"> 
        <meta property="og:image" content="http://rafaelgarciadoblas.com/public/images/card.jpg">


        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@rafamalaga86">
        <meta name="twitter:title" content="<?= $twitterTitle ?>">
        <meta name="twitter:description" content="<?= $twitterDescription ?>">
        <meta name="twitter:image:src" content="http://rafaelgarciadoblas.com/public/images/card2.jpg">

        <!-- Favicons and icons -->
        <link rel="apple-touch-icon" sizes="57x57" href="/public/images/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/public/images/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/public/images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/public/images/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/public/images/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/public/images/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/public/images/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/public/images/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/public/images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/public/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/public/images/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/public/images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/public/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/public/images/favicons/manifest.json">
        <link rel="shortcut icon" href="/public/images/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#4e4e56">
        <meta name="msapplication-TileImage" content="/public/images/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="/public/images/favicons/browserconfig.xml">
        <meta name="theme-color" content="#4E4E56">

        <!-- Google Web Font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>

        <!-- Style Sheet -->
        <link rel="stylesheet" href="/public/css/production/style.min.css">
        

        <?php /*
        <!-- STYLESHEETS IN BOTH LESS AND CSS -->
        <link rel="stylesheet" href="/public/css/normalize.css">
        <link rel="stylesheet" href="/public/icons/style.css">
        <link rel="stylesheet" href="/public/css/form-component.css">
        <link rel="stylesheet" href="/public/css/morphing-component.css">
        <link rel="stylesheet/less" href="/public/css/rafastyle.less">


        <!-- LESS JS -->
        <script>var less = { env:"development", dumpLineNumbers:'mediaquery'};</script>
        <script src="/public/js/less-1.7.4.min.js"></script>

        */ ?>

    </head>

    <body>
        <div class="wrapper">


            <section class="s-navigation">
                <nav class="hold">
                    <a href="/" class="left"><h2>Rafael García Doblas</h2></a><!--
                <a href="#projects-anchor"><span>Projects</span></a>
                i--><a href="/public/others/Rafael%20Garcia%20Doblas%20CV.pdf"><span>Curriculum Vitae</span></a><!--
                i--><a class="contact" href="#contact-anchor"><span>Contact me</span></a>
                </nav>
            </section>


            <header class="full-screen-section">
                <div class="hold">
                    <h3>Hi <span class="red">There!</span></h3>
                    <h1><?= $h1 ?></h1>
                    <p><?= $whatIAm ?></p>
                    <!-- <a class="button learn-more" href="#introduction-anchor">Learn more</a> -->
                </div>
                <a class="arrow" href="#introduction-anchor">
                    <i class="icon-arrow-left"></i>
                </a>
            </header>


            <section class="s-introduction">

                <div id="introduction-anchor"></div>



                <div class="hold container">

                    <?php /*
                    <div class="d-introduction box">
                        <h3><strong>Back-End</strong> <span>and</span> <strong>Front-End</strong></h3>
                        <p><span class="margin">As a Back-End I aim to write clean, efficient and elegant code. As a Front-End my goal is to make good looking highly responsive websites.</span>
                        <span class="margin">Love to plan websites, to write tests, to follow best practises, to learn every single day, to follow Object Oriented Deisgn Patterns... </span></p>
                        <p>I <strong>always</strong> fancy a coffee.</p>
                    </div>

                        

                    <div class="d-device box">
                        <div class="md-slider">
                            <div class="md-device-wrapper">
                                <div class="md-device md-device-1">
                                    <div class="md-inner"><img src="public/images/morphing/site1.jpg" alt="rafael garcia doblas dektop"></div>
                                    <div class="md-border-element"></div>
                                    <div class="md-base-element"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    */ ?>


                
                    <div class="d-icons box">
                        <ul>
                            <li>
                                <!-- <a href="#" data-reveal-id="php-modal"> -->
                                <div>
                                    <i class="icon-php-plain"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="mysql-modal"> -->
                                <div>
                                    <i class="icon-mysql-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="laravel-modal"> -->
                                <div>
                                    <i class="icon-laravel-plain"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="nginx-modal"> -->
                                <div>
                                    <img width="100%" src="/public/images/logos/zend.svg" alt="zend">
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="git-modal"> -->
                                <div>
                                    <i class="icon-git-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="nginx-modal"> -->
                                <div>
                                    <img width="100%" src="/public/images/logos/nginx.svg" alt="nginx">
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="nginx-modal"> -->
                                <div>
                                    <img width="100%" src="/public/images/logos/apache.svg" alt="apache">
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="linux-modal"> -->
                                <div>
                                    <i class="icon-linux-plain"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="digital-ocean-modal"> -->
                                <div>
                                    <img width="100%" src="/public/images/logos/digital-ocean.svg" alt="digital-ocean">
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="amazon-modal"> -->
                                <div>
                                    <i class="icon-amazonwebservices-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="javascript-modal"> -->
                                <div>
                                    <i class="icon-javascript-plain"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="nginx-modal"> -->
                                <div>
                                    <img width="100%" src="/public/images/logos/react.svg" alt="react">
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="angularjs-modal"> -->
                                <div>
                                    <i class="icon-angularjs-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="npm-modal"> -->
                                <div>
                                    <i class="icon-npm-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="grunt-modal"> -->
                                <div>
                                    <i class="icon-grunt-line-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="ubuntu-modal"> -->
                                <div>
                                    <i class="icon-ubuntu-plain"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="wordpress-modal"> -->
                                <div>
                                    <i class="icon-wordpress-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="html5-modal"> -->
                                <div>
                                    <i class="icon-html5-plain"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="less-modal"> -->
                                <div>
                                    <i class="icon-less-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="sass-modal"> -->
                                <div>
                                    <i class="icon-sass-original"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <?php /*
                            <li>
                                <!-- <a href="#" data-reveal-id="ghost-modal"> -->
                                <div>
                                    <i class="icon-ghost-plain-wordmark ghost"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="foundation-modal"> -->
                                <div>
                                    <i class="icon-foundation-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            <li>
                                <!-- <a href="#" data-reveal-id="nodejs-modal"> -->
                                <div>
                                    <i class="icon-nodejs-plain-wordmark"></i>
                                </div>
                                <!-- </a> -->
                            </li>
                            */ ?>
                        </ul>
                    </div>



                    <div class="d-comments box">
                        <h3><strong>PHP</strong> + <strong>Javascript</strong></h3>
                        <p>
                            <span class="margin"><?= $section1P1 ?></span>
                            <span class="margin"><?= $section1P2 ?></span>
                            <span class="margin"><?= $section1P3 ?></span>
                            <span class="margin"><?= $section1P4 ?></span>
                        </p>
                        <!-- <p>I think that taking the risk of trying a new technology is always woth it.</p><br> -->
                    </div>


                </div>
            </section>



            <section class="s-intermediate">
                <div class="hold">
                    <a class="button button-effect icon-signup" href="/public/others/Rafael%20Garcia%20Doblas%20CV.pdf">
                        <span><?= $downloadMyCV ?></span>
                    </a>

                </div>
            </section>


            <?php  /*
            <section class="s-portfolio">
                <div id="projects-anchor"></div>
                
                <figure>
                    <img src="/public/images/projects/wl.jpg" alt="wonderlabs">
                    <figcaption>
                        <h4>Wonderlabs Website</h4>
                        <p>As a part of digital agency team, Wonderlabs</p>
                        <a href="//wearewonderlabs.com" rel="nofollow"></a>
                    </figcaption>           
                </figure>
                
                <figure>
                    <img src="/public/images/projects/ma.jpg" alt="maritalaffair">
                    <figcaption>
                        <h4>Marital Affair</h4>
                        <p>As a part of digital agency team, Wonderlabs</p>
                        <a href="//maritalaffair.com" rel="nofollow"></a>
                    </figcaption>           
                </figure>

                <figure>
                    <img src="/public/images/projects/ul.jpg" alt="uniqueliving">
                    <figcaption>
                        <h4>Unique Living Mobile</h4>
                        <p>As a part of digital agency team, Wonderlabs</p>
                        <a href="//uniqueliving.com/mobile-version" rel="nofollow"></a>
                    </figcaption>           
                </figure>
 
                <figure>
                    <img src="/public/images/projects/soridian.jpg" alt="soridian">
                    <figcaption>
                        <h4>Soridian</h4>
                        <p>Diet Digital Magazine</p>
                        <a href="//soridian.com"></a>
                    </figcaption>           
                </figure>
            </section>
            */ ?>  



            <section class="s-intermediate">
                <div class="hold">

                    <p><?= $myCodeIsPrivate ?></p>
                    
                    <a class="button button-effect icon-github" href="https://github.com/rafamalaga86/gamerest">
                        <span>REST API</span>
                    </a>
                    <a class="button button-effect icon-github ml" href="https://github.com/rafamalaga86/phpframework">
                        <span>PHP Framework</span>
                    </a>

                </div>
            </section>



            <section class="s-testimonials">
                <div class="hold">
                        <article>
                            <blockquote>
                                <h3 class="summary"><?= $testimonial1Title ?></h3>
                                <q><?= $testimonial1Quote ?></q>
                                <img src="/public/images/testi-arni.jpg" alt="arni lochner wonderlabs">
                                <h5 class="name"><?= $testimonial1Person ?></h5>
                                <h6 class="sub-title"><?= $testimonial1Position ?></h6>
                            </blockquote>
                        </article>
                        <article>
                            <blockquote>
                                <h3 class="summary"><?= $testimonial2Title ?></h3>
                                <q><?= $testimonial2Quote ?></q>
                                <img src="/public/images/testi-craig.jpg" alt="arni lochner wonderlabs">
                                <h5 class="name"><?= $testimonial2Person ?></h5>
                                <h6 class="sub-title"><?= $testimonial2Position ?></h6>
                            </blockquote>
                        </article>
                    </ul>
                </div>
            </section>



            <section class="s-cta">
                <div class="hold">
                    <div class="floating-text">
                        <h2><?= $ctaH2 ?></h2>
                        <p><?= $ctaP ?></p>
                        <p class="red mt"><strong><?= $ctaCallMe ?></strong></p>
                        <div class="container">

                            <a href="skype:rafamalaga86?call" class="button button-effect icon-phone"><span><?= $callRafa ?></span></a><!--
                        i--><a href="#contact-anchor" class="button button-effect icon-paperplane"><span><?= $mailRafa ?></span></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s-cta-mobile">
                <img src="/public/images/s-cta-bg-mobile.jpg" alt="rafael garcia doblas">

<?php /*
                <div class="d-ring-mail">
                    <a href="skype:rafamalaga86?call" class="button"><span>Call Rafa</span></a><!--
                i--><a href="#contact-anchor" class="button"><span>Mail Rafa</span></a>
                </div>
*/ ?>
            </section>



            <section class="s-social-networks">
                <ul>
                    <li class="twitter">
                        <a href="//twitter.com/rafamalaga86">
                            <i class="icon-twitter"></i>
                        </a>
                    <li class="linkedin">
                        <a href="//www.linkedin.com/pub/rafael-garcia-doblas/41/691/b75">
                            <i class="icon-linkedin"></i>
                        </a>
                    <li class="github">
                        <a href="//github.com/rafamalaga86">
                            <i class="icon-github"></i>
                        </a>

                    <li class="skype">
                        <a href="skype:rafamalaga86?chat">
                            <i class="icon-skype"></i>
                        </a>
                </ul>
                <div id="contact-anchor"></div>
            </section>
        </div>

        <footer class="s-form full-screen-section">
            <div class="hold">

                <div id="loader-container"></div>

                <form id="theForm" class="simform" novalidate autocomplete="off" data-empty="<?= $formEmpty ?>" data-invalidemail="<?= $formInvalidEmail ?>">
                    <div class="simform-inner">
                        <ol class="questions">

                            <li>
                                <span>
                                    <label for="q1"><?= $sendMeAnEmail ?></label>
                                </span>

                                <input id="mess" name="mess" type="text">
                            </li>

                            <li>
                                <span>
                                    <label for="q5"><?= $whatIsYourName ?></label>
                                </span>
                                <input id="name" name="name" type="text">
                            </li>

                            <li>
                                <span>
                                    <label for="q6"><?= $whichIsYourEmail ?></label>
                                </span>
                                <input id="email" name="email" type="email">
                            </li>

                        </ol><!-- /questions -->
                        <input type="hidden" name="language" value="<?= $language ?>">
                        <button class="submit" type="submit"><?= $sendAnswers ?></button>
                        <div class="controls">
                            <button class="next"></button>
                            <div class="progress"></div>
                            <span class="number">
                                <span class="number-current"></span>
                                <span class="number-total"></span>
                            </span>
                            <span class="error-message"></span>
                        </div><!-- / controls -->
                    </div><!-- /simform-inner -->
                    <span class="final-message"></span>
                </form><!-- /simform -->

                <small><p>Email: <span class="mym"><?= $activateJS ?></span> | © Copyright <?php echo date("Y"); ?> <?= $rightsReserved ?></p></small>

            </div>
        </footer>

        <?php /*
        <div id="git-modal" class="reveal-modal tiny" data-reveal>
            <h6>Git</h6>
            <p>Git is just superb, I use Git CLI with everything. Storing my projects in Bitbucket or Github, I do deploy with Git as well.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="php-modal" class="reveal-modal tiny" data-reveal>
            <h6>PHP</h6>
            <p>I do Object Oriented PHP on a daily basis, with Laravel, Wordpress or Codeigniter. PHP could sometimes be inconsistent, full of exceptions and it lacks a clear philosophy. However, there is big a community of Object Oriented PHP and great frameworks like Laravel that really stand out and make PHP compete with Python or Ruby face to face.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="laravel-modal" class="reveal-modal tiny" data-reveal>
            <h6>Laravel</h6>
            <p>Laravel is just splendid. I use it as much as I can. I was feeling down on PHP till I found Laravel. Database Migrations, RESTful Routing, Database Seeding, Eloquent ORM, Composer packages, Blade templating... I love all the possibilities that Laravel has to offer. </p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="javascript-modal" class="reveal-modal tiny" data-reveal>
            <h6>Javascript</h6>
            <p>I do Javascript almost every day. Vanilla Javascript has become really useful. In one side, we can use it in the server with NodeJS. In the other side, Javascript has become standard enough these days to stop using jQuery in the Front-End. But the library still makes our work easier, and many other JS plugins need it.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="digital-ocean-modal" class="reveal-modal tiny" data-reveal>
            <h6>Digital Ocean</h6>
            <p>I've been using Digital Ocean for some months and I really love it. Is reliable, cheap and lets me configure the server just how I need to.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="amazon-modal" class="reveal-modal tiny" data-reveal>
            <h6>Amazon Web Services</h6>
            <p>I have tried it and the experience was really good. Sadly, never had an app big enough to need such a platform.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="nodejs-modal" class="reveal-modal tiny" data-reveal>
            <h6>Node JS</h6>
            <p>Using Javascript in both Back-End and Front-End development always have sounded good to me. Want to learn it as soon as I have some spare time. I have been trying it for small things, and I have used it for Ghost though.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="nginx-modal" class="reveal-modal tiny" data-reveal>
            <h6>NginX</h6>
            <p>I used to use Apache, but I moved to Nginx due to better performance.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="linux-modal" class="reveal-modal tiny" data-reveal>
            <h6>Linux</h6>
            <p>I've always used a Unix console, even working in Windows environment (cyg-win). Really useful for SSH, Git, NPM, Grunt, Composer, Laravel... </p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="ubuntu-modal" class="reveal-modal tiny" data-reveal>
            <h6>Ubuntu</h6>
            <p>My favourite desktop distro. I am really looking forward to see what ElementaryOS has to bring us in the future, but for now, I use Ubuntu.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="mysql-modal" class="reveal-modal tiny" data-reveal>
            <h6>MySQL</h6>
            <p>I don't use MySQL that much anymore thanks to ORMs. But I have been doing queries since my degree.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="ghost-modal" class="reveal-modal tiny" data-reveal>
            <h6>Ghost</h6>
            <p>I fell in love with Ghost the very first moment I saw the admin panel and the speed of the platform. I would encourage anyone to give it a try, afterwards you will see Wordpress in a new light.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="npm-modal" class="reveal-modal tiny" data-reveal>
            <h6>NPM</h6>
            <p>I could not work without NPM. It has all type of packages. In addition of Browserify, you can also use it for Front-End development.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="angularjs-modal" class="reveal-modal tiny" data-reveal>
            <h6>Angular JS</h6>
            <p>Before digging in AngularJS I want to master Node. But really feels like something I have to learn soon. I have tried Backbone but Angular is gaining more and more fans.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="foundation-modal" class="reveal-modal tiny" data-reveal>
            <h6>Foundation</h6>
            <p>I started to use Foundation because it was the first Front-End framework using the "mobile first" paradigm . But even Bootstrap doing mobile first now, Foundation's philosophy is being an 'skeleton' rather than a bunch of elements already made. And I like that.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="html5-modal" class="reveal-modal tiny" data-reveal>
            <h6>HTML5</h6>
            <p>Just HTML5. There is no room for XHTML or HTML4 these days.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="grunt-modal" class="reveal-modal tiny" data-reveal>
            <h6>Grunt</h6>
            <p>I use Grunt often. It's really useful for minimizing javascript, or process less or sass.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="less-modal" class="reveal-modal tiny" data-reveal>
            <h6>Less</h6>
            <p>I can use Less or Sass equally, I find advantages and disadvantages in them both.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="sass-modal" class="reveal-modal tiny" data-reveal>
            <h6>Sass</h6>
            <p>I can use Sass or Less equally, I find disadvantages and advantages in both of them .</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="wordpress-modal" class="reveal-modal tiny" data-reveal>
            <h6>Wordpress</h6>
            <p>Sometimes I develop for Wordpress due to high demand. Not a fan. Usually using Wordpress as a framework is tricky and time consuming, so I try to avoid it as much as I can.</p>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        */ ?>

        <!-- TIME FOR SCRIPTS -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


        <!-- Production Scripting -->
        <script src="/public/js/production/scripts.min.js"></script>

        <?php /*
                <script src="/public/js/fastclick.js"></script>

                <script src="/public/js/classie.js"></script>
                <script src="/public/js/modernizr.custom.js"></script>
                <script src="/public/js/stepsForm.js"></script>

                <script src="/public/js/morphingdevice.js"></script>
                
                <script src="/public/js/foundation.js"></script>
                <script src="/public/js/foundation.reveal.js"></script>

                <script src="/public/js/spin.min.js"></script>

                <script src="/public/js/rafascript.js"></script>
        */ ?>


        <?php if ($_SERVER['SERVER_NAME'] === 'rafaelgarciadoblas.com') {  ?>
                <!-- Analytics -->
                <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                  ga('create', 'UA-60450670-1', 'auto');
                  ga('send', 'pageview');

                </script>
        <?php } ?>

       

    </body> 
</html>
