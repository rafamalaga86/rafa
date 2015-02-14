<!DOCTYPE html>

<!-- Hey! Thank you for taking some time to look the code, hope you like what you see. If you want to ask anything, please contact me. Rafael. -->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Rafael García Doblas</title>
        <meta name="description" content="Rafael García Doblas, Web Developer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, minimal-ui">
        <meta name="format-detection" content="telephone=no">
        <meta name="author" content="Rafael Garcia Doblas">
        <meta name="robots" content="noindex, nofollow">

        <!-- STYLESHEETS IN BOTH LESS AND CSS -->
        <!-- <link rel="stylesheet" href="/public/css/rafastyle.css"> -->
        <link rel="stylesheet/less" href="/public/css/rafastyle.less" >

        <!-- LESS JS -->
        <script>var less = { env:"development", dumpLineNumbers:'mediaquery'};</script>
        <script src="/public/js/less-1.7.4.min.js"></script>
    </head>

    <body>
        <div class="wrapper">


            <section class="s-navigation">
                <nav class="hold">
                    <a href="#" class="left"><h1>Rafael García Doblas</h1></a><!--
                i--><a href="#projects-anchor"><span>Projects</span></a><!--
                i--><a href="/public/others/Rafael%20Garcia%20Doblas%20CV.docx"><span>Curriculum Vitae</span></a><!--
                i--><a class="contact" href="#contact-anchor"><span>Contact me</span></a>
                </nav>
            </section>


            <header class="full-screen-section">
                <div class="hold">
                    <h3>Hi <span class="red">There!</span></h3>
                    <h2>I am <span class="red">Rafael García Doblas</span></h2>
                    <p>A proud <span class="red">web developer</span>. I love <span class="curly-brackets">{{</span> <span class="red like"> motorbikes </span> <span class="curly-brackets">}}</span></p>
                </div>
                <a class="arrow" href="#introduction-anchor">
                    <i class="icon-arrow-left"></i>
                </a>
            </header>


            <?php /* DELETE
            <section class="s-greetings">
                <div class="hold">
                    <div class="first">
                        <h2>This is what I do</h2>
                    </div><!--
                i--><div class="second">
                        
                    </div>
                    <a href="" class="button vertical-swap">
                        <span class="first-content">Download my CV</span>
                        <i class="second-content icon-signup"></i>
                    </a>
                </div>
            </section>
            */ ?>


            <section class="s-introduction">

                <div id="introduction-anchor"></div>

                <div class="hold">

                    <div class="column1-2-big">

                        <h3><strong>Back-End</strong> and <strong>Front-End</strong></h3>
                        <p>As a Back-End I aim to write clean, efficient and elegant code. As a Fron-End my goal is to make good looking highly responsive websites.</p>
                        <p>Love to plan websites, to study every detail, to work along my colleagues designers, to discuss about UX...</p>
                        <br><p>I <strong>always</strong> fancy a coffee.</p>

                    </div><!-- .column1-2 



                i--><div class="column1-2-small">
                        
                        <div class="md-slider">
                            <div class="md-device-wrapper">
                                <div class="md-device md-device-1">
                                    <div class="md-inner"><img src="public/images/morphing/site1.jpg" /></div>
                                    <div class="md-border-element"></div>
                                    <div class="md-base-element"></div>
                                </div>
                            </div>
                        </div>

                    </div><!-- .column1-2 -->




                </div>
            </section>



            <section class="s-techs">
                <div class="hold">


                    <div class="column1-2-big d-icons">
                        <ul>
                            <li title="I use Git CLI for everything I work in. Storing my projects in Bitbucket or Github, I do deploy with Git as well." data-tooltip data-options="hover_delay: 300;">
                                <i class="icon-git-plain-wordmark"></i>
                            </li>
                            <li title="I understand why so many developers avoid PHP. This language could be often inconsistent, full of exceptions and does not have a clear philosofy. However, there is big community of Object Oriented PHP and great frameworks as Laravel that really stands out and make PHP compite with Python or Ruby face to face. I also have worked with Wordpress or Codeigniter often." data-tooltip>
                                <i class="icon-php-plain"></i>
                            </li>
                            <li title="I was feeling down on the PHP language till I found Laravel. Database Migrations, RESTful Routing, Database Seeding, Eloquent ORM, Composer packages, Blade templating..." data-tooltip>
                                <i class="icon-laravel-plain"></i>
                            </li>
                            <li title="Vanilla Javascript has become really useful. In one side in the server with NodeJS. In the other side, it has become standard enough these days to stop using jQuery in the Front-End. But the library still makes our work easier, and many other js plugins use it. Always enjoy doing vanilla Javascript." data-tooltip>
                                <i class="icon-javascript-plain"></i>
                            </li>

                            <li title="I've using Digital Ocean for some months and I really love it. Is reliable, cheap and let me configure the server just how I need to." data-tooltip>
                                <img src="/public/images/logos/digital-ocean.svg" alt="digital-ocean">
                            </li>
                            <li title="I have tried it and the experience was really good. Sadly, never had an app big enough to need such a platform." data-tooltip>
                                <i class="icon-amazonwebservices-plain-wordmark"></i>
                            </li>
                            <li title="Using Javascript in both Back-End and Front-End development always sounded good for me. Want to learn it as soon as I have some spare time. I have been trying it for small things, and have use for Ghost thought." data-tooltip>
                                <i class="icon-nodejs-plain-wordmark"></i>
                            </li>
                            <li title="I used to use Apache, but I moved to Nginx due to better performance." data-tooltip>
                                <img src="/public/images/logos/nginx.svg" alt="nginx">
                            </li>
                            
                            <li title="I have always a Unix console, even working in Windows environment (cyg-win). Really useful for Git, NPM, Grunt, Composer, Laravel... I've also dealed with many types of Linux servers." data-tooltip>
                                <i class="icon-linux-plain"></i>
                            </li>
                            <li title="My favourite desktop distro. I am really looking forward to see what ElementaryOS have to bring us in the future, but for now, I use Ubuntu." data-tooltip>
                                <i class="icon-ubuntu-plain"></i>
                            </li>

                            <li title="I don't use MySQL that much anymore thanks to ORMs. But I have been doing queries since my degree." data-tooltip>
                                <i class="icon-mysql-plain-wordmark"></i>
                            </li>
                            <li title="I felt in love with Ghost in the very first momment I saw the Admin panel and the speed of the platform. I would encourage anyone to give it a try, afterwards you will see Wordpress different." data-tooltip>
                                <i class="icon-ghost-plain-wordmark ghost"></i>
                            </li>
                            <!-- <li><i class="icon-mongodb-plain" title="" data-tooltip></i></li> -->
                            <li title="I could not work without NPM. It has all type of packages. In addition of Browserify, you can also use it for Front-End development." data-tooltip>
                                <i class="icon-npm-plain-wordmark"></i>
                            </li>

                            <li title="Before diggin in AngularJS I want to master Node. But really feels like somehting I have to learn soon. I have tried Backbone but Angular is gaining more and more fans." data-tooltip>
                                <i class="icon-angularjs-plain-wordmark"></i>
                            </li>
                            <li title="I started to use Foundation because was the first Front-End framework using the paradigm mobile first. But even bootstrap doing mobile first now, Foundation's philosify is being an 'skeleton' rather than a bunch of elements already made. And I like that." data-tooltip>
                                <i class="icon-foundation-plain-wordmark"></i>
                            </li>


                            <li title="Just HTML5. There is no place for XHTML or HTML4 these days." data-tooltip>
                                <i class="icon-html5-plain"></i>
                            </li>
                            <li title="ola k ase" data-tooltip>
                                <i class="icon-grunt-line-wordmark"></i>
                            </li>

                            <li title="I can use Less or Sass equally, I find advantages and disadvantages in them both." data-tooltip>
                                <i class="icon-less-plain-wordmark"></i>
                            </li>
                            <li title="I can use Sass or Less equally, I find advantages and disadvantages in them both." data-tooltip>
                                <i class="icon-sass-original"></i>
                            </li>
                            <li title="I can use Sass or Less equally, I find advantages and disadvantages in them both." data-tooltip>
                                <i class="icon-wordpress-plain-wordmark"></i>
                            </li>

                            <!-- 
                            <li title="I can use Sass or Less equally, I find advantages and disadvantages in them both." data-tooltip>
                                <i class="icon-elementary-plain"></i>
                            </li> -->

                            <!-- 
                            <li title="I have been using Sublime Text for years. I agree that is not that powerful as some IDEs, but the flexibility and speed of Sublime is essential to me." data-tooltip>
                                <i class="icon-sublimetext-plain"></i>
                            </li> -->

                            <!-- <li title="Just VIM." data-tooltip>
                                <i class="icon-vim-plain"></i>
                            </li> -->

                        </ul>
                        
                    </div><!-- end .column1-2

                i--><div class="column1-2-small d-comments">

                        <h3><strong>PHP</strong> + <strong>Javascript</strong></h3>

                        <p> I use OO <strong>PHP</strong> (with <strong>Laravel</strong> Framework) and <strong>Javascript</strong> on a daily basis, always with <strong>Git</strong>. I always enjoy work as a part of a team. </p>

                        <p> I have an Engineering in Information Technology from Málaga University in Spain.</p>

                        <p>In total, I have four years working as a developer. I have been working in Spain, England and Czech Republic, as an employee and as a freelancer.</p>

                        <p>Using Sublime Text, I have developed in Windows Linux and Mac, being Chromium my default browser.</p>

                        <p>I think that taking the risk of trying a new technology is always woth it.</p><br>

                    </div>

                </div>
            </section>


<!-- 
            <section class="s-see-some-projects"> DELETE
                Take a glance on some of my project
            </section>
 -->

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
                    <img src="/public/images/projects/ul.jpg" alt="uniqueliving">
                    <figcaption>
                        <h4>Unique Living Mobile</h4>
                        <p>As a part of digital agency team, Wonderlabs</p>
                        <a href="//uniqueliving.com/mobile-version" rel="nofollow"></a>
                    </figcaption>           
                </figure>
                    
                
                <figure>
                    <img src="/public/images/projects/ma.jpg" alt="maritalaffair">
                    <figcaption>
                        <h4>Biberódromo</h4>
                        <p>Bubba likes to appear out of thin air.</p>
                        <a href="//biberodromo.com" rel="nofollow"></a>
                    </figcaption>           
                </figure>
                
                <figure> <!-- 700 * 525 -->
                    <img src="/public/images/projects/bd.jpg" alt="biberodromo">
                    <figcaption>
                        <h4>Marital Affair</h4>
                        <p>As a part of digital agency team, Wonderlabs</p>
                        <a href="//maritalaffair.com" rel="nofollow"></a>
                    </figcaption>           
                </figure>

                    
            </section>





            <section class="s-testimonials">
                <div class="hold">
                    <ul>
                        <li class="column1-2">
                            <div class="i-container"><i class="icon-quote"></i></div>
                            <p>Rafael is an extremely talented developer who was a true asset to our company, whereby he single-handedly added huge value to our service offerings He is totally focussed on the task at hand and has the ability to balance work at great speeds whilst still paying meticulous attention to detail. As well as this, Rafael really is great company in the workplace.</p>
                            <img src="/public/images/testi-arni.jpg" alt="arni lochner wonderlabs">
                            <h5 class="name">Arni Lochner</h5>
                            <h6 class="sub-title">Creative Director at Wonderlabs</h6>

                        <li class="column1-2">
                            <div class="i-container"><i class="icon-quote"></i></div>
                            <p>Rafael is one of the most talented, dedicated and nicest people I have ever had the pleasure to work with. During his time at Wonderlabs, Rafael has managed complete projects from start to completion, with perfect time management and attention to detail. He will be greatly missed in the office and I wish him all the best for the future.</p>
                            <img src="/public/images/testi-craig.jpg" alt="arni lochner wonderlabs">
                            <h5 class="name">Craig Curchin</h5>
                            <h6 class="sub-title">Production Director at Wonderlabs</h6>

                    </ul>
                </div>
            </section>



            <section class="s-cta">
                <div class="hold">
                    <div class="floating-text">
                        <h2>This is <span>Rafa</span>.</h2>
                        <p>I mean, it's me. I answer my emails, I answer my phone, and I enjoy helping clients to find solutions to business challenges.</p>
                        <p class="red mt"><strong>I'd love to hear from you.</strong></p>
                        <div class="container">

                            <button class="button button-effect icon-phone"><span>Call Rafa</span></button><!--
                        i--><button class="button button-effect icon-paperplane"><span>Mail Rafa</span></button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s-cta-mobile">
                <img src="//placekitten.com/1500/600" alt="super-rafa-mobile">
            </section>

            <section class="s-ring-mail">
                <button class="button button-effect icon-phone"><span>Call Rafa</span></button><!--
            i--><button class="button button-effect icon-paperplane"><span>Mail Rafa</span></button>
            </section>



            <section class="s-socia-networks">
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
                        <a href="//www.facebook.com/rafamalaga86">
                            <i class="icon-skype"></i>
                        </a>
                </ul>
                <div id="contact-anchor"></div>
            </section>
        </div>

        <footer class="s-form full-screen-section">
            <form id="theForm" class="simform" novalidate autocomplete="off">
                <div class="simform-inner">
                    <ol class="questions">

                        <li>
                            <span>
                                <label for="q1">Send me an email. Write it in here.</label>
                            </span>

                            <input id="mess" name="mess" type="text">
                        </li>

                        <li>
                            <span>
                                <label for="q5">What is your name?</label>
                            </span>
                            <input id="name" name="name" type="text">
                        </li>

                        <li>
                            <span>
                                <label for="q6">Which is your email?</label>
                            </span>
                            <input id="email" name="email" type="email">
                        </li>

                    </ol><!-- /questions -->
                    <button class="submit" type="submit">Send answers</button>
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
        </footer>


        <!-- TIME FOR SCRIPTS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="/public/js/fastclick.js"></script>

        <!-- form -->
        <script src="/public/js/classie.js"></script>
        <script src="/public/js/modernizr.custom.js"></script>
        <script src="/public/js/stepsForm.js"></script>

        <!-- morphing device -->
        <script src="/public/js/morphingdevice.js"></script>
        
        <!-- foundation -->
        <script src="/public/js/foundation.js"></script>
        <script src="/public/js/foundation.tooltip.js"></script>

        <script>
        </script>


        <script src="/public/js/rafascript.js"></script>
    </body>
</html>