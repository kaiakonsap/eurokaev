<?php get_header(); ?>

	<section>
<div class="container">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	   
	<div class="sub_container" <?php if ( is_page() && !$post->post_parent ) :?>
		id="single_subc"
		<?php endif;
		?>
		>
	
			 		
		<div id="single_texts">

				<div class="text">
				
							<?php if(get_field('discount')):?>
							<span class="discount"><span><?php the_field('discount')?>%</span></span>
							<?php endif;?>
				<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
								<?php edit_post_link(); ?>

			</div>
		
	</div>
</div>
<?php if ( is_page() && $post->post_parent ) :?>
<div id="sidebar">
			<?php
$args = array(
    'authors'      => '',
    'child_of'     => $post->post_parent,
    'depth'        => 0,
    'echo'         => 1,
    'exclude'      => '',
    'include'      => '',
    'link_after'   => '</span>',
    'link_before'  => '<span>',
    'post_type'    => 'page',
    'post_status'  => 'publish',
    'show_date'    => '',
    'sort_column'  => 'menu_order, post_title',
    'sort_order'   => '',
    'title_li'     => '', 
    'walker'       => new Walker_Page
);?>
	<ul id="sidebar_margin">
	<?php wp_list_pages($args);?>
	</ul>
</div>
<?php endif	;?>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>
