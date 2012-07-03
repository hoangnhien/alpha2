<?php get_header(); ?>

<div id="left-contain">
<?php get_sidebar();?>
</div>

<div id="right-contain">
	<div id="top-banner">
		<img src="<?php bloginfo('template_directory')?>/images/banner.jpg" alt="top banner" />
	</div>
	<div class="hn-category-view">
		<h1>
			<img src="<?php bloginfo('template_directory')?>/images/icons/category-view-title.png" alt="Products" />
			MTXT-LAPTOP
			<a href="hoangnhien.net">&gt;&gt; xem tất cả</a>
		</h1>
		<section class="clearfix">
			<?php 
			// get 3 newest post in MTXT-LAPTOP
	
			 $args = array(
			    'numberposts'     => 3,
			    'category'        => 4,
			    'orderby'         => 'post_date',
			    'order'           => 'DESC',
			    'post_type'       => 'post',
			    );
		 	$myposts = get_posts( $args );
		 	?>
		 	<? $i = 0; ?>
		 	<?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
		 	<?php $i++;?>
			<div class="hn-product-thumb clearfix last-line <?php if($i==3) echo 'last-col'; ?>">
				<a href="<?php the_permalink();?>" class="title"><?php the_title();?></a>
				<?php  		
				$thumb = "";	
				$rows = get_field('images');
				if($rows) {
					foreach($rows as $row) {
						$thumb = $row['image'];
						break;
					}
				}
				?>
				<img src="<?php echo $thumb;?>" alt="Products" />
				<p>
				<?php the_field('short_description');?>
				</p>
				<a href="<?php the_permalink();?>" class="view-more">[chi tiết&hellip;]</a>
			</div>
			<?php endforeach;?>
			
		</section>
	</div>

	<div class="hn-category-view">
		<h1>
			<img src="<?php bloginfo('template_directory')?>/images/icons/category-view-title.png" alt="Products" />
			MÁY TÍNH ĐỂ BÀN
			<a href="hoangnhien.net">&gt;&gt; xem tất cả</a>
		</h1>
		<section class="clearfix">
			<?php 
			// get 3 newest post in MTXT-LAPTOP
	
			 $args = array(
			    'numberposts'     => 3,
			    'category'        => 5,
			    'orderby'         => 'post_date',
			    'order'           => 'DESC',
			    'post_type'       => 'post',
			    );
		 	$myposts = get_posts( $args );
		 	?>
		 	<? $i = 0; ?>
		 	<?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
		 	<?php $i++;?>
			<div class="hn-product-thumb clearfix last-line <?php if($i==3) echo 'last-col'; ?>">
				<a href="<?php the_permalink();?>" class="title"><?php the_title();?></a>
				<?php  		
				$thumb = "";	
				$rows = get_field('images');
				if($rows) {
					foreach($rows as $row) {
						$thumb = $row['image'];
						break;
					}
				}
				?>
				<img src="<?php echo $thumb;?>" alt="Products" />
				<p>
				<?php the_field('short_description');?>
				</p>
				<a href="<?php the_permalink();?>" class="view-more">[chi tiết&hellip;]</a>
			</div>
			<?php endforeach;?>
			
		</section>
	</div>
	
	
	<div class="hn-category-view">
		<h1>
			<img src="<?php bloginfo('template_directory')?>/images/icons/category-view-title.png" alt="Products" />
			MÁY IN
			<a href="<?php get_category_link(9); ?> ">&gt;&gt; xem tất cả</a>
		</h1>
		<section class="clearfix">
			<?php 
			// get 3 newest post in MTXT-LAPTOP
	
			 $args = array(
			    'numberposts'     => 3,
			    'category'        => 9,
			    'orderby'         => 'post_date',
			    'order'           => 'DESC',
			    'post_type'       => 'post',
			    );
		 	$myposts = get_posts( $args );
		 	?>
		 	<? $i = 0; ?>
		 	<?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
		 	<?php $i++;?>
			<div class="hn-product-thumb clearfix last-line <?php if($i==3) echo 'last-col'; ?>">
				<a href="<?php the_permalink();?>" class="title"><?php the_title();?></a>
				<?php  		
				$thumb = "";	
				$rows = get_field('images');
				if($rows) {
					foreach($rows as $row) {
						$thumb = $row['image'];
						break;
					}
				}
				?>
				<img src="<?php echo $thumb;?>" alt="Products" />
				<p>
				<?php the_field('short_description');?>
				</p>
				<a href="<?php the_permalink();?>" class="view-more">[chi tiết&hellip;]</a>
			</div>
			<?php endforeach;?>
			
		</section>
	</div>
	

</div>

<div class="clear"></div>

<?php get_footer(); ?>