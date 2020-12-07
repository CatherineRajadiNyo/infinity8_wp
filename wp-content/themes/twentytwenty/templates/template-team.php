<?php
/**
 * Template Name: Team Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$boss = get_field('boss');
?>

<main id="site-content" role="main">

<section class="banner banner-team"></section>

<section class="team">
    <div class="container">
        <div class="row manager">
            <div class="col-8">
                <video src="<?php echo $boss['video']; ?>"></video>
            </div>
            <div class="col-4 d-flex flex-column justify-content-center">
                <h3 class="color-blue">OUR ADVISORY TEAM</h3>
                <div class="color-grey fs-large fw-bold mt-3 mb-5">A FAMILY OF PEOPLE DRIVEN BY PASSION</div>
                <p class="color-darker_grey subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>

        <div class="row">
            <?php
            function deleteTrailingCommas($str){
                return trim(preg_replace("/(.*?)((,|\s)*)$/m", "$1", $str));
            }

            $loop = new WP_Query(
                array(
                    'post_type' => 'consultant' // This is the name of your post type - change this as required,
                    // 'posts_per_page' => 50 // This is the amount of posts per page you want to show
                )
            );
            while ( $loop->have_posts() ) : $loop->the_post();
            $consultant_banner = get_field('banner');
            $consultant_qualification = get_field('qualification_and_accreditations');

            $qualification = deleteTrailingCommas(implode($consultant_qualification['lists'], ', '));
            ?>
            
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="consultant.php" class="item">
                        <div class="background">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        </div>
                        <div class="item__details">
                            <div class="item__details__name"><?php echo $consultant_banner['name']; ?></div>
                            <div class="item__details__position"><?php echo $consultant_banner['job_title']; ?></div>
                            <div class="item__details__description"><?php echo $qualification; ?></div>
                        </div>
                    </a>
                </div>
            
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

</main><!-- #site-content -->

<?php
get_footer();
?>
