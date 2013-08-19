	<?php get_header(); ?>

	<div class="maincontainer">
		<div class="container">
			<div class="row">

                <?php if (have_posts()) :
                    	while (have_posts()) :
                        	the_post(); ?>
							<div class="span12">

				                <div class="post">
				                    <div class="post-header">
				                        <h2>
				                            <?php the_title(); ?>
				                        </h2>
				                        <div class="post-meta">
				                            <?php echo get_the_date(); ?> 【<?php the_category(', '); ?>】
				                        </div>
				                    </div>
				                    <div class="post-content">
				                        <?php the_content(); ?>
				                    </div>
				                </div><!-- /post -->
											
								<ul class="pager">
								  <li class="previous">
								    <?php previous_post_link(); ?>
								  </li>
								  <li class="next">
								    <?php next_post_link(); ?>
								  </li>
								</ul>
							</div>
					<?php endwhile;?>
				<?php else : ?>
					<h2>Not Found</h2>
				<?php endif; ?>
			
			</div>

			<? endwhile;?>   
		</div>
	</div>

	<?php get_footer(); ?>
