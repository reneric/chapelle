<?php
/*
Template Name: Custom Page - Athletics
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section class="inner-content">
			<h1><?php the_title(); ?></h1>
			<div class="breadcrumbs"><span>
				<?php the_breadcrumb(); ?></span></div>
			<h5 class="intro"><?php the_field('page_blurb'); ?></p></h5>
		</section>
		
	<?php endwhile; else : ?>

	<?php endif; ?>
	
	</div>
	</div>
</div>
<div class="content area">
	<div class="divider-shadow"></div>
	<div class="row">
		<section class="athletics">
				
			<?php
					
			   $mypages = get_pages( array( 'child_of' => $post->ID ) );
			   $athletic = get_page_by_title('Athletics');
			   
			     foreach( $mypages as $page ) {
				
				$athletics = $page->ID;
			 	
				$content = $page->post_content;
			 $content = apply_filters( 'the_content', $content );

			 ?>

			<div class="large-3 columns cat-blue">
				<div class="panel">
					<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
					
					<?php
				 	$sideImg = get_field('bucket_image', $athletics );

					if($sideImg)

					{
					echo '<a href="' . get_page_link( $page->ID ) . '"><img src=" ' . $sideImg . '"/></a>';
					}

					else {
						echo '<a href="' . get_page_link( $page->ID ) . '"><img src="' . get_bloginfo( 'stylesheet_directory' ) . '/library/img/default.png" /></a>';
					}
					?>
					
					<h5><?php the_field('bucket_text', $athletics); ?></h5>
					<img class="shadow-news" src="<?php echo get_template_directory_uri(); ?>/library/img/shadow-news.png" alt="">
				</div>
			</div>
			    <?php } ?>
							
		</section>
	</div>
	</div>
</div>


<?php get_footer(); ?>
