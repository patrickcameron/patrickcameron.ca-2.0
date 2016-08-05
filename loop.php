<?php $showPortfolioItems = new WP_Query( array(
	'post_type'=>'portfolio',
) ); ?>

<?php if ( $showPortfolioItems->have_posts() ) : ?>

	<div id="projects"></div>
	
	<section class="projects">
	<div class="wrapper">
	<div class="projectOuterWrapper">
	<h1>My work so far.</h1>

	<?php while ( $showPortfolioItems->have_posts() ) : $showPortfolioItems->the_post(); ?>
		<div class="projectWrapper">
			<h4><?php the_title(); ?></h4>
			<div class="projectSubWrapper">
				<div class="siteImage">
					<a href="<?php the_field('siteurl'); ?>" target="_blank">
					<?php while( has_sub_field('images') ): ?>
						<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image['sizes']['sitePreview'] ?>">
					<?php endwhile; ?>
					</a>
				</div>
				<div class="descriptionWrapper">
					<p><?php the_content(); ?></p>
					<div class="skills">
						<?php while( has_sub_field('skills') ): ?>
							<?php $skills = get_sub_field('skill'); ?>
							<p class="skill"><?php echo $skills ?> </p>
						<?php endwhile; ?>
					</div>
					<p><a class="viewSiteButton" href="<?php the_field('siteurl'); ?>" target="_blank">View site</a></p>
				</div>
			</div>
		</div>
	<?php endwhile; ?>

	</div>
	</div>
	</section>

<?php else:  ?>

<?php endif; // end if there are no posts ?>

<section class="about" id="about">
	<div class="wrapper">
		<h1>About me.</h1>
		<div class="profile">
			<img src="<?php echo get_template_directory_uri(); ?>/images/portrait2.jpg" alt="profile photo">
			<div class="profileText">
				<p>I'm a front-end developer from Toronto, currently working at <a href="http://seocial.com" target="_blank">SEOcial</a>. In previous lives I've worked as a bike messenger, an English teacher in Myanmar, and at an Arctic diamond mine. I learned to code at <a href="http://www.hackeryou.com">HackerYou</a>. Contact me <a href="mailto:patcameron+webdev@gmail.com">by email</a>. You can view my Github portfolio <a href="http://github.com/patrickcameron">here</a> and my resume <a href="patrickCameronResume.pdf">here</a>.</p>
				<p>My current skills include: <p class="skill">AngularJS</p> <p class="skill">JavaScript</p> <p class="skill">jQuery</p> <p class="skill">Git</p> <p class="skill">Wordpress</p> <p class="skill">HTML5</p> <p class="skill">CSS3</p> <p class="skill">Responsive</p> <p class="skill">Accessible Design</p></p>
			</div>
		</div>
	</div>
</section>

<div class="contactButton">
	<div class="wrapper">
		<p><a href="mailto:patcameron+webdev@gmail.com" class="viewSiteButton"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact Me Here</a></p>
	</div>
</div>