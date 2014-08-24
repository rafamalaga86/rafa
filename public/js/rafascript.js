jQuery(function($){

winh = $(window).height();


$(".full-screen-section").height(winh);


$(window).on('resize', function(){ // ON WINDOWS RESIZE
	winh = $(window).height();

	$(".full-screen-section").height(winh);
});





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



});



