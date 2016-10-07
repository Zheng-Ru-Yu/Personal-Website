require(['jquery', 'jquery.pagination', 'fixed','sendPl'], function ($) {
    $(function () {
        $('#rocket').on('click', function () {

            $('#rocket').css({
                animation: 'move 2s ease 0s backwards ,begin 1.3s linear 3s infinite',
            });
            $('body').animate({
                scrollTop: $('#about-me').offset().top
            }, 1200);

            var el = $(this),
                newone = el.clone(true);
            el.after(newone);
            $("#" + el.attr("id") + ":first").remove(); //？？？css3重启，为什么只有这种方式好使，在前面插入，和原生都不好使
            // el.before(newone);
            // $("#" + el.attr("id") + ":last").remove();

            // var elem = this;//原生
            // var newone = elem.cloneNode(true);
            // elem.parentNode.replaceChild(newone,elem);

            history.pushState($('#about-me').offset().top, '');
            return false;
        });

        $('#nav a').on("click", function () {
            var href = $(this).attr('href'); //其实取到的是链接所对应的div
            $(body).animate({
                scrollTop: $(href).offset().top
            }, 500);
            history.pushState($(href).offset().top, '');
            return false; //取消矛点的作用

        });

        window.onpopstate = function (e) {
            $('body').animate({
                scrollTop: e.state
            }, 1000);

        };


        var timer;
        move();
        $('.container').on('mouseover', function () {
            clearInterval(timer);
        });
        $('.container').on('mouseout', function () {
            move();
        });
        function move() {
            timer = setInterval(function () {
                $('.container').css({
                    top: $('.container').position().top - 2
                });
                if (-$('.container').position().top >= $('.container').height() / 2) {
                    $('.container').css({
                        top: 0
                    });
                }

            }, 100);
        };


    });
});

