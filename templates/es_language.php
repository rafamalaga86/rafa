<?php

// Prevent this file to be accessed, only included
if (basename(__FILE__) == basename(get_included_files()[0])) {
    http_response_code(404);
    // include('404.php');
    die();
}

$otherLanguages       = [
    'en' => 'English'
];

$titleTag             = 'Rafael García Doblas, orgulloso Software Developer';
$metaDescription      = 'Hago OO PHP (Zend, Laravel), Javascript y Python en el día a día, siempre con Git. Sigo las mejores prácticas al programar, como TDD, Unit testing, Integration Testing, Patrones de diseño... Soy Ingeniero de Informática por la Universidad de Málaga, España';
$ogDescription        = '¿Ser programador es como tener superpoderes? El café, la cerveza, las motos y el desarrollo de software son mis pasiones';
$twitterTitle         = $titleTag;
$twitterDescription   = '¿Ser programador es como tener superpoderes?';
$h1                   = 'Soy <strong>Rafael García Doblas</strong>';
$whatIAm              = 'Orgulloso <span class="red">programador de software</span><span class="what-i-love" data-what="viajar,sublime text,la sopa de fideos,las motos">. Amo <span class="curly-brackets">{{</span> <span class="red like"> las motos </span> <span class="curly-brackets">}}</span></span>';

$section1P1           = 'Hago OO <strong>PHP</strong> (<strong>Zend</strong>,<strong>Laravel</strong>) y <strong>Javascript</strong> en el día a día, siempre con <strong>Git</strong>. Trabajo bien en equipo. ';
$section1P2           = 'Sigo las mejores prácticas al programar, como TDD, Unit testing, Integration Testing, Patrones de diseño...';
$section1P3           = 'Soy Ingeniero de Informática por la Universidad de Málaga, España.';
$section1P4           = 'En total, tengo cuatro años de experiencia como desarrollador de software. He trabajado en España, Inglaterra y Alemania, como empleado y como autónomo.';

$companiesIWorkedFor  = 'Empresas para las que he trabajado como Ingeniero de Software:';
$downloadMyCV         = 'Descarga mi CV';
$myCodeIsPrivate      = 'La mayoría de mi código es privado, lo siento. Pero puedes encontrar algo en mi cuenta de GitHub (casi todo es de hace años, ¡lo siento!)';

$testimonial1Title    = 'Rafael es un desarrollador con mucho talento';
$testimonial1Quote    = 'Rafael es un desarrollador con mucho talento que ha sido un verdadero activo para nuestra empresa, donde estuvo a cargo de proyectos que eran de gran valor para los servicios que ofrecemos. Él está totalmente en el trabajo y tiene la habilidad de balancear la carga de trabajo con buena agilidad mientras pone atención meticulosa en los detalles.';
$testimonial1Person   = 'Arni Lochner';
// $testimonial1Position = 'Director en Wonderlabs';

$testimonial2Title    = 'Perfecto manejo del tiempo y atención en el detalle';
$testimonial2Quote    = 'Rafael es una de las personas con más talento y dedicación con las que he tenido el placer de trabajar. Durante este tiempo en Wonderlabs, Rafael ha manejado proyectos completos desde el comienzo hasta el final, con perfecto manejo del tiempo y atención al detalle.';
$testimonial2Person   = 'Craig Curchin';
// $testimonial2Position = 'Production Director en Wonderlabs';

$ctaH2                = 'Este es <span>Rafa</span>.';
$ctaP                 = 'Quiero decir, soy yo. Contesto mis emails, contesto el teléfono, y me encanta ayudar a clientes a encontrar soluciones a los retos de los negocios.';
$ctaCallMe            = 'Me encantaría saber más de ti.';
$callRafa             = 'Llamar';
$mailRafa             = 'Mail';

$sendMeAnEmail        = 'Envíame un email. Escribe el mensaje aquí.';
$whatIsYourName       = '¿Cuál es tu nombre?';
$whichIsYourEmail     = '¿Cuál es tu email?';
$sendAnswers          = 'Envia las respuestas';
$formEmpty            = 'Por favor, no dejes ningún campo vacío';
$formInvalidEmail     = 'Por favor, teclea un email válido';
$formError            = 'Lo siento, el email no ha podido ser enviado';
$formThanks           = 'Hola %s. Gracias por tu email';

$activateJS           = 'Activa Javascript para ver el email';
$rightsReserved       = 'Todos los derechos reservados';
