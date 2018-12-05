$(function(){
  //$('#primary').infinitescroll({
  //  navSelector  : ".navigation",     // ナビゲーション要素を指定
  //  nextSelector : ".navigation .next",　// ナビゲーションの「次へ」の要素を指定
  //  itemSelector : ".post-thumbnail",   // 表示させる要素を指定
  //  loading: {
  //         finished: "",
  //         finishedMsg: "", //コンテンツ表示終了メッセージ
  //         msg: "",
  //         msgText: "", //ローディング中表示テキスト
  //         img: "/web/wp-content/themes/twentyseventeen-child/assets/images/empty.gif", //ローディング中画像パス指定
  //         speed: "slow",
  //     },
  //});
  var w = $('.grid-item').width();
  $('.grid-item').height(w);

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
});
