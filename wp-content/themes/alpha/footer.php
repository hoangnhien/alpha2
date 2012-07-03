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
    
    <!-- @author: HOANGNHIEN -->
    <!-- script for product info tab -->
    <script>
    	$(document).ready(function(){
			$(".hn-product-intro-button").click(function(){
				$(".hn-tab").removeClass('active');
				$(".hn-product-intro-button").addClass('active');
				$(".hn-tab-content").hide();
				$(".hn-product-intro").show();
			});

	    	$(".hn-product-info-button").click(function(){
				$(".hn-tab").removeClass('active');
				$(".hn-product-info-button").addClass('active');
				$(".hn-tab-content").hide();
				$(".hn-product-info").show();
			});
    	});
    </script>
    <!-- @author: HOANGNHIEN -->
    <!-- script for category widget -->
    <script>
    	$(document).ready(function(){
			$('li.cat-item-19').hide();
			$('li.cat-item').each(function(index, element) {
				var sub = $(element).find('ul.children');
				if(sub.size() > 0) {
					$(element).find('>a').attr('href', 'javascript:void(0)');
				}
			});
			
			$('li.cat-item ul.children').hide();
			$('li.cat-item').click(function(){
				$('li.cat-item').removeClass('active');
				$(this).addClass('active');
				$('li.cat-item ul.children').hide();
				$('ul.children', this).show();
			});
        });
    </script>
    
    
    
<?php wp_footer(); ?>
</body>
</html>