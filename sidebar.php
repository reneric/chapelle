
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

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
											if ( $post->post_parent == '21' ) 
											{
  			$children = wp_list_pages("title_li=&child_of=21&depth=1&echo=0");
											}
  											
											else {
  			$children = wp_list_pages("title_li=&child_of=".$post->ID."&depth=1&echo=0");
										   } ?>
  											 
											  <ul>
  											  <?php echo $children; ?>
  											  </ul>
										</nav>
										<p>“Chapelle’s impressive course of studies includes a wide variety of electives and is designed to teach fundamentals, stimulate creativity, and encourage analytical thinking.”</p>
									</aside>

					<?php endif; ?>
				