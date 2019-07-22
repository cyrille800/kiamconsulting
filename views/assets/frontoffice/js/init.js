(function($) {
  
    "use strict";
    
    function animationEndEventName() {
  		var i,
  			el = document.createElement('div'),
  			animations = {
  				'animation': 'animationend',
  				'oAnimation': 'oAnimationEnd',
  				'MSAnimation': 'MSAnimationEnd',
  				'mozAnimation': 'mozAnimationEnd',
  				'WebkitAnimation': 'webkitAnimationEnd'
  			};
  		for (i in animations) {
  			if (animations.hasOwnProperty(i) && el.style[i] !== undefined) {
  				return animations[i];
  			}
  		}
  	}
  	
   
    
    
    

    
    
  $(".uv-accordinaton-list").on( "click", function() {
    $(this).next().slideToggle(200);
    $(this).find(">:first-child");
    if($(this).find(">:first-child").text() == "+") {
      $(this).find(">:first-child").text("-");
      $(this).find("h2").addClass("hilighted");
    } else {
      $(this).find(">:first-child").text("+");
      $(this).find("h2").removeClass("hilighted");
    }
  });
    
    
    
  /*
  |=====================
  | NAV FIXED ON SCROLL
  |=====================
  */
      
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 55) {
            $(".nav-scroll").addClass("strict");
        } else {
            $(".nav-scroll").removeClass("strict");
        }
    });
    
    /*
    |====================
    | Mobile NAv trigger
    |====================
    */
  
        var trigger = $('.navbar-toggle'),
        overlay     = $('.overlay'),
        active      = false;
      
        $('.navbar-toggle, #navbar-nav li a, .overlay').on('click', function () {
            $('.navbar-toggle').toggleClass('active')
            $('#js-navbar-menu').toggleClass('active');
            overlay.toggleClass('active');
        });  
      
        $('#mobile-menu-active').meanmenu();
          var win = $(window);
          var headerArea = $('.menu-spacing ');
          var header3 = $('.menu-spacing ');
          var stick = 'stick';
          var stick2 = 'stick2';
      
            win.on('scroll',function() {    
             var scroll = win.scrollTop();
             if (scroll < 245) {
              headerArea.removeClass(stick);
             }else{
              headerArea.addClass(stick);
             }
            });
            win.on('scroll',function() {    
             var scroll = win.scrollTop();
             if (scroll < 100) {
              header3.removeClass(stick2);
             }else{
              header3.addClass(stick2);
             }
        });
        
    $( document ).ready(function() {
      $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      })
   
    /*
    |===========
    | FANCYBOX
    |===========
    */
    
    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    
    
    $("[data-fancybox]").fancybox({});
        
        
      
    $('.select-beast').selectize({
      create: false,
      sortField: [{field: 'Descripcion', direction: 'desc'}, {field: '$score'}],
      dropdownParent: 'body'
    });
    
    
    
    
/*
|=========================
| searchbar
|=========================
*/ 
    
    $('#besocial-header-right').on('click',function(){
      $('#besocial-search-bar').toggleClass("show-search-bar");
      $('#besocial-header-right').toggleClass("scroll-search-icon");
    });

    
    

/*
|================
| ANIMATION
|================
*/

    var wow = new WOW({
        mobile: false  // trigger animations on mobile devices (default is true)
    });
    wow.init();
      
/*
|===================
| EVENT SLIDE 
|===================
*/
      
    
    
    
    
    


    /*
    |=====================
    | SMOTHSCROLL
    |=====================
    */
      
    


  
  	  function formError(){   
  	    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
  	        $(this).removeClass();
  	    });
  	  }
      function submitMSG(valid, msg){
        if(valid){
          var msgClasses = "h3 text-center fadeInUp animated text-success";
        } else {
          var msgClasses = "h3 text-center shake animated text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
      }
  });
  
 
      
      
     
      
      
      


}(jQuery));