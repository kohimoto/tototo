$(function(){
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

  		// Loading message
  		loadingText: 'Loading new items…'
  	},
    function(new_elts) {
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
  var timer = false;

  // ** header **//

  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.site-header').addClass("dispNone");
      if( timer !== false ){
        clearTimeout( timer );
      }
      timer = setTimeout(function(){
        $('.site-header').removeClass("dispNone");
      },2000 );
    } else {
      $('.site-header').removeClass("dispNone");
    }
  });

  // ** menu **//
  $(".cate-block").hover(
    function () {
      $('.site-cate-list').addClass('open');
    },
    function () {
      $('.site-cate-list').removeClass('open');
    }
  );

});
