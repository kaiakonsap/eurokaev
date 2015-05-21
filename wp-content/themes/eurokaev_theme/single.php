<?php get_header(); ?>
<!-- section -->
<section id="slider_section">
<div class="container" id="slider_cont">
	   
	<div class="sub_container" id="slider_subcont">
	
	    <div id="owl-demo" class="owl-carousel owl-theme">

	<?php if (have_posts()): while (have_posts()) : the_post();
$imgid = get_post_thumbnail_id();
$imageurl = wp_get_attachment_image_src($imgid,'large', true);
 ?>
			    <div class="item">
			    	 <div class="image" <?php
							if ( has_post_thumbnail() ) { ?>style="background:url(<?php echo $imageurl[0]; ?>) no-repeat center center;"<?php } ?>
>
			    	 	
			    	    <span class="alt_text">
						<?php
						 remove_filter ('the_content',  'wpautop');
  						echo '<span>';
  						 the_content();
  						 echo '</span>';
						?>
						<?php edit_post_link(); ?>
			    	    </span>
			    	 </div>
			    </div>
			<?php endwhile;endif;?>
		
	
	</div>	
	</div>
</div>
	</section>
	<!-- /section -->


<?php get_footer(); ?>
