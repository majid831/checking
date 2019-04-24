<?php
/*
*	Template Name: Test  123 Template
*/
get_header();
?>
<h2>in development branch 2</h2>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <div>
                <h1>test</h1>
            </div>
            <div id="slider">
                <?php
                // Checks if post has a feature image, grabs the feature-image and outputs that along with thumbnail SRC as a REL attribute
                if (has_post_thumbnail()) { // checks if post has a featured image and then outputs it.
                    $image_id = get_post_thumbnail_id ($post->ID );
                    $image_thumb_url = wp_get_attachment_image_src( $image_id,'small-thumb');
                    $attr = array(
                        'class' => "folio-sample",
                        'rel' => $image_thumb_url[0], // REL attribute is used to show thumbnails in the Nivo slider, can be skipped if you don't want thumbs or using other slider
                    );
                    the_post_thumbnail ('feature-image', $attr);
                }
                if (class_exists('MultiPostThumbnails')) {
                    // Loops through each feature image and grabs thumbnail URL
                    $i=1;
                    while ($i<=5) {
                        $image_name = 'feature-image-'.$i;  // sets image name as feature-image-1, feature-image-2 etc.
                        if (MultiPostThumbnails::has_post_thumbnail('folio', $image_name)) {
                            $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'folio', $image_name, $post->ID );  // use the MultiPostThumbnails to get the image ID
                            $image_thumb_url = wp_get_attachment_image_src( $image_id,'small-thumb');  // define thumb src based on image ID
                            $image_feature_url = wp_get_attachment_image_src( $image_id,'feature-image' ); // define full size src based on image ID
                            $attr = array(
                                'class' => "folio-sample",      // set custom class
                                'rel' => $image_thumb_url[0],   // sets the url for the image thumbnails size
                                'src' => $image_feature_url[0], // sets the url for the full image size
                            );
                            // Use wp_get_attachment_image instead of standard MultiPostThumbnails to be able to tweak attributes
                            $image = wp_get_attachment_image( $image_id, 'feature-image', false, $attr );
                            echo $image;
                        }
                        $i++;
                    }

                }; // end if MultiPostThumbnails
                ?>
            </div>
			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
