jQuery(function($) { 

var window_width;
var window_height;

function init() {
    window_width = $(window).width();
    window_height = $(window).height();
}

$(document).ready(function() {
    init();
    aload();
    
    if ($('.js-slick').length){
        loadCSS(theme_url+'/js/slick/slick.css');
        $.loadScript(theme_url+'/js/slick/slick.min.js', function(){
            slider_front_init();
            slider_partners_logo_init();
            slider_why_choose_init();
            slider_footer_news_init();
        });        
    }

    $('input[type=tel]').inputmask({
        mask: "+7(999) 999-99-99"
    });

    $('.js-why-choose-caption').matchHeight();

    var location_url = window.location.href;
    $('input[name="url"]').val(location_url);

    $('.js-mmenu-btn').click(function(event) {
        event.preventDefault();
        $('.js-header-menu').slideToggle();
    });


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


// Lazy load
function aload(t){"use strict";t=t||window.document.querySelectorAll("[data-aload]"),void 0===t.length&&(t=[t]);var a,e=0,r=t.length;for(e;r>e;e+=1)a=t[e],a["LINK"!==a.tagName?"src":"href"]=a.getAttribute("data-aload"),a.removeAttribute("data-aload");return t}

function slider_front_init() {
    if ($('.js-main-slider').length) {
        $('.js-main-slider')
                .on('init', function(slick){
                    var total = $(this).find('.main-slider__item:not(.slick-cloned)').length;
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

function slider_partners_logo_init() {
    if ($('.js-partners-logo').length) {
        $('.js-partners-logo')
                .slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    prevArrow: $('.b-partners-logo__arrow-prev'),
                    nextArrow: $('.b-partners-logo__arrow-next'),
                    responsive: [
                        {
                          breakpoint: 600,
                          settings: {
                            slidesToShow: 2,
                          }
                        }
                      ]
                });
    }
}

function slider_footer_news_init() {
    if ($('.js-news-footer').length) {
        $('.js-news-footer')
            .slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                  ]
            });
    }
}

function slider_why_choose_init() {
    if ($('.js-why-choose').length) {
        $('.js-why-choose')
                .slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    arrows: false,
                    responsive: [
                        {
                          breakpoint: 1200,
                          settings: {
                            slidesToShow: 4,
                          }
                        },
                        {
                          breakpoint: 992,
                          settings: {
                            slidesToShow: 3,
                          }
                        },
                        {
                          breakpoint: 700,
                          settings: {
                            slidesToShow: 2,
                          }
                        },
                        {
                          breakpoint: 500,
                          settings: {
                            slidesToShow: 1,
                          }
                        }
                      ]
                });
    }
}


function include(scriptUrl) {
    document.write('<script src="'+dir_url + scriptUrl + '"></script>');
}

$.loadScript = function (url, callback) {
    $.ajax({
    url: url,
    dataType: 'script',
    success: callback,
    async: true
    });
}

//if (typeof someObject == 'undefined') $.loadScript('url_to_someScript.js', function(){
    //Stuff to do after someScript has loaded
//});

function loadCSS(url){
    $("<link/>", {
       rel: "stylesheet",
       type: "text/css",
       href: url
    }).appendTo("head");    
}


});

