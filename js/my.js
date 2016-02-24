wow = new WOW(
    {
        //animateClass: 'animated',
        offset:       100
    }
);
wow.init();


$(document).ready(function(){

    //запуск слайдера
    $('.carousel').carousel();
//********************************************
    //ширина экрана
    $(window).resize(function(){
        console.log(window.innerWidth);
    });
//********************************************
    //просмотр цены
    $('.main-quest-vip').click(
        function() {
            //console.log (this);
            var price = $(this).children('div')[2];
            //console.log(price);
            $(price).slideToggle();
        }
    );
//********************************************
    //информер
    $('.main-quest-vip-top').tooltip();
//********************************************
    //меню сайдбара
    $(".sub > a").click(function() {
        var ul = $(this).next(),
            clone = ul.clone().css({"height":"auto"}).appendTo(".mini-menu"),
            height = ul.css("height") === "0px" ? ul[0].scrollHeight + "px" : "0px";
        clone.remove();
        ul.animate({"height":height});
        return false;
    });
    $('.mini-menu > ul > li > a').click(function(){
        $('.sub a').removeClass('active');
        $(this).addClass('active');
    }),
        $('.sub ul li a').click(function(){
            $('.sub ul li a').removeClass('active');
            $(this).addClass('active');
        });
//********************************************
    //стрелка вверх
    $(".go-up").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.go-up').fadeIn();
            } else {
                $('.go-up').fadeOut();
            }
        });
        $('.go-up a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});//document.ready
