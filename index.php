<?php get_header(); ?>

<?php get_sidebar(); ?>
		
		<section class="inner-content">
			<h1>News archive</h1>
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
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>
				
		<section>

		<?php endwhile; ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
