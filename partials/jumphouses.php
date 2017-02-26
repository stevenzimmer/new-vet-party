<div id="jumphouses" class="section">
			<h2>Jumphouses</h2>
			<?php

	            $post_args = array(

	                'category_name'         => 'jumphouses',
	                'posts_per_page'    	=> -1

	            );

	            $post_query = new WP_Query($post_args);

	            while( $post_query->have_posts() ) : $post_query->the_post();
	            $category = get_the_category();

	            $price = get_field('price');
	        ?>


			<div title="<?php the_Title(); ?> Jumphouse" data-content="Rent our <?php the_title() ?> jumphouse for $<?php echo $price ?>/day" class="vpr-item col-sm-6 <?php echo $category[0]->cat_name; ?>">
				<img class="img-responsive lazyload" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?> thumbnail">
				<h3><?php the_title(); ?></h3>
			</div>


			<?php endwhile; ?>

	        <?php wp_reset_postdata(); ?>
		<div class="clearfix"></div>
		</div>
