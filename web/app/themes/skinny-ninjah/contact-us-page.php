<?php
/**
 * Template Name: Contact Us Page
 *
 * This is the template that displays the contact us page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Skinny_Ninjah
 */

get_header(); ?>

<main id="primary" class="site-main">
	<?php get_template_part( 'partials/components/breadcrumbs' );
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
	?>

	<div class="our-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.381958932292!2d18.718010175804196!3d-33.8282590732422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5418e622580b%3A0xe846df4e2b69a762!2sLangley%20Hills!5e0!3m2!1sen!2sza!4v1706730442996!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</main><!-- #main -->

<?php
get_footer();
