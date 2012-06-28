<?php get_header(); ?>

	<?php
		
		while(have_posts()) :
			the_post();
			$currentCat = get_the_category();
			if(sizeof($$currentCat) == 0){
				$currentPageId = get_the_ID();
			}
		endwhile;
		if(sizeof($currentCat)>0){
			$currentCatName = $currentCat[0]->cat_name;
			$currentPageSlug = $currentCatName;
		
			$args=array(
			'name' => "$currentPageSlug",
			'post_type' => 'page'
			);
			$my_posts = get_posts($args);
			$currentPageId = $my_posts[0]->ID;

		} else { 
			$currentPage = get_page($currentPageId);
			$currentPageSlug = $currentPage->post_name;
			$currentCatName = $currentPageSlug;
		}
		
		
		wp_reset_query();
	
		
		
		
	?>





<div id="left-contain">
    <div class="category-title">NỔI BẬT</div>
    <div class="separate"></div>
    <div class="clear"></div>
    
    <div class="category-content-highlights">
        <?php
			wp_reset_query;
            query_posts(array('category_name' => 'highlights', 'posts_per_page' => -1,'order' => 'DESC')); 	
            $i = 0;
        ?>
        <?php while(have_posts()) : the_post(); ?>
            
            <a href="<?php the_permalink(); ?>">
				<?php echo get_the_post_thumbnail(get_the_ID()); ?>
				<?php the_title(); ?></a>
			
            
        <?php
            $i++;
            if($i >= 5) break;
        endwhile;
        ?>
		
		       
    </div>
</div>

<div id="right-contain">
	<div class="category-title">Nail Fever / <span>Mẫu thiết kế</span></div>
    <div class="separate"></div>
    <div class="clear"></div>
	<?php
		wp_reset_query();
		$currentPageId;
		$featureImg = get_the_post_thumbnail($currentPageId);
		if($featureImg == "") $featureImg = '<img src="' . get_bloginfo('template_directory') .'/images/default/sub-page-feature.jpg"/>';
	
	?>
	
	<div id="feature-img"><?php echo $featureImg;  ?></div>
    
    <div class="category-content">
		<?php
			wp_reset_query();
			
            //query_posts(array('category_name' => "$currentCatName", 'posts_per_page' => -1,'order' => 'DESC')); 	
            
        ?>
		<?php while(have_posts()) : the_post(); ?>
		<article>
			<header>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<p class="post-time">Posted On: <?php the_time('F j, Y') ?></p>
			</header>
			<section>
				<?php echo get_the_post_thumbnail(get_the_ID()); ?>
				<?php the_content(); ?>
				<div class="clear"></div>
			</section>
		</article>
            
            
        <?php endwhile; ?>
		
		
	</div>
</div>
<div class="clear"></div>


 <?php get_footer(); ?>