import domReady from '@roots/sage/client/dom-ready';
import $ from 'jquery';
import jQueryBridget from 'jquery-bridget';
import masonry from 'masonry-layout';
import slick from 'slick-carousel';

jQueryBridget( 'masonry', masonry, $ );
//jQueryBridget( 'slick', slick, $ );

/**
 * Application entrypoint
 */
domReady(async () => {

  $(function(){
    
    /*MASONRY*/
    $('.grid-type-masonry').masonry({
        columnWidth: '.grid-type-masonry .grid-sizer',
        gutter: '.grid-type-masonry .gutter-sizer',
        itemSelector: '.grid-type-masonry__item',
        percentPosition: true
    });
    
    
    /*HEADER*/
    $(".header__search-open").click(function(){
        $(".header__search").addClass("open");
        $("nav").removeClass("open");
        $(".header__menu-btn").removeClass("open");
        $('input[type="search"]').focus();
    });
    
    $(".header__search-close").click(function(){
        $(".header__search").removeClass("open");
    });
    
    /*MOBILE MENU BTN*/
    $(".header__menu-btn").click(function(){
        $(this).toggleClass("open");
        $("nav").toggleClass("open");
    });
    
    /*MENU MOBILE*/
    $(".with-submenu .primary-nav__first-level").click(function(){
        $(this).toggleClass("open");
    });
    $(".with-submenu .secondary-nav__first-level").click(function(){
        $(this).toggleClass("open");
    });

    /*BLOG SLIDER*/
    /*$('.blog-slider__slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 2,
        appendArrows: ".blog-slider__arrows",
        responsive: [
            {
                breakpoint: 1250,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 1050,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 830,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 690,
                settings: {
                    slidesToShow: 2,
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
    });*/
    
    /*FIXED NAV*/
    var body = $('body');
    
    $(window).scroll(function () {
          
          /*PARA LA NAV*/
          if ($(this).scrollTop() > 50) {
        body.addClass("scroll-on");
      } else {
        body.removeClass("scroll-on");
      }
          
          /*PARA EL BUSCADOR*/
      if ($(this).scrollTop() > 138) {
        body.addClass("site--scrolled");
      } else {
        body.removeClass("site--scrolled");
      }
          
    });
      
      /*FRASE*/
      $(document).ready(function () {
        var color = ["general","cursos","alianzas","columnistas","circulo","blog"];
        var rand = color[Math.floor(Math.random() * color.length)];
        $('.frase').addClass(rand);
      });
      
      /*ANCHOR*/
    $("a.anchorLink").anchorAnimate();
      
      /*ACCORDION*/
      $('.js-accordion-open').on('click',function(e){
      e.stopPropagation();
      let elem = $(this).parent();
      
      elem.hasClass('js-open') ? 
        elem.removeClass('js-open').find('.js-accordion-open').next().slideUp() : 
        elem.addClass('js-open').find('.js-accordion-open').next().slideDown();

      elem.siblings('.js-open').removeClass('js-open').find('.js-accordion-open').next().slideUp();
    });
      
    $('.js-open > .js-accordion-open').next().slideDown();

    $(document).mouseup(e => {
      const container = $('.accordion__item.js-open');
      if( !container.is(e.target) && container.has(e.target).length === 0 )
        container.find('.js-accordion-open').trigger('click');
    });
    
    /** */

    btnShared()

    $('#carga_mas > a').on('click', event_click_btn);

    function event_click_btn(e) {
        e.preventDefault();
        $(this).addClass('loading')
        var paged = $(this).data('paged')
        $.ajax( window.location.href, {
            'dataType': 'html',
            'data': {'paged': paged},
            'context': $(this)
        } )
        .done(function($contenido) {
            $(this).data('paged', paged+1)
            var $content = $(this).parent().parent().find('.grid-type-masonry');

            var $items = $($contenido).find('.grid-type-masonry .grid-type-masonry__item');

            console.log($content)
            for (let index = 0; index < $items.length; index++) {
                console.log(index)
                console.log($items.eq(index))
                $($content).append($items.eq(index))
            }
            $('.grid-type-masonry').masonry('reloadItems');
            $('.grid-type-masonry').masonry({
                columnWidth: '.grid-type-masonry .grid-sizer',
                gutter: '.grid-type-masonry .gutter-sizer',
                itemSelector: '.grid-type-masonry__item',
                percentPosition: true
            });
            btnShared()
        })
        .fail(function() {
            $(this).parent().remove();
        })
        .always(function() {
            $(this).removeClass('loading')
        });
    }


  });

  /*ANCHOR*/
  jQuery.fn.anchorAnimate = function(settings) {

    settings = jQuery.extend({
      speed : 1100
    }, settings);	
    return this.each(function(){
      var caller = this
      $(caller).click(function (event) {	
        event.preventDefault()
        var locationHref = window.location.href
        var elementClick = $(caller).attr("href")
          var destination = $(elementClick).offset().top;
          $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
            window.location.hash = elementClick
          });
          return false;
      })
    })
  }

  function btnShared() {
    $('.btn-shared-facebook').off('click').on('click', function(e) { 
        e.preventDefault(); 
        var g = $(this).attr('href');
        displayShareFacebook(g);
    
    });
    $('.btn-shared-twitter').off('click').on('click', function(e) { 
        e.preventDefault(); 
        var e = $(this).attr('title');
        var g = $(this).attr('href');
        var v = $(this).data('via');
        displayShareTwitter(e, g, v);
    });
  }


  function displayShareTwitter(e, g, v) {
    var a = "https://twitter.com/intent/tweet?text=" + encodeURI(e) + "&url=" + g + "&via=" + v + "&lang=es";
    var c = 575
      , b = 400
      , f = ($(window).width() - c) / 2
      , i = ($(window).height() - b) / 2
      , a = a
      , h = "status=1,width=" + c + ",height=" + b + ",top=" + i + ",left=" + f;
    window.open(a, "twitter", h);
    return false;
  }
  function displayShareFacebook(g) {
      var a = "https://www.facebook.com/sharer/sharer.php?u=" + g;
      var c = 575
        , b = 400
        , f = ($(window).width() - c) / 2
        , i = ($(window).height() - b) / 2
        , a = a
        , h = "status=1,width=" + c + ",height=" + b + ",top=" + i + ",left=" + f;
      window.open(a, "facebook", h);
      return false;
  }

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
