$(function () {
    var tabContainers = $('div.tabs > div');
    tabContainers.hide().filter(':first').show();
    $('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide();
        tabContainers.filter(this.hash).show();
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    }).filter(':first').click();
});
$(function () {
    var tabContainers = $('div.tabs2 > div');
    tabContainers.hide().filter(':first').show();
    $('div.tabs2 ul.tabNavigation a').click(function () {
        tabContainers.hide();
        tabContainers.filter(this.hash).show();
        $('div.tabs2 ul.tabNavigation a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    }).filter(':first').click();
});

$(function(){
	$('.site-menu .close').click(function() {
		$('.site-menu').removeClass('opened')
	});
	$('.top-menu ul li a.catalog-link').click(function() {
		$('.site-menu').addClass('opened');
	});
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
	$('.catalog-page .list .filter-button').click(function() {
		$('.catalog-page .filter').toggleClass('opened');
	});
	$('.catalog-page .filter .item .name').click(function() {
		$(this).toggleClass('active');
		$(this).next('.select').slideToggle();
	});
	$('.header .search-link').click(function() {
		$('.top-page-search').toggleClass('opened');
	});
	$('.menubg, .top-menu .close').click(function() {
		$('.menubg').fadeOut();
		$('.top-menu').removeClass('opened');
	});
	$('.header .menu-button').click(function() {
		$('.menubg').fadeIn();
		$('.top-menu').addClass('opened');
	});
	$('.footer .totop, .header .adress a').bind("click", function(e){
	  var anchor = $(this);
	  $('html, body').stop().animate({
		 scrollTop: $(anchor.attr('href')).offset().top
	  }, 1000);
	  e.preventDefault();
	});
	$('.bottom-page-map .item').click(function() {
		$(this).find('.info').fadeIn();
	});
	$('.item-page .categories').slick({
		arrows: false,
		variableWidth: true
	});
	$('.index-page-slider').slick({
		dots: true
	});
	$('.index-news .list').slick({
	  arrows: false,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1000,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 575,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	$('.index-about .list').slick({
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1000,
	      settings: {
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 800,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 575,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	$('.index-catalog .list').slick({
	  speed: 300,
	  arrows: false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 700,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 390,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	$('.index-about .list2').slick({
	  speed: 300,
	  arrows: false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1000,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 575,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	$('.index-categories .list').slick({
	  speed: 300,
	  arrows: false,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1644,
	      settings: {
	        slidesToShow: 4
	      }
	    },
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 700,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 390,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	$('.index-advantages .list').slick({
	  speed: 300,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 390,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	$('.item-page .more-items .list').slick({
	  speed: 300,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1650,
	      settings: {
	        slidesToShow: 4
	      }
	    },
	    {
	      breakpoint: 1000,
	      settings: {
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 390,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	$('.slider-for').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  focusOnSelect: true,
	  responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 4
	      }
	    },
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 576,
	      settings: {
	        arrows: true,
	        slidesToShow: 3
	      }
	    }
	  ]
	});
});