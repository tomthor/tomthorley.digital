<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php

$profileImage = get_field('profile_image');
$bubbleText = get_field('bubble_text');
$introText = get_field('intro_text', false, false);

$clientsTitle = get_field('client_section_title');

$portfolioGridTitle = get_field('portfolio_grid_title');

$webTechTitle = get_field('web_tech_title');
$bottomTechTitle = get_field('tech_bottom_title');

$contactSectionTitle = get_field('contact_section_title');

$rateTitle = get_field('rate_title');
$dayRate = get_field('day_rate');

$availabilityTitle = get_field('availability_title');
$availabilityList = get_field('availability_list', false, false);

$contactDescription = get_field('contact_description');

?>

<section class="intro__section background__color--dark">
	<div class="grid-container">
		<div class="grid-x">
			<div class="header-bar" data-smooth-scroll>
				<span class="speech-bubble"><?php echo $bubbleText; ?></span>
				 <a class="contact-link" href="#contact"><span class="contact-button">Contact </span></a>
			</div>

			<div class="profile-image">
				<img src="<?php echo $profileImage['url']; ?>">
			</div>

			<h1 class="intro-text">
				<?php echo $introText; ?>
			</h1>

		</div>
	</div>
</section>
<div class="grid-container separator__mobile--padding">
	<svg id="bigTriangleDark" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
		<path d="M0 0 L50 65 L100 0 Z" />
	</svg>
</div>

<section>
	<div class="grid-container">
		<h1 class="section__title client-logos__title"><?php echo $clientsTitle; ?></h1>
		<div class="grid-x client-logos">
			<?php
			if( have_rows('client_logos') ):
				while ( have_rows('client_logos') ) : the_row();
				$image = get_sub_field('image');
				?>
				<div class="cell small-6 medium-4">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
</div>
</section>


<section class="background__color--dark">
	<div class="grid-container separator__mobile--padding">
		<svg id="bigTriangleLight" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
			<path d="M0 0 L50 65 L100 0 Z" />
		</svg>
		<div class="grid-x">
			<h1 class="separator__title"><?php echo $portfolioGridTitle; ?></h1>
		</div>
	</div>
</section>
<div class="grid-container separator__mobile--padding">
	<svg id="bigTriangleDark" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
		<path d="M0 0 L50 65 L100 0 Z" />
	</svg>
</div>


<section>
	<div class="grid-container">
		<div class="grid-x portfolio-grid">
			<?php
			if( have_rows('portfolio_grid_images') ):
				while ( have_rows('portfolio_grid_images') ) : the_row();
				$image = get_sub_field('image');
				?>
				<div class="cell small-6 medium-4 portfolio__item">

					<div class="portfolio-grid__item--info">
						<h2><?php echo get_sub_field('title'); ?></h2>
						<p class="portfolio_grid__summary"><?php echo get_sub_field('summary'); ?> </p>
						<a class="portfolio_grid__button" href="<?php echo get_sub_field('button_link'); ?>"> Learn more </a>
					</div>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />

				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
</div>
</section>

<section class="background__color--dark">
	<div class="grid-container separator__mobile--padding">
		<svg id="bigTriangleLight" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
			<path d="M0 0 L50 65 L100 0 Z" />
		</svg>
		<div class="grid-x">
			<h1 class="separator__title"><?php echo $webTechTitle; ?></h1>
		</div>
	</div>
</section>
<div class="grid-container separator__mobile--padding">
	<svg id="bigTriangleDark" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
		<path d="M0 0 L50 65 L100 0 Z" />
	</svg>
</div>

<section>
	<div class="grid-container">
		<div class="grid-x tech-logos">
			<?php
			if( have_rows('tech_logos') ):
				while ( have_rows('tech_logos') ) : the_row();
				$image = get_sub_field('image');
				?>
				<div class="cell small-6 medium-3">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
				</div>
				<?php
			endwhile;
		endif;
		?>

		<h1 class="section__title"> <?php echo $bottomTechTitle; ?></h1>
	</div>

</section>

<section class="background__color--dark">
	<div class="grid-container separator__mobile--padding">
		<svg id="bigTriangleLight" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
			<path d="M0 0 L50 65 L100 0 Z" />
		</svg>

		<div class="grid-x hire-section" id="contact">
			<h1 class="section__title"><?php echo $contactSectionTitle; ?></h1>

			<div class="rate__container">
				<p class="title">	<?php echo $rateTitle; ?></p>
				<span class="day-rate"><?php echo $dayRate; ?></span>
			</div>

			<div class="availability__container">
				<p class="title"><?php echo $availabilityTitle; ?></p>

				<div class="availability__list">
					<?php echo $availabilityList; ?>
				</div>

			</div>



			<?php echo $contactDescription; ?>


			<div class="contact-form">
				<?php echo do_shortcode('[wpforms id="58" title="false" description="false"]'); ?>
			</div>

		</div>
	</div>

</section>




<?php get_footer();
