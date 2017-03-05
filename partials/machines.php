
	<?php
        $post_args = array(
            'category_name'         => 'machines',
            'posts_per_page'    	=> -1
        );
        $post_query = new WP_Query($post_args);
        while( $post_query->have_posts() ) : $post_query->the_post();
        $category = get_the_category();
        $price = get_field('price');
    ?>

        <div title="<?php the_Title(); ?> Party Machine" data-content="Rent a <?php the_title() ?> machine for $<?php echo $price ?>/day" class="vpr-item col-sm-4 <?php echo $category[0]->cat_name; ?>">
            <div class="vpr-item-info">
                <img class="img-responsive lazyload" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?> thumbnail">
                <h3><?php the_title(); ?></h3>
                <div class="bg-overlay"></div>
            </div>
        </div>


	<?php endwhile; ?>

    <?php wp_reset_postdata(); ?>
	<div class="clearfix"></div>

