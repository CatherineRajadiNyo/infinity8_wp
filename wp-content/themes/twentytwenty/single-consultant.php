<?php
/**
 * Template Name: Consultant Template
 * Template Post Type: post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
if (has_post_thumbnail( $post->ID ) ){
    $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
}
$banner = get_field('banner');
$introduction = get_field('introduction');
$qualifications = get_field('qualification_and_accreditations');
$my_specialization = get_field('my_specialization');
$my_publications = get_field('my_publications');
?>

<main id="site-content" role="main">

<section class="banner banner-consultant consultant__individual">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column consultant__individual__details">
                <h1><?php echo $banner['name']; ?></h1>
                <div class="subheader color-gold"><?php echo $banner['job_title']; ?></div>
                <div class="consultant__individual__details-link">
                    <a href="tel:<?php echo $banner['phone_number']; ?>"><?php echo $banner['phone_number']; ?></a>
                    <a href="mailto:<?php echo $banner['email']; ?>" class="text-underline"><?php echo $banner['email']; ?></a>
                </div>
            </div>
            <div class="col-12 col-md-6 consultant__individual__portrait">
                <?php if(isset($featured_img_url)): ?>
                <img src="<?php echo $featured_img_url[0]; ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="consultant__bio">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="consultant__bio__description">
                    <h3 class="color-gold mb-4"><?php echo $introduction['highlight']; ?></h3>
                    <?php echo $introduction['content']; ?>
                </div>
                <?php
                if(!empty($qualifications['lists'])):
                ?>
                <div class="consultant__bio__qualification">
                    <h3 class="header text-center">My Qualifications & Accreditations</h3>
                    <div class="credit__container">
                        <?php
                            foreach($qualifications['lists'] as $list):
                                if($list != ""):
                        ?>
                        <div class="credit"><?php echo $list; ?></div>
                        <?php
                                endif;
                            endforeach;
                        ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
if(!empty($my_specialization['lists'])):
?>
<section class="banner banner-specialization consultant__specialization">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="header">MY SPECIALIZATION</h3>
                <div class="description">You’re not alone. There are thousands of financial products in the market, which means it can be challenging for you to choose. Moreover, agents and online sources may have conflicting views which leave you to question how that new policy fits into your financial plan.
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            foreach($my_specialization['lists'] as $list):
                $post_id = $list->ID;
                if (has_post_thumbnail( $post_id ) ){
                    $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                }
            ?>
            <div class="col-12 col-md-4">
                <div class="consultant__specialization__item">
                    <img src="<?php echo $img[0]; ?>" />
                    <div class="consultant__specialization__item-content">
                        <h6 class="color-gold mb-3"><?php echo the_field('header', $post_id); ?></h6>
                        <p><?php echo the_field('description', $post_id); ?></p>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
if(!empty($my_publications['lists'])):
?>
<section class="consultant__publication">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="header">MY PUBLICATIONS</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 offset-0 col-md-10 offset-md-1">
                <ul>
                <?php
                foreach($my_publications['lists'] as $list):
                    // $post_id = $list->ID;
                ?>
                    <li><a href="#" class="color-gold">“Over 6,600 fines issued for flouting Covid-19 rules”</a> - The Straits Times, 5 July 2020</li>
                <?php
                endforeach;
                ?>
                </ul>
                <?php if(!empty($my_publications['button'])): ?>
                    <a href="<?php echo $my_publications['link']; ?>" class="color-black text-underline fw-bold pl-5">VIEW MORE...</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
</main><!-- #site-content -->

<?php
get_footer('', ['consultant' => true]);
?>
