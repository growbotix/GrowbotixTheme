<?php get_header(); ?>
<!--404.php-->
		<div class="large-7 columns" id="">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="caps"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<?php get_sidebar(); ?>
<?php 
//this would go here in order ot put the sidebar on the right
//get_sidebar();
get_footer(); 
?>