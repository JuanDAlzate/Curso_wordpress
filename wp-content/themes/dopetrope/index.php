
			<!--Header-->
			<?php get_header(); ?>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row">
							<div class="12u">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>My Portfolio</h2>
										</header>
										<div class="row">	
											<?php query_posts(array(
													"showpost" => "1",
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
									</section>

							</div>
						</div>
						<div class="row">
							<div class="12u">
								<!-- Blog -->
									<section>
										<header class="major">
											<h2>The Blog</h2>
										</header>
										<div class="row">
										 <?php query_posts(array(
											"showpost" => "2",
											"cat" => "6"
											)); ?>
										 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
											<div class="6u 12u(mobile)">
												<section class="box">
													<a href="#" class="image featured">
														<?php 
															if ( has_post_thumbnail() ) {
																	the_post_thumbnail('category-blog');
																} 			
														 ?>  
													</a>
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<p><?php the_excerpt(); ?></p>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink(); ?>" class="button icon fa-file-text">Continue Reading</a></li>
															<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
														</ul>
													</footer>
												</section>
											</div>	
											<?php endwhile; ?>
											<!-- post navigation -->
											<?php else: ?>
											<!-- no posts found -->
											<h3>No hay categorias</h3>
											<?php endif; ?>										
											</div>
										
									</section>

							</div>
						</div>
					</div>
				</div>

			<!--Footer-->
			<?php get_footer(); ?>