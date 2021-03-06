<?php /* Template Name: Index Page Template */ get_header(); ?>

<section id="slider_section">
<div class="container" id="slider_cont">
	   
	<div class="sub_container" id="slider_subcont">
	
<?php
$s_args = array( 'post_type' => 'post', 'posts_per_page' => -1 );
$loop = new WP_Query( $s_args );?>
	    <div id="owl-demo" class="owl-carousel owl-theme">
	     <?php while ( $loop->have_posts() ) : $loop->the_post();
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
			<?php endwhile;
wp_reset_postdata();
			?>
	   </div>
	</div>
			<div id="sidebar">
			<ul>
				<?php
	// will display the subpages of this top level page
$lpages_args = array(
    'authors'      => '',
    'child_of'     => $post->ID,
    'depth'        => 0,
    'echo'         => 1,
    'exclude'      => '',
    'include'      => '',
    'link_after'   => '</span>',
    'link_before'  => '<span>',
    'post_type'    => 'page',
    'post_status'  => 'publish',
    'show_date'    => '',
    'sort_column'  => 'ID, menu_order',
        'sort_order'   => '',
    'title_li'     => '', 
    'walker'       => new Walker_Page
);
 wp_list_pages($lpages_args);
?>

			</ul></div>
</div>
</section>
	<div class="container">
<div id="list_subc" class="sub_container">
		<div id="texts">
			<?php
			$parent=get_the_ID(); 
$c_args = array(
	'post_type'=> 'page',
'numberposts' => -1,
	'post_status' => 'publish',
	'post_parent' => $parent, // any parent
	'orderby' => 'ID',
	'order'   => 'ASC',
);
$posts = new WP_Query($c_args);

			   while ( $posts->have_posts() ) : $posts->the_post();
	 	$id=$post->ID;
	 	 $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'medium', true);
 ?>
				<div class="text">
						
					<a href="<?php echo get_permalink($id); ?>">
						<span class="imgwrap" <?php
							if ( has_post_thumbnail() ) { ?>style="background:url(<?php echo $image_url[0]; ?>) no-repeat center center;"<?php } ?>
>
						</span>
				
						<span class="t_content">
							<span class="t_container">
								<span class="h3">
<?php  the_title();?>
								</span>
								<span class="p">
<?php the_excerpt(); ?> 
								</span>
							</span>
							<span class="readmore"><?php echo pll__("Read more")?></span>
						</span>
						<?php if(get_field('discount')):?>
							<span class="discount"><span><?php the_field('discount')?>%</span></span>
							<?php endif;?>
							
						</a>
				<?php edit_post_link(); ?>		
			</div>
<?php endwhile;
wp_reset_postdata();
?>

	</div>
</div>

</div>
<?php get_footer(); ?>   