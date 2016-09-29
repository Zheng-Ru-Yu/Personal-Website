$(function() {
    var bIsScreen = false;
    var oldScrollTop = 0;
    var a = 0;

    $('#rocket').on('click', function() {

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

    $('#nav a').on("click", function() {
        bIsScreen = true;
        var href = $(this).attr('href'); //其实取到的是链接所对应的div
        $(body).animate({
            scrollTop: $(href).offset().top
        }, 500, function() { console.log(1) });
        oldScrollTop = a;
        history.pushState($(href).offset().top, '');
        return false; //取消矛点的作用

    });

    window.onpopstate = function(e) {
        $('body').animate({
            scrollTop: e.state
        }, 1200);

    };


    var bIsFixed = false;
    var oNav = $('#nav');
    var iNavTop = oNav.offset().top;
    window.onscroll = function() {
        var iScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (iScrollTop >= iNavTop && !bIsFixed) {
            oNav.addClass('fix');
            bIsFixed = true;
        } else if (iScrollTop < iNavTop && bIsFixed) {
            oNav.removeClass('fix');
            bIsFixed = false;
        }

        var iBodyHeight = $('body').height();
        var rn = Math.ceil((iScrollTop - 300) / iBodyHeight);
        var n = Math.ceil(iScrollTop / iBodyHeight);
        $('#nav li:eq(' + rn + ')').children().addClass('active').parent().siblings().children().removeClass('active');



        // if (iScrollTop >= ((n - 1) * iBodyHeight + 100) && oldScroll < iScrollTop && !bIsScreen) {
        //     $('#nav li:eq(' + n + ')').children().click();
        //     oldScrollTop = n * iBodyHeight;
        //     console.log(oldScrollTop);
        //     } else if (iScrollTop <= n * iBodyHeight - 100 && oldScroll > iScrollTop && !bIsScreen) {
        //         $('#nav li:eq(' + (n - 1) + ')').children().click();
        //         oldScrollTop = (n - 1) * iBodyHeight;
        //         console.log(oldScrollTop);

        //     } else if (iScrollTop > (n * iBodyHeight + 100) && iScrollTop != n * iBodyHeight - 100 && bIsScreen) {
        //         bIsScreen = false;

        // }


        // if (iScrollTop != oldScrollTop && !bIsScreen) {
        //     a = n * iBodyHeight;
        //     $('#nav li:eq(' + n + ')').children().click();
        //     console.log(oldScrollTop);

        //     } else if (iScrollTop == oldScrollTop && bIsScreen) {
        //         bIsScreen = false;

        //     } else if (oldScrollTop - iScrollTop >= -50 && iScrollTop - oldScrollTop > 0 && !bIsScreen) {
        //         $('#nav li:eq(' + (n - 1) + ')').children().click();
        //         oldScrollTop = n * iBodyHeight;
        //         console.log(oldScrollTop);

        //     } else if (oldScrollTop - iScrollTop > 10 && iScrollTop - oldScrollTop > 10 && bIsScreen) {
        //         bIsScreen = false;

        // }

    };
    var timer;
        timer = setInterval(function(){
           $('.container').css({
            top:$('.container').position().top-2
           });
                if ( -$('.container').position().top >=  $('.container').height()/2 )  {
                   $('.container').css({
                        top:0
                       });
                }
                console.log( $('.container').height() );
        },100);
    $('.container').on('mouseover',function(){
        clearInterval(timer);
    });
    $('.container').on('mouseout',function(){
        timer = setInterval(function(){
           $('.container').css({
            top:$('.container').position().top-2
           });
                if ( -$('.container').position().top >=  $('.container').height()/2 )  {
                   $('.container').css({
                        top:0
                       });
                }
                console.log( $('.container').height() );
        },100);
    });

    









});
