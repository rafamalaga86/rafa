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




// Activate foundation scripts
            

$(document).foundation({
    tooltip: {
        hover_delay: 0
    }
});




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

            classie.addClass( messageEl, 'show' );

           

        }, 'json');




    }
} );






// PORTFOLIO SECTION
///////////////////////////////////////////////////////////////////


























});



