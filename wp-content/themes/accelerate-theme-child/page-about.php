<?php
/**
 * The template for displaying the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	
	<div id="primary" class="home-page hero-content">
		<?php while ( have_posts() ) : the_post();
			$hero_text = get_field('hero_text');
			$page_title = get_field('page_title');
			$page_description = get_field('page_description');
			$service_1_title = get_field('service_1_title');
			$service_1_text = get_field('service_1_text');
			$service_1_image = get_field('service_1_image');
			$service_2_title = get_field('service_2_title');
			$service_2_text = get_field('service_2_text');
			$service_2_image = get_field('service_2_image');
			$service_3_title = get_field('service_3_title');
			$service_3_text = get_field('service_3_text');
			$service_3_image = get_field('service_3_image');
			$service_4_title = get_field('service_4_title');
			$service_4_text = get_field('service_4_text');
			$service_4_image = get_field('service_4_image');
			$size = "full";
			$contact_text = get_field('contact_text');
		?>

		<h2 id="about-hero-text"><?php echo $hero_text; ?></h2>
	</div>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			
			<div class="about-intro">
				<h4><?php echo $page_title; ?></h4>
				<p><?php echo $page_description; ?></p>
			</div>	

			<article class="about clearfix">
     			<div class="about-images about-image-left">
					<?php if($service_1_image) {
						echo wp_get_attachment_image($service_1_image, $size );
					} ?>
				</div>

     			<aside class="about-sidebar">
         			<h6><?php echo $service_1_title; ?></h6>
         			<p><?php echo $service_1_text; ?></p>

         			<?php the_content(); ?>
 				</aside>
			</article>

			<article class="about clearfix">
     			<aside class="about-sidebar">
         			<h6><?php echo $service_2_title; ?></h6>
         			<p><?php echo $service_2_text; ?></p>
 				</aside>

 				<div class="about-images about-image-right">
					<?php if($service_2_image) {
						echo wp_get_attachment_image($service_2_image, $size );
					} ?>
				</div>
			</article>

			<article class="about clearfix">
     			<div class="about-images about-image-left about-image-3">
					<?php if($service_3_image) {
						echo wp_get_attachment_image($service_3_image, $size );
					} ?>
				</div>

     			<aside class="about-sidebar">
         			<h6><?php echo $service_3_title; ?></h6>
         			<p><?php echo $service_3_text; ?></p>
 				</aside>
			</article>

			<article class="about clearfix">
     			<aside class="about-sidebar">
         			<h6><?php echo $service_4_title; ?></h6>
         			<p><?php echo $service_4_text; ?></p>
 				</aside>

 				<div class="about-images about-image-right">
					<?php if($service_4_image) {
						echo wp_get_attachment_image($service_4_image, $size );
					} ?>
				</div>
			</article>

			<div class="about-cta-wrapper"> 
				<div class="about-cta-content">
					<div class="about-cta-text">
						<h2><?php echo $contact_text; ?></h2>
					</div>

					<div class="about-cta-button">
						<a class="button" href="http://localhost:8888/203-accelerate/contact-us/">Contact Us</a>
					</div>
				</div>
			</div>

		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->

</div><!-- #primary -->

<?php get_footer(); ?>