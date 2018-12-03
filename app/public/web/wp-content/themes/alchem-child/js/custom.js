$(function(){
  //portfolio slick
    $('.slider').slick({
        //prevArrow: '<img src="images/common/portfolio_prev_arrow.png" class="slide-arrow prev-arrow">',
        //nextArrow: '<img src="images/common/portfolio_next_arrow.png" class="slide-arrow next-arrow">',
        infinite: false,
      　arrows: false,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [ //レスポンシブの設定
        {
          breakpoint: 960, //ブレークポイント1の値
          settings: { //480px以下では1画像表示
          slidesToShow: 2,
          slidesToScroll: 2
          }
        }]

   });

   //scroll link 
  var url = $(location).attr('href');
  if (url.indexOf("#") == -1) {
    }else{
    // スムーズスクロールの処理
      var url_sp = url.split("#");
      var hash = '#' + url_sp[url_sp.length - 1];
      var target2 = $(hash);
      var position2 = target2.offset().top;
      $("html, body").animate({scrollTop:position2}, 550, "swing");
    }
});
