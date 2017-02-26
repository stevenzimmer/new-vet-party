<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<?php get_template_part( 'partials/hero' ); ?>

<section id="body" class="container">
	<?php get_sidebar(); ?>

	<div class="col-sm-9 text-center">
		<?php get_template_part( 'partials/jumphouses' ); ?>
		<?php get_template_part( 'partials/canopies' ); ?>
	</div>
</section>
<?php get_template_part( 'partials/about' ); ?>

<!-- <section id="tiles" class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 text-center">
			<div class="row">
				<h2>Check out our party rental products:</h2>

				<div class="col-sm-4">
					<div class=" material-card">
						<header class="zoom">
							<img src="wp-content/uploads/jumphouse.png" class="material-card__img" alt="Veteran party rental jumphouses"/>
						</header>
						<div>
							<h3>Jumphouses</h3>
							<p>More bounce to the ounce.</p>
						</div>
						<footer>
							<a href="#jumpers" class="btn material-btn_success">View options</a>
						</footer>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="material-card">
						<header class="zoom">
							<img src="wp-content/uploads/canopy_dark.png" class="material-card__img" alt="Canopy party rental supplies"/>
						</header>
						<div>
							<h3>Canopies</h3>
							<p>We got you covered.</p>
						</div>
						<footer>
							<a href="#canopies" class="btn material-btn_success">View options</a>
						</footer>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="material-card">
						<header class="zoom">
							<img src="wp-content/uploads/cotton-candy-boy.png" class="material-card__img" alt="Veteran party rental: party machines"/>
						</header>
						<div>
							<h3>Party machines</h3>
							<p>We're sweet too!</p>
						</div>
						<footer>
							<a href="#machines" class="btn material-btn_success">View options</a>
						</footer>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- <section id="jumpers">
	<div class="banner-gradient col-md-7" >
	  	<div class="col-sm-10 col-sm-offset-1 text-center">
	    	<h1>Jumphouses, bouncehouses, and inflatable courses!</h1>
	    	<p>Get out ya seat and jump around!</p>
	  	</div>
	</div>
 </section>

<section class="container text-center">
	<div class="col-sm-12">
		<div class="row">
			<?php

	            $post_args = array(

	                'post_type'         => 'jumphouses',
	                'posts_per_page'    => -1

	            );

	            $post_query = new WP_Query($post_args);

	            while( $post_query->have_posts() ) : $post_query->the_post();
	        ?>


			<div class="col-sm-6 col-md-4">
				<img class="img-responsive center-block lazyload" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?> thumbnail">
				<h3><?php the_title(); ?></h3>
			</div>


			<?php endwhile; ?>

	        <?php wp_reset_postdata(); ?>
        </div>

	</div>
</section>

<section id="canopies">
	<div class="banner-gradient container-fluid col-md-7" >
		<div class="col-md-12 text-center" style="padding:50px">
			<h1>Canopies</h1>
		</div>
	</div>

</section>

<section class="container text-center">
	<div class="col-sm-12 padding">
		<div class="row">

			<?php

	            $post_args = array(

	                'post_type'         => 'canopies',
	                'posts_per_page'    => -1

	            );

	            $post_query = new WP_Query($post_args);

	            while( $post_query->have_posts() ) : $post_query->the_post();
	        ?>

				<div class="col-md-6">
					<img class="img-responsive center-block lazyload" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?> thumbnail">
					<h3><?php the_title(); ?></h3>
				</div>

			<?php endwhile; ?>

	        <?php wp_reset_postdata(); ?>
	    </div>
	</div>
</section>

<section id="machines">
	<div class="banner-gradient container-fluid col-md-7">
		<div class="col-md-12 text-center">
			<h1>Party machines!</h1>
			<p>We'll mix it up</p>
		</div>
	</div>
</section>

<section class="container text-center">
	<div class="col-sm-12 padding">
		<div class="row">

			<?php

	            $post_args = array(

	                'post_type'         => 'machines',
	                'posts_per_page'    => -1

	            );

	            $post_query = new WP_Query($post_args);

	            while( $post_query->have_posts() ) : $post_query->the_post();
	        ?>

				<div class="col-sm-4">
					<img class="img-responsive center-block lazyload" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?> thumbnail">
					<h3><?php the_title(); ?></h3>
				</div>

			<?php endwhile; ?>

	        <?php wp_reset_postdata(); ?>
	    </div>
	</div>
</section> -->



<!-- <section class="banner-blue-light" style="padding: 15px 0 40px">
	<div class="container text-center">
		<div class="row">
			<h2>Our Core Values</h2>
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row slideanim">
				<div class="col-sm-3">
					<strong>Family</strong>
					<p>Family first above all. Real wealth is with family.</p>
				</div>
				<div class="col-sm-3">
					<strong>Honor</strong>
					<p>Honor the mission, fulfill duties, go above and beyond</p>
				</div>
				<div class="col-sm-3">
					<strong>Community</strong>
					<p>Give back. Community is only as great as we make it.</p>
				</div>
				<div class="col-sm-3">
					<strong>Pride</strong>
					<p>We supply our clients as if we're supplying our own family.</p>
				</div>
			</div>
		</div>
	</div>
</section> -->

<?php get_footer(); ?>