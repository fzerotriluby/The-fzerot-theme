<?php
/**
 * The home template file.
 *
 * @package 403
 */

get_header(); ?>

        <div id="masonry" class="row home">

        	<?php 
        		if ( have_posts() ) :
        		    while ( have_posts() ) : the_post();
        	?>
		        <div class="item col-xs-12 col-sm-6 col-md-4 col-lg-3">
		          <div class="card box-rash">
                                <div class="card-meta card-meta-left"><span class="card-line"></span><?php the_category( ', ' ); ?></div>
		          	<a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
		          	</a>
		            <div class="card-body">
		            	<?php the_excerpt(); ?>
		            </div>
		          </div>
		        </div>

        	<?php
        		endwhile;
        		else :
        		    echo wpautop( '很抱歉，这里还没有动态。' );
        		endif;
        	?>

        </div>

<?php get_footer(); ?>