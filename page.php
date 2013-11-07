<?php get_header(); ?>

<?php get_sidebar(); ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section class="inner-content">
			<h1><?php the_title(); ?></h1>
			<div class="breadcrumbs"><span>
				<?php the_breadcrumb(); ?></span></div>
			<h5 class="intro"><?php the_field('page_blurb'); ?></p></h5>
		</section>
	</div>
	</div>
</div>
<div class="content area">
	<div class="divider-shadow"></div>
	<div class="row">
		<section class="copy">
			<?php the_content(); ?>			
		</section>
	</div>
	</div>

		<?php endwhile; else : ?>

		<?php endif; ?>


<?php get_footer(); ?>
