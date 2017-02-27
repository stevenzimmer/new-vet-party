<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<?php get_template_part( 'partials/hero' ); ?>

<section id="body" class="container">

	<div id="leftCol" class="col-sm-3">

		<?php get_sidebar(); ?>

	</div>

	<div id="vpr-grid" class="col-sm-9 text-center">

		<?php get_template_part( 'partials/jumphouses' ); ?>
		<?php get_template_part( 'partials/canopies' ); ?>

	</div>

</section>
<?php get_template_part( 'partials/about' ); ?>

<?php get_footer(); ?>