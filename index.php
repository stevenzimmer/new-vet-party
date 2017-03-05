<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<?php get_template_part( 'partials/hero' ); ?>

<section id="body" class="container-fluid">

	<div id="leftCol" class="col-sm-2 col-sm-offset-1">

		<?php get_sidebar(); ?>

	</div>

	<div id="vpr-grid" class="col-sm-9 text-center">

		<?php get_template_part( 'partials/jumphouses' ); ?>
		<?php get_template_part( 'partials/canopies' ); ?>
		<?php get_template_part( 'partials/machines' ); ?>

	</div>

</section>
<?php get_template_part( 'partials/about' ); ?>

<?php get_footer(); ?>