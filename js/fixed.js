define(['jquery'],function ($) {

    $(function () {
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
            // var n = Math.ceil(iScrollTop / iBodyHeight);
            $('#nav li:eq(' + rn + ')').children().addClass('active').parent().siblings().children().removeClass('active');


        };
    });

});

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
