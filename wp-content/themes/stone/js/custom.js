jQuery(document).ready(function() {

    //init DateTimePickers
    materialKit.initFormExtendedDatetimepickers();
    <!-- javascript for init -->

    //lightbox gallery.js
    baguetteBox.run('.tz-gallery');

    //init Selecty.js
    $('select').selecty();

    //init Slick.js
    $('.intro-slick').slick({
        dots: true,
        infinite: true,
        speed: 600,
        fade: true,
        autoplay: true,
        arrows: false,
        slidesToShow: 1,
    });

    //Awards Slick.js
    $('.awards-slick').slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: false
            }
        },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    //	var pattern = /\b(these|three|words)/gi; // words you want to wrap
    var pattern = /\b(Hot Stone)/gi; // words you want to wrap
    var replaceWith = '<strong  class="pink-color">$1</strong>'; // Here's the wap
    jQuery('.slick-item').each(function(){
        jQuery(this).html(jQuery(this).html().replace(pattern,replaceWith));
    });




    $('.section-heading-').html(function(){
        var text = $(this).text().split(' ');
        var first = text.shift();
        return (text.length > 0 ? '<b class="pink-color">'+first+'</b> ' : first) + text.join(" ");
    });

});

// Hide nav
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-140px";
    }
    prevScrollpos = currentScrollPos;
}