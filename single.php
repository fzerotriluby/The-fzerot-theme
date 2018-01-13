<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package 403
 */

get_header(); ?>

        <div class="row">

        	<?php 
        		if ( have_posts() ) :
        		    while ( have_posts() ) : the_post();
        	?>
		        <div class="col-xs-12 col-sm-12 col-md-12">
		          <div class="card box-rash">
                    <div class="card-meta card-meta-right"><a href="http://fzerotriluby.com/"><span class="card-line"></span></a></div>
		            <div class="card-body">
                        <h2 class="card-title"><?php the_title(); ?></h2>
		            	<?php the_content(); ?>
		            </div>
		          </div>
		        </div>

        	<?php
        		endwhile;
        		else :
        		    echo wpautop( '很抱歉，文章加载发生了错误。' );
        		endif;
        	?>

        </div>
        
<?php get_footer(); ?>