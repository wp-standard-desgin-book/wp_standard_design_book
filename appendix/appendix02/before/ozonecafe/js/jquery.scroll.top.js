;(function($) {
  "use strict";

  $.fn.st = function(options) {

    // デフォルトの設定
    var defaults = {
      anchorID        : 'scroll-top',
      anchorTarget    : 'body',
      anchorText      : 'ページ上部へ',
      scrollTime        : 500,
      scrollAnimation : true,
      hiddenTime      : 300,
      customCSS       : false,
      css: {
        'background'    : '#000',
        'color'         : '#FFF',
        'position'      : 'fixed',
        'bottom'        : '10px',
        'right'         : '10px',
        'textDecoration': 'none',
        'padding'       : '10px',
        'display'       : 'none'
      }
    };

    var setting = $.extend(defaults, options);

    // アンカーリンクを追加
    $(setting.anchorTarget).append('<a id="' + setting.anchorID + '" href="#">'+ setting.anchorText +'</a>');

    var anchor = $('#' + setting.anchorID);

    // CSSの設定
    if( ! setting.customCSS ){
      anchor.css(setting.css);
    }

    // クリック時のアニメーション
    anchor.on('click', function(e) {
      e.preventDefault();
      $('body,html').animate({
        scrollTop: 0
      }, setting.scrollTime);
      return false;
    });

      // スクロール時のアニメーション
    if ( setting.scrollAnimation ){
      $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
          anchor.slideDown(setting.hiddenTime);
        } else {
          anchor.slideUp(setting.hiddenTime);
        }
      });
    }

  }

  // ドキュメントが読み込まれた時点で読み込み
  $(function() {
    $.fn.st();
  });

})(jQuery);
