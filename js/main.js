jQuery(function($) { 

function include(scriptUrl) {
    document.write('<script src="'+dir_url + scriptUrl + '"></script>');
}

// Lazy load
function aload(t){"use strict";t=t||window.document.querySelectorAll("[data-aload]"),void 0===t.length&&(t=[t]);var a,e=0,r=t.length;for(e;r>e;e+=1)a=t[e],a["LINK"!==a.tagName?"src":"href"]=a.getAttribute("data-aload"),a.removeAttribute("data-aload");return t}

function init() {
    window_width = $(window).width();
    window_height = $(window).height();
    document_height = $(document).height();
}

$(document).ready(function() {
    init();
    
    $('input[type=tel]').inputmask({
        mask: "+7(999) 999-99-99"
    });

    var location_url = window.location.href;
    $('input[name="url"]').val(location_url);

    $('.js-mmenu-btn').click(function(event) {
    	event.preventDefault();
    	$('.js-header-menu').slideToggle();
    });

    function slider_front_init() {
        if ($('.js-main-slider').length) {
            $('.js-main-slider')
                    .on('init', function(slick){
                        var total = $(this).find('.main-slider__item:not(.slick-cloned)').length;
                        console.log("total", total);
                        $(this).closest('.main-slider').find('.js-main-slider-total').text(total);
                    })
                    .slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        prevArrow: $('.main-slider__arrow-prev'),
                        nextArrow: $('.main-slider__arrow-next'),
                    })
                    .on('afterChange', function(event, slick, currentSlide, nextSlide){
                        $(this).closest('.main-slider').find('.js-main-slider-current').text(currentSlide+1);
                    });
        }
    }
    slider_front_init();

    // $(".wpcf7").on('wpcf7mailsent', function(event){
    //     var forms = ['517', '193'];
    //     if ( forms.indexOf(event.detail.contactFormId) != -1 ) {
    //         if ($('.js-form-sent-ok').length){
    //             $('.js-form-sent-ok').fadeIn('slow');
    //         }
    //     }
    // });

    // document.addEventListener( 'wpcf7submit', function( event ) {
    //         alert( "The contact form ID is 123." );
    //         // do something productive
    //     }
    // }, false );


    // $('.link-ajax').click(function(event) {
    //     event.preventDefault();
    //     var cur_link = $(this).attr('href');
    //     console.log('click', -document_height);
    //     console.log('state', history.state);

    //     $('#js-content')
    //         .css('top',-document_height+'px')
    //         .load('http://seohelp.the4mobile.com/wp-content/themes/seohelp/ajax.php?link='+cur_link, function() {
    //             history.pushState({param: 'Value'}, '', cur_link);
    //             console.log( "Load was performed." );
    //             $(this).css('top','0');
    //             preinit();
    //             init();
    //         });
    // });


}); // $(document).ready

$(window).resize(init);

$(window).scroll(function() {

    // if (!is_team_about_scrolled && $('.js-team-about').length) {
    //     if (window_width >= 1200) {
    //         var scroll = $(window).scrollTop();
    //     }
    // }

});

/* Yandex Map
 ========================================================*/
    // var map_container = document.getElementById("map");
    // if (map_container) {
    //     $(document).ready(function () {
    //         get_map(map_container, map_contact);
    //     });
    // }

    // function get_map(map_container, map_array){
    //     if (map_container !== null) {
    //         ymaps.ready(init);
    //         var myMap, 
    //             myPlacemark,
    //             curLat,
    //             curLong,
    //             curDesc;

    //         function init(){ 
    //             curLat = map_array['lat'];
    //             curLong = map_array['long'];
    //             myMap = new ymaps.Map(map_container, {
    //                 // center: [61.582319, 98.112851],
    //                 center: [curLat, curLong],
    //                 zoom: 17
    //             }); 
    //             // curDesc = map_array['desc'];
    //             myPlacemark = new ymaps.Placemark([curLat, curLong], {}, {
    //                 // balloonContent: curDesc
    //                 iconLayout: 'default#image',
    //                 iconImageHref: theme_url+'/img/map-pin.png',
    //                 iconImageSize: [42, 58],
    //                 iconImageOffset: [-30, -70]
    //             });
    //             myMap.geoObjects.add(myPlacemark);
    //         }
    //     }
    // }

});

