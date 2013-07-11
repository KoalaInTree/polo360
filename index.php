	<?php get_header(); ?>
	<div class="slider">
		<div class="container">
			<img src="<?php bloginfo('template_url'); ?>/img/banner.png" alt="">
			<h3 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
			<hr class="divider" />
		</div>
	</div>

	<div class="maincontainer">
		<div class="container">
			<div class="row">

				<?php if (have_posts()) : ?>
					<?php $the_query = new WP_Query( 'showposts=3' ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
							<div class="span4">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) : ?>
	                	        		<?php the_post_thumbnail(array(285, 178), array('class' => 'img-polaroid')); ?>
	                	        	<?php else: ?>							
										<img src="<?php bloginfo('template_url') ?>/img/p1.png" alt="" class="img-polaroid">
									<?php endif; ?>
								</a>
								<h5>
									<a href="<?php the_permalink() ?>">
										<?php the_title(); ?>
									</a>
								</h5>
							
								<p>
									<?php the_excerpt(__('(more…)')); ?>
								</p>
								<a href="<?php the_permalink() ?>">
									<div class="learn"></div>
								</a>
							</div>
					<?php endwhile;?>
				<?php else : ?>
					<h2>Not Found</h2>
				<?php endif; ?>
			
			</div>
			<hr class="divider" />
			<div class="row">
				<div class="span4">
					<h5>Social Connection</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

							<ul class="social">
								<li>
									<a href="">
										<div class="facebook"></div>
									</a>
								</li>
								<li>
									<a href="">
										<div class="twitter"></div>
									</a>				
								</li>
								<li>
									<a href="">
										<div class="facebook"></div>
									</a>
								</li>
								<li>
									<a href="">
										<div class="twitter"></div>
									</a>				
								</li>
								<li>
									<a href="">
										<div class="twitter"></div>
									</a>				
								</li>			
							</ul>

					<h5>News Letter</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<input class="input-xlarge" type="text" placeholder="Your Email Address">
					<a href=""><div class="subsclibe"></div></a>
				</div>
				<div class="span4">
					<h5>Contact</h5>
					<input class="input-xlarge" type="text" placeholder="Your Name">
					<input class="input-xlarge" type="text" placeholder="Your Email Address">
					<textarea rows="6" class="input-xlarge"></textarea>
					<a href=""><div class="subsclibe"></div></a>
				</div>
				<div class="span4">
					<h5>News Update</h5>
					<ul class="unstyled">
					    <?php $the_query = new WP_Query( 'showposts=3' ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					    <li class="dash">
				      		<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) : ?>
                	        		<?php the_post_thumbnail(array(46, 46), array('class' => 'img-polaroid')); ?>
                	        	<?php else: ?>							
									<img src="<?php bloginfo('template_url') ?>/img/parts1.png" alt="" class="img-polaroid">
								<?php endif; ?>
							</a>
					      	<strong><?php the_title(); ?></strong>
					      	<p><?php echo substr(get_the_excerpt(), 0,60); ?> ...</p>
					    </li>
					    
					    <?php endwhile;?>   
					</ul>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
