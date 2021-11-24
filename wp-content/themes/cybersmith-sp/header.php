<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" >
  <?php wp_head(); ?>
 </head>
 <body>
  <header>
   <?php include('php-child/VD_SP_header.php'); ?>
   <?php include('php-child/VD_SP_humberger.php'); ?>
   <script>
    // jQueryを使わない方法
    (function() {
     // スクロールを禁止する関数
     function noScroll(event) {
      event.preventDefault();
     }

     document.getElementById('humberger_open').addEventListener('click', function(){
      document.getElementById('humberger').style.display = 'block';
      // スクロール禁止(SP)
      document.addEventListener('touchmove', noScroll, { passive: false });
      // スクロール禁止(PC)
      document.addEventListener('mousewheel', noScroll, { passive: false });
     });

     document.getElementById('humberger_close').addEventListener('click', function(){
      document.getElementById('humberger').style.display = 'none';
      // スクロール禁止を解除(SP)
      document.removeEventListener('touchmove', noScroll, { passive: false });
      // スクロール禁止を解除(PC)
      document.removeEventListener('mousewheel', noScroll, { passive: false });
     });
    })();
   </script>
  </header>