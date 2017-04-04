<!--Header-->
			<?php get_header('nohome'); ?>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row">	
											<?php query_posts(array(
													"showpost" => "6",
													"cat" => "5"
												)); ?>
												
													<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
													<!-- post -->										
											<div class="4u 12u(mobile)">												
													<section class="box">
													<a href="#" class="image featured">
														<?php 
															if ( has_post_thumbnail() ) {
																	the_post_thumbnail('category-thumb');
																} 			
														 ?>   
													</a>
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<p><?php the_excerpt(); ?></p>
													<footer>
														<a href="<?php the_permalink(); ?>" class="button alt">Find out more</a>
													</footer>
												</section>												
											</div>
											<?php endwhile; ?>
													<!-- post navigation -->
													<?php else: ?>
													<!-- no posts found -->
													<h3>No hay categorias</h3>
													<?php endif; ?>
													<?php wp_reset_query(); ?>
										</div>	
						
					</div>
				</div>

				<?php get_footer(); ?>