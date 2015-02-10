// Rafael García Doblas



// Preload images

function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}

preload([
    '/public/images/morphing/site1.jpg',
    '/public/images/morphing/site2.jpg',
    '/public/images/morphing/site3.jpg',
    '/public/images/morphing/site4.jpg',
    '/public/images/morphing/site3r.jpg',
    '/public/images/morphing/site4r.jpg'
    ]);







// MORPHING SECTION
////////////////////////////////////////////////////////////////////////




////////////////////////////////////////////////////////////////////////////////////////
        // jQuery
////////////////////////////////////////////////////////////////////////////////////////
jQuery(function($){


function readjust(){
    winh = $(window).height();
    $('.full-screen-section').height(winh);
    $('body').css("padding-bottom", winh);
}

readjust();

$(window).on('resize', function(){ // ON WINDOWS RESIZE
	readjust();
});




// FIRST SECTION 
///////////////////////////////////////////////////////////////////



/* CODE FOR CHANGIN THE WORD OF THINGS THAT I LIKE */
var array_likes = [
    "travelling",
    "sublime text",
    "noodle soup",
    "motorbikes"
];
var array_likes_count;

function rounded_array_count(){
    array_likes_count++;
    // console.log(array_likes_count + " > " + array_likes.length);
    if (array_likes_count >= array_likes.length){
        array_likes_count = 0;
    }
}

var random = Math.random() * array_likes.length;
array_likes_count = Math.round(random);

var like = document.getElementsByClassName('like');
like[0].innerHTML = array_likes[array_likes_count];

setInterval(function(){
    $(".like").fadeOut('fast', function(){
        rounded_array_count();
        var what_i_like = array_likes[array_likes_count];
        $('.like').html(what_i_like);
        $('.like').fadeIn("fast");
    });
}, 4000);
/* END OF CODE FOR CHANGIN THE WORD OF THINGS THAT I LIKE */





/* CODE FOR HIDDING AND SHOW THE NAVIGATION MENU */

    $(window).on('scroll', function(){
        if ( $(window).scrollTop() >= 500 && ! $('.s-navigation').hasClass('opaque') ){
            $('.s-navigation').addClass('opaque');
        } else if ( $(window).scrollTop() < 500 && $('.s-navigation').hasClass('opaque') ) {
            $('.s-navigation').removeClass('opaque');
        }
    });


/* END OF CODE FOR HIDDING AND SHOW THE NAVIGATION MENU */



// CONTACT FORM
///////////////////////////////////////////////////////////////////

var theForm = document.getElementById( 'theForm' );

new stepsForm( theForm, {
    onSubmit : function( form ) {
        // hide form
        classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

        /*
        form.submit()
        or
        AJAX request (maybe show loading indicator while we don't have an answer..)
        */

        var post = $.post("mail_data.php", {name: "Peter", message: "Hola que ase", email: "petergriffing@sdfasd.com"}, function(data){

            var messageEl = theForm.querySelector( '.final-message' );
            messageEl.innerHTML = 'Thank you! I\'ll reply you soon.';
            classie.addClass( messageEl, 'show' );

        } ,'json');

    }
} );






// PORTFOLIO SECTION
///////////////////////////////////////////////////////////////////


























});



