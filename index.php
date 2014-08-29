<!-- Hey! Thank you for taking some time to look the code, hope you like what you see. If you want to ask anything, please contact me. Rafael. -->
<?php 
    include 'functions.php';
 ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rafael García Doblas</title>
        <meta name="description" content="Rafael García Doblas, front-end developer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, minimal-ui">
        <meta name="format-detection" content="telephone=no">

        <!-- STYLESHEETS IN BOTH LESS AND CSS -->
        <!-- <link rel="stylesheet" href="/public/css/rafastyle.css"> -->
        <link rel="stylesheet/less" href="/public/css/rafastyle.less" >

        <!-- LESS JS -->
        <script>var less = { env:"development", dumpLineNumbers:'mediaquery'};</script>
        <script src="/public/js/less-1.7.4.min.js"></script>
        
    </head>

    <body>

        <section class="s-first full-screen-section">
            <div class="floating-box">
                <h3><?= random_greetings(); ?></h3>
                <h1>I am Rafael García Doblas</h1>
                <h2>A proud web developer. I love noodle soup, motorbikes, and travelling.</h2>
            </div>
        </section>

        <section class="s-greetings">
            <div class="long-hold">
                <div class="first">
                    <h2>This is what I do</h2>
                </div><!--
            i--><div class="second">
                    <p>Love websites. To plan them, to study every detail, to work along my friend designers, to discuss about UX...</p>
                    <p>Love Sublime Text and like to keep up to date in website techonology</p>
                </div>
                <a href="#" class="button">Download my CV</a>
            </div>
        </section>

        <section class="s-portfolio">
            <ul>
                <li class="box unit vertical box-4">
                    <div class="inner">
                        <div class="inside-inner">
                            <h5>Wonderlabs Website</h5>
                            <a href="#" class="button">See more</a>
                        </div>
                    </div>

                <li class="box unit vertical box-5">
                    <div class="inner">
                        <div class="inside-inner">
                            <h5>MyRedLights Website</h5>
                            <a href="#" class="button">See more</a>
                        </div>
                    </div>
            </ul><!--
        i--><ul>
                <li class="box unit box-1">
                    <div class="inner">
                        <div class="inside-inner">
                            <h5>Clickcreacion Website</h5>
                            <a href="#" class="button">See more</a>
                        </div>
                    </div>

                <li class="box unit box-2">
                    <div class="inner">
                        <div class="inside-inner">
                            <h5>Hidromainake Website</h5>
                            <a href="#" class="button">See more</a>
                        </div>
                    </div>

                <li class="box unit horizontal box-3">
                    <div class="inner">
                        <div class="inside-inner">
                            <h5>Biberodromo Website</h5>
                            <a href="#" class="button">See more</a>
                        </div>
                    </div>
            </ul>
        </section>


        <section class="s-bars">
        </section>


        <section class="s-cta">
            <div class="hold">
                <div class="floating-text">
                    <h2>This is me. Rafa.</h2>
                    <p>I always answer my emails and text messages, but not always pick the phone because I could be at work. I would love to hear from you.</p>
                    <a href="" class="button mail-rafa">Mail Rafa</a>
                    <div href="" class="button call-rafa">Call Rafa</div>
                </div>
            </div>
        </section>

        <section class="s-download">
            Download my CV
        </section>


        <section class="s-testimonials">
            <div class="hold">
                <ul>
                    <li>
                        <div class="i-container"><i class="icon-quote"></i></div>
                        <p>Working with Rafa was better than expected and we had really high expectations. He is an incredibly talented developer but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.</p>
                        <h5 class="name">Adam Houston</h5>
                        <h6 class="sub-title">Bridge Creative</h6>

                    <li>
                        <div class="i-container"><i class="icon-quote"></i></div>
                        <p>Working with Rafa was better than expected and we had really high expectations. He is an incredibly talented developer but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.</p>
                        <h5 class="name">Adam Houston</h5>
                        <h6 class="sub-title">Bridge Creative</h6>

                    <li>
                        <div class="i-container"><i class="icon-quote"></i></div>
                        <p>Working with Rafa was better than expected and we had really high expectations. He is an incredibly talented developer but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.</p>
                        <h5 class="name">Adam Houston</h5>
                        <h6 class="sub-title">Bridge Creative</h6>
                </ul>
            </div>
        </section>

        <section class="s-socia-networks">
            <ul>
                <li class="twitter">
                    <i class="icon-twitter"></i>
                <li class="linkedin">
                    <i class="icon-linkedin"></i>
                <li class="skype">
                    <i class="icon-skype"></i>
                <li class="facebook">
                    <i class="icon-facebook"></i>
            </ul>
        </section>


        <footer class="s-form full-screen-section">
            <form id="theForm" class="simform" autocomplete="off">
                <div class="simform-inner">
                    <ol class="questions">
                        <li>
                            <span><label for="q1">Tell me something</label></span>
                            <input id="q1" name="mess" type="text"/>
                        </li>
                        <li>
                            <span><label for="q5">What is your name?</label></span>
                            <input id="q5" name="name" type="text"/>
                        </li>
                        <li>
                            <span><label for="q6">Which is your email?</label></span>
                            <input id="q6" name="email" type="text"/>
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


        <!--<footer>
            <div class="small-12 medium-6 large-4">A graduate of Internet Technology, Ian combines his education with 6 years commercial experience in CSS3, HTML5, JavaScript, WordPress, and design to produce creative and effective websites for happy clients over the world.

Freelance Front End Developer. Available September 2014.</div>

            <div class="small-12 medium-6 large-4">
                <i></i><p>Follow @rafamalaga86 for web design & development articles, opinions and links</p>
            </div>

            <div class="small-12 medium-6 large-4">

            </div>

        </footer>-->
        <!-- TIME FOR SCRIPTS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="/public/js/fastclick.js"></script>
        <script src="/public/js/foundation.min.js"></script>

        <script src="/public/form/classie.js"></script>
        <script src="/public/form/modernizr.custom.js"></script>
        <script src="/public/form/stepsForm.js"></script>

        <script>
            
        </script>

        <script src="/public/js/rafascript.js"></script>
    </body>
</html>