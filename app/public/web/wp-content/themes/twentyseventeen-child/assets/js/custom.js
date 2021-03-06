$(function(){
  // ** loading  **//
    var h = $(window).height();
    //$('#loader-bg ,#loader , #loader-line').height(h).css('display','block');
    $('#loader-bg ,#loader , #loader-line').css('display','block');
    $(window).load(function () {
      setTimeout(function(){
        $('#loader-bg').delay(900).fadeOut(800);
        $('#loader').delay(600).fadeOut(300);

      },1000);
      setTimeout(function(){
        $('.entry-title-list').addClass('is-show');
      },2500);

    });
    $('.archive-news').infinitescroll({
      navSelector  : '.navigation',
      nextSelector : '.navigation .next',
      itemSelector : '.item-content',
      loading: {
        // Loading message
        loadingText: ' ',
        // Finish message
        finishedMsg: ' ',
        donetext : ' '
      }

    });


  // ** grid  **//
  var w = $('.grid-item').width();
  $('.grid-item').height(w);
  var big_w = $('.grid-item.circle_big').width();
  $('.grid-item.circle_big').height(big_w);

  var grid = $('.grid');
  	grid.masonry({
      itemSelector: '.grid-item',
      //columnWidth: '.grid-sizer',
      percentPosition: true
    });
    grid.infinitescroll({
  		// Pagination element that will be hidden
  		navSelector: '.navigation',

  		// Next page link
  		nextSelector: '.navigation .next',

  		// Selector of items to retrieve
  		itemSelector: '.grid-item',
      loading: {
  		  // Loading message
  		  loadingText: ' ',
        // Finish message
        finishedMsg: ' ',
        donetext : ' '
      }
  	},
    function(new_elts) {
      var w = $('.grid-item').width();
      $('.grid-item').height(w);
      var big_w = $('.grid-item.circle_big').width();
      $('.grid-item.circle_big').height(big_w);

  		var elts = $(new_elts).css('opacity', 0);

  		elts.animate({opacity: 1});
  		grid.masonry('appended', elts);
  	});

  // ** grid  resize **//

  $(window).resize(function() {
    var w = $('.grid-item').width();
    $('.grid-item').height(w);
    var big_w = $('.grid-item.circle_big').width();
    $('.grid-item.circle_big').height(big_w);

    var grid = $('.grid');
    grid.masonry({
      itemSelector: '.grid-item',
      //columnWidth: '.grid-sizer',
      percentPosition: true
    });

  });
  //var timer = false;
  // ** header **//
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.site-header').addClass("small");
      //if( timer !== false ){
      //  clearTimeout( timer );
      //}
      //timer = setTimeout(function(){
        //$('.site-header').removeClass("dispNone");
      //},800 );
    } else {
      $('.site-header').removeClass("small");
      //$('.site-header').removeClass("dispNone");
    }
  });

  // ** menu **//
  $(".cate-block").hover(
    function () {
      $('.site-cate-list').addClass('open');
      $(this).addClass('open_cate');
    },
    function () {
      $('.site-cate-list').removeClass('open');
      $(this).removeClass('open_cate');
    }
  );
  $(".next-post").hover(
    function () {
      $('.inner-next .inner-ttl').addClass('is-show');
    },
    function () {
      $('.inner-next .inner-ttl').removeClass('is-show');
    }
  );
  $(".cate_child_list").hover(
    function () {
      $(this).addClass('is-show');
    },
    function () {
      $(this).removeClass('is-show');
    }
  );
  $(".header-menu-list").hover(
    function () {
      $(this).addClass('is-show');
    },
    function () {
      $(this).removeClass('is-show');
    }
  );

  //$('.wpcf7-form-control').focus(function() {
  //  $(this).val('');
  //});

$('.wpcf7-form-control').focus(focusEvent).blur(blurEvent);
function focusEvent() {
   $(this).val('');
}
function blurEvent() {
$(this).css('color', '#240a26');
}
});
