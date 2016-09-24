$(function() {

    $('#rocket').on('click', function() {

        $('#rocket').css({
            animation: 'move 2s ease 0s backwards ,begin 1.3s linear 3s infinite',
        });
        // $('#rocket').animate({
        // 	marginTop: -400
        // }, 1000);
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
    	// $(this).addClass('active').parent().siblings().children().removeClass('active');
        var href = $(this).attr('href'); //其实取到的是链接所对应的div
        $(body).animate({
            scrollTop: $(href).offset().top
        }, 500);
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

    var bIsScreen = false;
        var oldScroll = 0;
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
	    var n =Math.ceil(iScrollTop/iBodyHeight);
	    console.log(n);
	    $('#nav li:eq('+n+')').children().addClass('active').parent().siblings().children().removeClass('active');


        
       //  if (iScrollTop >= ((n-1)*iBodyHeight+100) && oldScroll < iScrollTop && !bIsScreen  ) {
  			  //  $('body').animate({
	      //      		 top: -n*iBodyHeight
	      //   	}, 600);																																					

  			  //   bIsScreen = true;
  			  //   oldScroll = iScrollTop;
       //  } 
        

       //  else if (iScrollTop <= n*iBodyHeight-100  && oldScroll > iScrollTop && !bIsScreen) {
	    	 //   $('body').animate({
	      //      		 top: -(n-1)*iBodyHeight
	      //   	}, 600);
	      //       bIsScreen = true;
	      //       oldScroll = iScrollTop;
	      // }
	      // else if (iScrollTop > (n*iBodyHeight+100) && iScrollTop != n*iBodyHeight-100 && bIsScreen){
	      // 	 bIsScreen = false;
  			  //   console.log("chjxbcjhdbcj");
       //          console(n);



	      // }
	   

    };








    // body...
});
