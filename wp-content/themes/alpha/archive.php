<?php
/**
 * Description of products.php
 * 
 * @author HoangNhien
 * Jun 29, 2012
 */
?>
<?php
/*
Template Name: Products Template
*/
?>
<?php get_header(); ?>

<div id="left-contain">
	<?php get_sidebar(); ?>
</div>

<div id="right-contain">
	<div id="top-banner">
		<img src="<?php bloginfo('template_directory')?>/images/banner.jpg" alt="top banner" />
	</div>
	<div class="hn-category-view">
		<div class="hn-category-title-block">
			<div class="hn-category-title">
				<img src="<?php bloginfo('template_directory')?>/images/icons/category-view-title.png" alt="Products" />
				MTTX-LAPTOP
				<a href="hoangnhien.net">&gt;&gt; xem tất cả</a>
			</div>
			<div class="hn-category-filter">
				<nav class="pagination">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</nav>
			</div>
			
		</div>
		<section class="clearfix">
			<?php 
			$catId = get_query_var('cat');
			$total = _get_category_count($catId);
			$iFirstLastLine = $total - (int)($total / 3);
					
			?>
			<?php $i = 0; ?>
			<?php if(have_posts()): while(have_posts()): the_post();?>
			<?php 
				$sPositionClass = "";
				if(($i % 3) == 2) $sPositionClass = " last-col";
				if($i >= $iFirstLastLine) $sPositionClass = $sPositionClass . " last-line";
				$i++;
			?>	
				<div class="hn-product-thumb clearfix <?php echo $sPositionClass; ?> ">
				<a href="<?php the_permalink();?>" class="title"><?php the_title();?></a>
				
				<?php  		
				$thumb = "";	
				if(get_field('images'))
				{
					while(the_repeater_field('images'))
					{
						$thumb = get_sub_field('image');
						break;
					}
				}
					
				?>
	 			<img src="<?php echo $thumb?>" alt="product-thumb" width="90" height="90" />
				<p>
				<?php the_field('short_description');?>
				</p>
				<a href="hoangnhien.net" class="view-more">[chi tiết&hellip;]</a>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</section>
		<div class="hn-category-footer">
			<nav class="pagination">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</nav>
		</div>
	</div>
	

</div>

<div class="clear"></div>

<?php get_footer(); ?>