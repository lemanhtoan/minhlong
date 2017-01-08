</div>
</div>
<!-- content -->

<!-- footer -->
<div class="border-footer"></div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="<?php echo get_bloginfo( 'url' ); ?>"><img class="logo-footer" src="<?php echo get_template_directory_uri();?>/images/<?php echo get_option('logoFile');?>"/></a>
                <p class="copyright"> ©copyright <?php echo date('Y'); ?> <a href="<?php echo get_bloginfo( 'url' ); ?>"><b class="red"> <?php bloginfo( 'sitename' ); ?></b></a></p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-5">
                <?php
                if(is_active_sidebar('footer-sidebar')){
                    dynamic_sidebar('footer-sidebar');
                }
                ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <h4 class="h4-title">Danh Mục</h4>
                <?php minhlong_menu( 'footer-menu' ); ?>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->
<a href="#" class="scrollup">Scroll</a>
<?php wp_footer(); ?>

<div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  </script>
  <style>#cfacebook{position:fixed;bottom:0px;right:85px;z-index:999999999999999;width:250px;height:auto;border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}
  </style>
  <script>
      jQuery(document).ready(function () {
          jQuery(".chat_fb").click(function() {
            jQuery('.fchat').toggle('slow');
          });
      });
  </script>
  <div id="cfacebook">
      <a href="javascript:;" class="chat_fb" onclick="return:false;"><i class="fa fa-facebook-square"></i> Liên hệ khách hàng</a>
      <div class="fchat">
      <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/baohanhminhlong" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
      </div>
  </div>

</body>
</html>
