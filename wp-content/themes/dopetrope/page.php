<!--Header-->
			<?php get_header('nohome'); ?>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<!-- Content -->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
						

							<article class="box post">
								<a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic01.jpg" alt="" /></a>
								<header>
									<h2><?php the_title(); ?></h2>									
								</header>	
								<?php the_content(); ?>						
							</article>
							<!-- post -->
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
							<p>No hay nada para mostrar</p>
						<?php endif; ?> ?>
					</div>
				</div>

				<?php get_footer(); ?>