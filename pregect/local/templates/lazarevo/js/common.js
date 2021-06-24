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
    var tabContainers = $('div.site-menu__tabs > div');
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
    $(".basket-item-price-old-text").parent().parent().addClass("have_old");
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

$(function(){
  $(".add-favorite").click(function() {
    var btn = this;
    if (!$(btn).hasClass("active")) {
      $.ajax({
        type: "POST",
        url: "/local/templates/lazarevo/ajax-favorite.php",
        data: {
          id_favorite: $(btn).attr("data-id"),
          method: "add",
        },
        success: function(out) {
          if (out == "success") {
            $(btn).addClass("active");
            $("a.favorites-header span").text(Number($("a.favorites-header span").text()) + 1);
          } else {
            var data = JSON.parse(out);
            if (data.set !== "undefined") {
              document.cookie = "UF_FAVORITES=" + JSON.stringify(data.set) + "; path=/; max-age=" + 60 * 60 * 24 * 365 + ";";
              $(btn).addClass("active");
              $("a.favorites-header span").text(Number($("a.favorites-header span").text()) + 1);
            } else {
              console.log(out);
            }
          }
        },
        error: function(errors) {
          console.log(errors);
        },
      });
    } else {
      $.ajax({
        type: "POST",
        url: "/local/templates/lazarevo/ajax-favorite.php",
        data: {
          id_favorite: $(btn).attr("data-id"),
          method: "remove",
        },
        success: function(out) {
          if (out == "success") {
            $(btn).removeClass("active");
            $("a.favorites-header span").text(Number($("a.favorites-header span").text()) - 1);
          } else {
            var data = JSON.parse(out);
            if (data.set !== "undefined") {
              document.cookie = "UF_FAVORITES=" + JSON.stringify(data.set) + "; path=/; max-age=" + 60 * 60 * 24 * 365 + ";";
              $(btn).removeClass("active");
              $("a.favorites-header span").text(Number($("a.favorites-header span").text()) - 1);
            } else {
              console.log(out);
            }
          }
        },
        error: function(errors) {
          console.log(errors);
        },
      });
    }
  });
  $(".tocart").click(function() {
    var btn = this;
    var quan = 1;
    if(typeof $(btn).siblings('.number') != "undefined"){
      quan = $(btn).siblings('.number').children('input').val();
    }
    if(typeof quan == "undefined"){
      quan = 1;
    }
    if (!$(btn).hasClass("active")) {
      $.ajax({
        type: "POST",
        url: "/local/templates/lazarevo/ajax-basket.php",
        data: {
          product_id: $(btn).attr("data-id"),
          quantity: quan,
        },
        success: function(out) {
          $(btn).addClass("active");
          $(btn).attr("href", "/personal/basket/");
          $("a.cart-header span").text(Number($("a.cart-header span").text()) + 1);
        },
      });
    }
  });
  $('#PROPERTY_INPUT_INN').blur(function(){
    var inn = '';
    var kpp = '';
    if($("#PROPERTY_INPUT_INN").val() != "") inn = $('#PROPERTY_INPUT_INN').val();
    if($("#PROPERTY_INPUT_KPP").val() != "") kpp = $('#PROPERTY_INPUT_KPP').val();
    if(inn != ''){
      var options = {
        method: "POST",
        mode: "cors",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token 4e45598e0f2f33aa8d2f19bf72012d74b184a70d"
        },
        body: JSON.stringify({query: inn, kpp: kpp})
      }

      fetch("https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/party", options)
      .then(response => response.text())
      .then(result => {
        var res = JSON.parse(result);
        data = res["suggestions"][0]['data'];
        if($("#PROPERTY_INPUT_NAME").val() == '' && data.name !== null) $("#PROPERTY_INPUT_NAME").val(data.name.full_with_opf);
        if($("#PROPERTY_INPUT_KPP").val() == '' && data.kpp !== null) $("#PROPERTY_INPUT_KPP").val(data.kpp);
        if($("#PROPERTY_INPUT_OGRN").val() == '' && data.ogrn !== null) $("#PROPERTY_INPUT_OGRN").val(data.ogrn);
        if($("#PROPERTY_INPUT_EMAIL").val() == '' && data.emails !== null) $("#PROPERTY_INPUT_EMAIL").val(data.emails.value);
        if($("#PROPERTY_INPUT_PHONE").val() == '' && data.phones !== null) $("#PROPERTY_INPUT_PHONE").val(data.phones.value);
        if($("#PROPERTY_INPUT_ADDRESS").val() == '' && data.address !== null) $("#PROPERTY_INPUT_ADDRESS").val(data.address.value);
        if($("#PROPERTY_INPUT_UR_ADDRESS").val() == '' && data.address !== null) $("#PROPERTY_INPUT_UR_ADDRESS").val(data.address.value);
      })
      .catch(error => console.log("error", error));
    }
  });
  $('#PROPERTY_INPUT_KPP').blur(function(){
    var inn = '';
    var kpp = '';
    if($("#PROPERTY_INPUT_INN").val() != "") inn = $('#PROPERTY_INPUT_INN').val();
    if($("#PROPERTY_INPUT_KPP").val() != "") kpp = $('#PROPERTY_INPUT_KPP').val();
    if(inn != ''){
      var options = {
        method: "POST",
        mode: "cors",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token 4e45598e0f2f33aa8d2f19bf72012d74b184a70d"
        },
        body: JSON.stringify({query: inn, kpp: kpp})
      }

      fetch("https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/party", options)
      .then(response => response.text())
      .then(result => {
        var res = JSON.parse(result);
        data = res["suggestions"][0]['data'];
        if($("#PROPERTY_INPUT_NAME").val() == '' && data.name !== null) $("#PROPERTY_INPUT_NAME").val(data.name.full_with_opf);
        if($("#PROPERTY_INPUT_KPP").val() == '' && data.kpp !== null) $("#PROPERTY_INPUT_KPP").val(data.kpp);
        if($("#PROPERTY_INPUT_OGRN").val() == '' && data.ogrn !== null) $("#PROPERTY_INPUT_OGRN").val(data.ogrn);
        if($("#PROPERTY_INPUT_EMAIL").val() == '' && data.emails !== null) $("#PROPERTY_INPUT_EMAIL").val(data.emails.value);
        if($("#PROPERTY_INPUT_PHONE").val() == '' && data.phones !== null) $("#PROPERTY_INPUT_PHONE").val(data.phones.value);
        if($("#PROPERTY_INPUT_ADDRESS").val() == '' && data.address !== null) $("#PROPERTY_INPUT_ADDRESS").val(data.address.value);
        if($("#PROPERTY_INPUT_UR_ADDRESS").val() == '' && data.address !== null) $("#PROPERTY_INPUT_UR_ADDRESS").val(data.address.value);
      })
      .catch(error => console.log("error", error));
    }
  });
});
