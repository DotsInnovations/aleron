// function include(scriptUrl) {
//     document.write('<script src="' + scriptUrl + '"></script>');
// }

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};
// include('../assets/js/jquery.cookie.js');
// include('../assets/js/jquery.easing.1.3.js');
(function($) {
    if (isIE() && isIE() < 11) {
        // include('../assets/js/pointer-events.js');
        $('html').addClass('lt-ie11');
        $(document).ready(function() {
            PointerEventsPolyfill.initialize({});
        });
    }
})(jQuery);
// (function($) {
//     var o = $('html');
//     if (o.hasClass('desktop')) {
//         // include('../assets/js/tmstickup.js');
//         $(document).ready(function() {
//             $('#stuck_container').TMStickUp({})
//         });
//     }
// })(jQuery);
(function($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        // include('../assets/js/jquery.ui.totop.js');
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart',
                containerClass: 'toTop material-design-up176'
            });
        });
    }
})(jQuery);
(function($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        // include('../assets/js/jquery.equalheights.js');
    }
})(jQuery);
(function($) {
    var currentYear = (new Date).getFullYear();
    $(document).ready(function() {
        $("#copyright-year").text((new Date).getFullYear());
    });
})(jQuery);
(function($) {
    // include('../assets/js/superfish.js');
})(jQuery);;
(function($) {
    // include('../assets/js/jquery.rd-navbar.js');
})(jQuery);
// (function($) {
//     var o = document.getElementById("google-map");
//     if (o) {
//       //  include('//maps.google.com/maps/api/js?sensor=false');
//       //  include('js/jquery.rd-google-map.js');
//         $(document).ready(function() {
//             var o = $('#google-map');
//             if (o.length > 0) {
//                 o.googleMap({
//                     styles: [
//                         [{
//                             "featureType": "administrative.land_parcel",
//                             "elementType": "all",
//                             "stylers": [{
//                                 "visibility": "off"
//                             }]
//                         }, {
//                             "featureType": "landscape.man_made",
//                             "elementType": "all",
//                             "stylers": [{
//                                 "visibility": "off"
//                             }]
//                         }, {
//                             "featureType": "poi",
//                             "elementType": "labels",
//                             "stylers": [{
//                                 "visibility": "off"
//                             }]
//                         }, {
//                             "featureType": "road",
//                             "elementType": "labels",
//                             "stylers": [{
//                                 "visibility": "simplified"
//                             }, {
//                                 "lightness": 20
//                             }]
//                         }, {
//                             "featureType": "road.highway",
//                             "elementType": "geometry",
//                             "stylers": [{
//                                 "hue": "#f49935"
//                             }]
//                         }, {
//                             "featureType": "road.highway",
//                             "elementType": "labels",
//                             "stylers": [{
//                                 "visibility": "simplified"
//                             }]
//                         }, {
//                             "featureType": "road.arterial",
//                             "elementType": "geometry",
//                             "stylers": [{
//                                 "hue": "#fad959"
//                             }]
//                         }, {
//                             "featureType": "road.arterial",
//                             "elementType": "labels",
//                             "stylers": [{
//                                 "visibility": "off"
//                             }]
//                         }, {
//                             "featureType": "road.local",
//                             "elementType": "geometry",
//                             "stylers": [{
//                                 "visibility": "simplified"
//                             }]
//                         }, {
//                             "featureType": "road.local",
//                             "elementType": "labels",
//                             "stylers": [{
//                                 "visibility": "simplified"
//                             }]
//                         }, {
//                             "featureType": "transit",
//                             "elementType": "all",
//                             "stylers": [{
//                                 "visibility": "off"
//                             }]
//                         }, {
//                             "featureType": "water",
//                             "elementType": "all",
//                             "stylers": [{
//                                 "hue": "#a1cdfc"
//                             }, {
//                                 "saturation": 30
//                             }, {
//                                 "lightness": 49
//                             }]
//                         }]
//                     ]
//                 });
//             }
//         });
//     }
// })
(jQuery);;
(function($) {
    var o = $('.rd-mailform');
    if (o.length > 0) {
      // include('js/mailform/jquery.form.min.js');
      // include('js/mailform/jquery.rd-mailform.min.js');
        // $(document).ready(function() {
        //     var o = $('.rd-mailform');
        //     if (o.length) {
        //         o.rdMailForm({
        //             validator: {
        //                 'constraints': {
        //                     '@LettersOnly': {
        //                         message: 'Please use letters only!'
        //                     },
        //                     '@NumbersOnly': {
        //                         message: 'Please use numbers only!'
        //                     },
        //                     '@NotEmpty': {
        //                         message: 'Field should not be empty!'
        //                     },
        //                     '@Email': {
        //                         message: 'Enter valid e-mail address!'
        //                     },
        //                     '@Phone': {
        //                         message: 'Enter valid phone number!'
        //                     },
        //                     '@Date': {
        //                         message: 'Use MM/DD/YYYY format!'
        //                     },
        //                     '@SelectRequired': {
        //                         message: 'Please choose an option!'
        //                     }
        //                 }
        //             }
        //         }, {
        //             'MF000': 'Sent',
        //             'MF001': 'Recipients are not set!',
        //             'MF002': 'Form will not work locally!',
        //             'MF003': 'Please, define email field in your form!',
        //             'MF004': 'Please, define type of your form!',
        //             'MF254': 'Something went wrong with PHPMailer!',
        //             'MF255': 'There was an error submitting the form!'
        //         });
        //     }
        // });
    }
})(jQuery);
$(function() {
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,
        gestureStart = function() {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },
        scaleFix = function() {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };
    scaleFix();
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function() {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(function() {
                        return false;
                    }, function() {
                        window.location.href = $(this).attr("href");
                    });
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');;
(function($) {
    var o = $('#camera');
    if (o.length > 0) {
        if (!(isIE() && (isIE() > 9))) {
            // include('../assets/js/jquery.mobile.customized.min.js');
        }
        // include('../assets/js/camera.js');
        
        $(document).ready(function() {
            o.camera({
                autoAdvance: true,
                height: '50.828%',
                minHeight: '150px',
                pagination: false,
                thumbnails: false,
                playPause: false,
                hover: false,
                loader: 'none',
                navigation: true,
                navigationHover: true,
                mobileNavHover: false,
                fx: 'simpleFade'
            })
        });
    }
})(jQuery);
(function($) {
    // include('../assets/js/jquery.rd-parallax.js');
})(jQuery);