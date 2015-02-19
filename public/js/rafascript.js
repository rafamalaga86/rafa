// Rafael García Doblas



//////////////////////////////////////////////////////////////////////////////////
// Smooth Anchor

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});




//////////////////////////////////////////////////////////////////////////////////
// Script for making the arrow shake if screen does not scroll in some seconds

var arrow = document.getElementsByClassName('arrow')[0];

var moved = false;


$(window).on('scroll', function(){
    moved = true;
});



function arrowShake(){
    if (!moved) {
        arrow.className = arrow.className + ' shake';

        setTimeout(function(){
            arrow.className = 'arrow';
        }, 1000);
    }
}

setInterval(arrowShake, 5000);

/////////////////////////////////////////////////////////////////////////////////////
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
    '/public/images/morphing/site4.jpg'
    ]);







////////////////////////////////////////////////////////////////////////////////////////
        // jQuery
////////////////////////////////////////////////////////////////////////////////////////
jQuery(function($){




// Activate foundation scripts
            
$(document).foundation();




// Full screen sections

function readjust(){
    winh = $(window).height();
    $('.full-screen-section').height(winh);
    $('body').css("padding-bottom", winh);
}


// Move sections on responsive
function listenWidth() {

    if( $(window).width() <= 1024 ){

        // $(".d-comments").remove().insertBefore($(".d-icons"));
        $("header").removeClass('full-screen-section');

    } else {

        // $(".d-comments").remove().insertAfter($(".d-icons"));
        $("header").addClass('full-screen-section');
    }
}

listenWidth();
readjust();

$(window).on('resize', function(){ // ON WINDOWS RESIZE
	readjust();
    listenWidth();
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








/* CODE FOR CLOSE MODALS IF SCROLL EVENT*/

$(document).on('open.fndtn.reveal', '[data-reveal]', function () {
  $(this).find('.close-reveal-modal').addClass('clickable');
});

// $(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
//   var modal = $(this);
// });

$(document).on('close.fndtn.reveal', '[data-reveal]', function () {
  $(this).find('.close-reveal-modal.clickable').removeClass('clickable');
});

// $(document).on('closed.fndtn.reveal', '[data-reveal]', function () {
//   var modal = $(this);
// });

$(window).on("scroll", function(){

    if ($(".close-reveal-modal.clickable").length > 0){
        $(".close-reveal-modal.clickable").trigger('click');
    }

});

/* END CODE FOR CLOSE MODALS IF SCROLL EVENT*/








// CONTACT FORM
///////////////////////////////////////////////////////////////////

var theForm = document.getElementById( 'theForm' );

new stepsForm( theForm, {
    onSubmit : function( form ) {
        // hide form
        classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );


        /*
        form.submit();

        or
        AJAX request (maybe show loading indicator while we don't have an answer..)
        */
/*
        var post = $.post("contact_me.php", {name: "Peter", message: "Hola que ase", email: "petergriffing@sdfasd.com"}, function(data){

            var messageEl = theForm.querySelector( '.final-message' );

            messageEl.innerHTML = 'Thank you! I\'ll reply you soon.';
            
            classie.addClass( messageEl, 'show' );

        } ,'json');
*/


        var user_name       = $('input[name=name]').val();
        var user_email      = $('input[name=email]').val();
        var user_subject    = "Email from rafaelgarciadoblas.com page:";
        var user_message    = $('input[name=mess]').val();
       
        //data to be sent to server
        post_data = {'userName':user_name, 'userEmail':user_email, 'userSubject':user_subject, 'userMessage':user_message};
       
        //Ajax post data to server
        $.post('contact_me.php', post_data, function(response){ 

             var messageEl = theForm.querySelector( '.final-message' );
           
            //load json data from server and output message
            if(response.type == 'error') {

                messageEl.innerHTML = '<span class="error">'+response.text+'</span>';

            } else {

                messageEl.innerHTML = '<span class="success">'+ response.text +'</span>';
               
                //reset values in all input fields
                // $('#email-form input').val('');
                // $('#email-form textarea').val('');
            }

            $('#loader-container').fadeOut();
            classie.addClass( messageEl, 'show' );

           

        }, 'json');




    }
} );






// AJAX LOADER
///////////////////////////////////////////////////////////////////


var opts = {
    lines: 13, // The number of lines to draw
    length: 30, // The length of each line
    width: 10, // The line thickness
    radius: 30, // The radius of the inner circle
    corners: 0, // Corner roundness (0..1)
    rotate: 0, // The rotation offset
    direction: 1, // 1: clockwise, -1: counterclockwise
    color: '#4E4E56', // #rgb or #rrggbb or array of colors
    speed: 1, // Rounds per second
    trail: 60, // Afterglow percentage
    shadow: false, // Whether to render a shadow
    hwaccel: false, // Whether to use hardware acceleration
    className: 'spinner', // The CSS class to assign to the spinner
    zIndex: 2e9, // The z-index (defaults to 2000000000)
    top: '50%', // Top position relative to parent
    left: '50%' // Left position relative to parent
};


var target = document.getElementById('loader-container');
var spinner = new Spinner(opts).spin(target);








// PUT MY EMAIL

var mym = document.querySelector(".mym"),
    lhs = "rafamalaga86";
    rhs = "gmail.com";

mym.innerHTML = "<A HREF=\"mailto" + ":" + lhs + "@" + rhs + "\">" + lhs + "@" + rhs + "<\/A>";




});



