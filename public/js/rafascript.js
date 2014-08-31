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



var el = document.querySelector( '.md-slider' ),
    settings = {
        autoplay : true,
        interval : 3000,
        devices : [
            { cName : 'md-device-1', canRotate : false, imgsrc : '/public/images/morphing/site1.jpg' },
            { cName : 'md-device-2', canRotate : false, imgsrc : '/public/images/morphing/site2.jpg' },
            { cName : 'md-device-3', canRotate : true, imgsrc : '/public/images/morphing/site3.jpg', rotatedsrc : '/public/images/morphing/site3r.jpg' },
            { cName : 'md-device-4', canRotate : true, imgsrc : '/public/images/morphing/site4.jpg', rotatedsrc : '/public/images/morphing/site4r.jpg' }
        ]
    },
    devicesTotal = settings.devices.length,
    ds = MorphingDevice( el, settings );

// create navigation triggers
var nav = document.createElement( 'nav' );
for( var i = 0; i < devicesTotal; ++i ) {

    var trigger = document.createElement( 'a' );
    trigger.className = i === 0 ? 'md-current' : '';
    trigger.setAttribute( 'href', '#' );
    trigger.setAttribute( 'pos', i );
    trigger.onclick = function( event ) {

        ds.stopSlideshow();
        var pos = Number( event.target.getAttribute( 'pos' ) );
        if( pos === ds.getCurrent() ) {
            return false;
        }
        ds.updateCurrentTrigger( event.target );
        ds.setCurrent( pos );
        ds.changeDevice();
        return false;
    };
    nav.appendChild( trigger );

}
el.appendChild( nav );

if( settings.autoplay ) {
    ds.startSlideshow();
}







el = document.querySelector( '.md-slider' );
settings = {
    autoplay : true,
    interval : 3000,
    devices : [
        { cName : 'md-device-1', canRotate : false, imgsrc : '/public/images/morphing/site1-2.jpg' },
        { cName : 'md-device-2', canRotate : false, imgsrc : '/public/images/morphing/site2-2.jpg' },
        { cName : 'md-device-3', canRotate : true, imgsrc : '/public/images/morphing/site3-2.jpg', rotatedsrc : '/public/images/morphing/site3r.jpg' },
        { cName : 'md-device-4', canRotate : true, imgsrc : '/public/images/morphing/site4-2.jpg', rotatedsrc : '/public/images/morphing/site4r.jpg' }
    ]
};
devicesTotal = settings.devices.length;
ds = MorphingDevice( el, settings );




////////////////////////////////////////////////////////////////////////////////////////
        // jQuery
////////////////////////////////////////////////////////////////////////////////////////
jQuery(function($){

winh = $(window).height();


$(".full-screen-section").height(winh);
$('body').css("padding-bottom", winh);


$(window).on('resize', function(){ // ON WINDOWS RESIZE
	winh = $(window).height();

	$(".full-screen-section").height(winh);
    $('body').css("padding-bottom", winh);
});



// FIRST SECTION 
///////////////////////////////////////////////////////////////////

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



