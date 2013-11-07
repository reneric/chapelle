<?php
/*
*/
?>
					<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar2' ); ?>

					<?php else : ?>

						<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					
							<div class="content gradient-inner">
								<div class="divider-shadow"></div>
								<div class="row">
									<aside class="sidebar">
										<?php
									 	$sideImg = get_field('side_image');
			
										if($sideImg)
			
										{
										echo '<img src=" ' . $sideImg . '"/>';
										}
			
										else {
											echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/library/img/sidebar-img.jpg" />';
										}
										?>
										<nav>
												  <?php
												    $children = wp_list_pages('title_li=&child_of=1036&echo=0&depth=1');
												    if ($children) { ?>
												    <ul>
												  <?php echo   $children; ?>
											    	
													<?php } ?>

												    </ul>
										</nav>
										<p>“Chapelle’s impressive course of studies includes a wide variety of electives and is designed to teach fundamentals, stimutate creativity, and encourage analytical thinking.”</p>
									</aside>

					<?php endif; ?>
				