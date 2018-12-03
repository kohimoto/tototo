$(function(){
  $('.site-main').infinitescroll({
    navSelector  : ".navigation",     // ナビゲーション要素を指定
    nextSelector : ".navigation .next",　// ナビゲーションの「次へ」の要素を指定
    itemSelector : ".post.type-post",   // 表示させる要素を指定
    loading: {
           finished: "",
           finishedMsg: "", //コンテンツ表示終了メッセージ
           msg: "",
           msgText: "", //ローディング中表示テキスト
           img: "/web/wp-content/themes/twentyseventeen-child/assets/images/empty.gif", //ローディング中画像パス指定
           speed: "slow",
       },
  });
});
