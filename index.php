<?php 
    include 'functions.php';
 ?>

<!doctype html>
<!-- Hey! Thank you for taking some time to look the code, hope you like what you see. If you want to ask anything, please contact me. Rafael. -->
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


        <section class="s-cta">
            <h2>Building creative & effective websites</h2>
            <p>Specialising in JavaScript, WordPress, responsive design, animation, and performance</p>
            <button>Get in touch</button>
        </section>


        <section class="s-testimonials">
            <div class="testi small-12 medium-6 large-4"><i class="icon-quote"></i>Working with Ian was better than expected and we had really high expectations. He is an incredibly talented developer but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.
                <h6>Adam Houston, <a href="//google.es">Bridge Creative</a></h6>
            </div>
            <div class="testi small-12 medium-6 large-4"><i class="icon-quote"></i>Working with Ian was better than expected and we had really high expectations. He is an incredibly talented developer but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.</div>
            <div class="testi small-12 medium-6 large-4"><i class="icon-quote"></i>Working with Ian was better than expected and we had really high expectations. He is an incredibly talented developer but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.</div>
        </section>


        <footer class="s-form">
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