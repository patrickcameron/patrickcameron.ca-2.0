<?php $showPortfolioItems = new WP_Query( array(
	'post_type'=>'portfolio',
) ); ?>

<?php if ( $showPortfolioItems->have_posts() ) : ?>

	<section class="projects">
	<div class="wrapper" id="projects">
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
							<img src="<?php echo $image['sizes']['large'] ?>">
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
			<img src="images/headshot.jpg" alt="profile photo">
			<div class="profileText">
				<p>I'm a front-end developer and designer from Toronto, Canada. In previous lives I've worked as a bike messenger, an English teacher in Myanmar, and as a construction worker in an Arctic diamond mine. I learned to code at <a href="http://www.hackeryou.com">HackerYou</a>. Contact me <a href="mailto:patcameron+webdev@gmail.com">by email</a> or on <a href="https://twitter.com/_patrickcameron">Twitter</a>. You can view my Github portfolio <a href="http://github.com/patrickcameron">here</a> and my resume <a href="patrickCameronResume.pdf">here</a>.</p>
				<p>My current skills include: <p class="skill">AngularJS</p> <p class="skill">JavaScript</p> <p class="skill">jQuery</p> <p class="skill">Git</p> <p class="skill">Wordpress</p> <p class="skill">HTML5</p> <p class="skill">CSS3</p> <p class="skill">Responsive</p> <p class="skill">Accessible Design</p></p>
			</div>
		</div>
	</div>
</section>

<div class="thumbsUp">
	<div class="wrapper">
		<a href="#top" class="smoothScroll"><i class="fa fa-thumbs-o-up thumbsup"></i></a>
	</div>
</div>