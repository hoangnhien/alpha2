            </section><!-- close .wraper -->
            <span class="right"><!-- TODO: render background right of #main --></span>
            <span class="clear"></span>      
        </div><!-- end #main -->
        
		
        <footer>
        	
            <section class="footer-level1">
            	
            	<section class="wraper">
            		<a href="#" class="go-to-top">LÊN ĐẦU TRANG</a>
	            	<div class="first-content">
	            		<h2>Hỗ trợ khách hàng</h2>
	            		<p>- Liên hệ với Alpha</p>
						<p>- Quy định giao hàng & hoàn trả hàng</p>
						<p>- Hướng dẫn chọn mua máy tính</p>
						<p>- Thuật ngữ máy tính</p>
	            	</div>
	            	<div>
	            		<h2>Kết nối với chúng tôi</h2>
	            		<img src="<?php bloginfo('template_directory')?>/images/online-support.png" alt="online-support" />
	            	</div>
	            	<div class="counter">
	            		<h2>Số lượt truy cập</h2>
	            		<p class="title">- Đang online :	</p><p>15</p>
						<p class="title">- Hôm nay :	</p><p>300</p>
						<p class="title">- Tổng cộng :	</p><p>121234</p>
	            	</div>
            	</section>
            </section>
            <section class="footer-level2">
            	<section class="wraper site-info">
	            	<div>
	            		<img src="<?php bloginfo('template_directory')?>/images/footer-logo.png" />
	            	</div>
	            	<div class="center-content">
	            		<p><span>Công ty Thiết bị công nghệ ALPHA</span></p>
	            		<p>Trụ sở: 190 Nam Kỳ Khởi Nghĩa, P. 8, Q. 3, Tp. HCM</p>
	            		<p>Showroom: 383A Điện Biên Phủ, Q.3, Tp.HCM</p>
	            	</div>
	            	<div class="last-content">
	            		<p>Tel: +84 8 - 3 8765 432</p>
						<p>Fax: +84 8 - 3 8765 433</p>
						<p>E-mail: info@congnghealpha.com</p>
	            	</div>
            	</section>
            	<section class="wraper bottom-nav">
	            	<div>© 2012, congnghealpha.com</div>
	            	<nav>
	            		<ul class="bottom-menu">
	            			<li><a href="#">Trang chủ</a> |</li>
	            			<li><a href="#">Giới thiệu</a> |</li>
	            			<li><a href="#">Chính sách</a> |</li>
	            			<li><a href="#">Tư vấn/ Hỗ trợ</a> |</li>
	            			<li><a href="#">Liên hệ với chúng tôi</a></li>
	            		</ul>
	            	</nav>
	            	
            	</section>
            	
            </section>
        </footer><!-- end footer -->
    </div><!-- end #container -->
    
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="<?php bloginfo('template_directory')?>/js/plugins.js"></script>
  <script src="<?php bloginfo('template_directory')?>/js/script.js"></script>
  
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  
  <!-- script for dynamic menu - HARRY -->
  <script>
  	jQuery(document).ready()
  	
  </script>
  
  
  <!-- script for Thickbox -->
    <script type="text/javascript">
    if ( typeof tb_pathToImage != 'string' )
    {
    var tb_pathToImage = "<?php echo get_bloginfo('url').'/wp-includes/js/thickbox'; ?>/loadingAnimation.gif";
    }
    if ( typeof tb_closeImage != 'string' )
    {
    var tb_closeImage = "<?php echo get_bloginfo('url').'/wp-includes/js/thickbox'; ?>/tb-close.png";
    }
    </script>
  


<!-- HARRY: script for slider -->
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.pikachoose.js"></script>
		<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose({carousel:true, showCaption:false,thumbOpacity:1});
				});
		</script>
  
<?php wp_footer(); ?>
</body>
</html>