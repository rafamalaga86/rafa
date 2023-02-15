<?php

// Prevent this file to be accessed, only included
if (basename(__FILE__) == basename(get_included_files()[0])) {
    http_response_code(404);
    // include('404.php');
    die();
}

$otherLanguages       = [
    // 'es' => 'Español'
];

$titleTag             = 'Rafael García Doblas, proud Software Developer';
$metaDescription      = 'I do OO PHP (Zend, Laravel), Javascript and Python on a daily basis, always with Git. Follow best practises, TDD, Unit and Integration testing, Design Patterns... Engineer in Information Technology from Málaga University in Spain.';
$ogDescription        = 'Is having development skills like having superpowers? Coffee, beer, motorbikes and software development are my passions.';
$twitterTitle         = $titleTag;
$twitterDescription   = 'Is having development skills like having superpowers?';
$h1                   = 'I am <strong>Rafael García Doblas</strong>';
$whatIAm              = 'A proud <span class="red">software developer</span><span class="what-i-love" data-what="travelling,sublime text,noodle soup,motorbikes">. I love <span class="curly-brackets">{{</span> <span class="red like"> motorbikes </span> <span class="curly-brackets">}}</span></span>';

$section1P1           = 'I do OO <strong>PHP</strong> (<strong>Zend</strong>,<strong>Laravel</strong>) and <strong>Javascript</strong> on a daily basis, always with <strong>Git</strong>. I enjoy work as a part of a team. ';
$section1P2           = 'I follow best practises, TDD, Unit and Integration testing, Design Patterns...';
$section1P3           = 'I have an Engineering in Information Technology from Málaga University in Spain.';
$section1P4           = 'In total, I have four years experience as a software developer. I have been working in Spain, England and Germany, as an employee and as a freelancer.';

$examplesOfMyWork     = 'Looking for examples of my work?';
$downloadMyCV         = 'Download my CV';
$myCodeIsPrivate      = 'Most of my code is private, sorry. But you can find a little in my GitHub account (is kind of old now, sorry!).';

$testimonial1Title    = 'Rafael is an extremely talented developer';
$testimonial1Quote    = 'Rafael is an extremely talented developer who was a true asset to our company, whereby he single-handedly added huge value to our service offerings He is totally focussed on the task at hand and has the ability to balance work at great speeds whilst still paying meticulous attention to detail';
$testimonial1Person   = 'Arni Lochner';
// $testimonial1Position = 'Director at Wonderlabs';

$testimonial2Title    = 'Perfect time management and attention to detail';
$testimonial2Quote    = 'Rafael is one of the most talented, dedicated and nicest people I have ever had the pleasure to work with. During his time at Wonderlabs, Rafael has managed complete projects from start to completion, with perfect time management and attention to detail.';
$testimonial2Person   = 'Craig Curchin';
// $testimonial2Position = 'Production Director at Wonderlabs';

$ctaH2                = 'This is <span>Rafa</span>.';
$ctaP                 = 'I mean, it\'s me. I answer my emails, I answer my phone, and I enjoy helping clients to find solutions to business challenges.';
$ctaCallMe            = 'I\'d love to hear from you.';
$callRafa             = 'Call Rafa';
$mailRafa             = 'Mail Rafa';

$sendMeAnEmail        = 'Send me an email. Write the message in here.';
$whatIsYourName       = 'What is your name?';
$whichIsYourEmail     = 'Which is your email?';
$sendAnswers          = 'Send answers';
$formEmpty            = 'Please, do not leave any field empty';
$formInvalidEmail     = 'Please enter a valid email address';
$formError            = 'Sorry the email was not sent';
$formThanks           = 'Hi %s. Thank you for your email';

$activateJS           = 'Activate Javascript to see';
$rightsReserved       = 'All Rights Reserved';
