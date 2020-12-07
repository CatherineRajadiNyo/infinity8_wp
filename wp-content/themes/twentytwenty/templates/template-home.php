<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$banner = get_field('banner');
$success = get_field('success');
$process = get_field('process');
?>

<main id="site-content" role="main">

<section class="banner banner-home">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 col-md-7 banner-content">
                <h2><?php echo $banner['header']; ?></h2>
                <p class="color-white text-transform"><?php echo $banner['description']; ?></p>
				<?php if($banner['button']){ ?>
				<div><a href="<?php echo $banner['button']['link']; ?>" class="btn btn-primary"><?php echo $banner['button']['text']; ?></a></div>
				<?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="banner banner-home_success home_success">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="color-dark_blue text-transform"><?php echo $success['header']; ?></h3>
                <p class="color-darker_grey subtitle"><?php echo $success['description']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-partners" role="tabpanel"
                            aria-labelledby="nav-partners-tab">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <div class="value"><?php echo $success['category_partners']['partner_1_value']; ?></div>
                                    <div class="name"><?php echo $success['category_partners']['partner_1_name']; ?></div>
                                </div>
                                <div>
									<div class="value"><?php echo $success['category_partners']['partner_2_value']; ?></div>
                                    <div class="name"><?php echo $success['category_partners']['partner_2_name']; ?></div>
                                </div>
                                <div>
									<div class="value"><?php echo $success['category_partners']['partner_3_value']; ?></div>
                                    <div class="name"><?php echo $success['category_partners']['partner_3_name']; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-clients" role="tabpanel" aria-labelledby="nav-clients-tab">
                            <div class="value"><?php echo $success['category_clients']['client_value']; ?></div>
                            <div class="name"><?php echo $success['category_clients']['client_name']; ?></div>
                        </div>
                        <div class="tab-pane fade" id="nav-assets" role="tabpanel" aria-labelledby="nav-assets-tab">
							<div class="value"><?php echo $success['category_assets']['asset_value']; ?></div>
                            <div class="name"><?php echo $success['category_assets']['asset_name']; ?></div>
                        </div>
                        <div class="tab-pane fade" id="nav-consultants" role="tabpanel" aria-labelledby="nav-consultants-tab">
                            <div class="value"><?php echo $success['category_consultants']['consultant_value']; ?></div>
                            <div class="name"><?php echo $success['category_consultants']['consultant_name']; ?></div>
                        </div>
                        <div class="tab-pane fade" id="nav-claims" role="tabpanel" aria-labelledby="nav-claims-tab">
							<div class="value"><?php echo $success['category_claims']['claim_value']; ?></div>
                            <div class="name"><?php echo $success['category_claims']['claim_name']; ?></div>
                        </div>
                    </div>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-partners-tab" data-toggle="tab" href="#nav-partners"
                            role="tab" aria-controls="nav-partners" aria-selected="true">
                            <div class="icon icon-partners"></div>
                            <div><?php echo $success['category_partners']['header']; ?></div>
                        </a>
                        <a class="nav-item nav-link" id="nav-clients-tab" data-toggle="tab" href="#nav-clients"
                            role="tab" aria-controls="nav-clients" aria-selected="false">
                            <div class="icon icon-clients"></div>
                            <div><?php echo $success['category_clients']['header']; ?></div>
                        </a>
                        <a class="nav-item nav-link" id="nav-assets-tab" data-toggle="tab" href="#nav-assets" role="tab"
                            aria-controls="nav-assets" aria-selected="false">
                            <div class="icon icon-assets"></div>
                            <div><?php echo $success['category_assets']['header']; ?></div>
                        </a>
                        <a class="nav-item nav-link" id="nav-consultants-tab" data-toggle="tab" href="#nav-consultants"
                            role="tab" aria-controls="nav-consultants" aria-selected="false">
                            <div class="icon icon-consultants"></div>
                            <div><?php echo $success['category_consultants']['header']; ?></div>
                        </a>
                        <a class="nav-item nav-link" id="nav-claims-tab" data-toggle="tab" href="#nav-claims" role="tab"
                            aria-controls="nav-claims" aria-selected="false">
                            <div class="icon icon-claims"></div>
                            <div><?php echo $success['category_claims']['header']; ?></div>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
		<?php if($success['button']){ ?>
        <div class="row">
            <div class="col text-center">
                <a href="<?php echo $success['button']['link']; ?>" class="btn btn-primary mt-5"><?php echo $success['button']['text']; ?></a>
            </div>
        </div>
		<?php } ?>
    </div>
</section>

<section class="banner banner-infinity_grey home_process">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 text-center">
                <h3 class="color-dark_blue mb-5"><?php echo $process['header']; ?></h3>
                <div class="home_process__container">
                    <svg id="donut-chart"></svg>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="tab-content">
                    <div class="tab-pane fade show active home_process_content" data-process="01">
                        <div class="header">01.</div>
                        <div class="subheader"><?php echo $process['process_1']['header']; ?></div>
                        <hr />
                        <div><?php echo $process['process_1']['description']; ?></div>
                        <?php if($process['button']){ ?>
							<button class="btn btn-secondary"><?php echo $process['button']['text']; ?></button>
						<?php } ?>
                    </div>
                    <div class="tab-pane fade home_process_content" data-process="02">
                        <div class="header">02.</div>
                        <div class="subheader"><?php echo $process['process_2']['header']; ?></div>
                        <hr />
                        <div><?php echo $process['process_2']['description']; ?></div>
                        <?php if($process['button']){ ?>
							<button class="btn btn-secondary"><?php echo $process['button']['text']; ?></button>
						<?php } ?>
                    </div>
                    <div class="tab-pane fade home_process_content" data-process="03">
                        <div class="header">03.</div>
                        <div class="subheader"><?php echo $process['process_3']['header']; ?></div>
                        <hr />
                        <div><?php echo $process['process_3']['description']; ?></div>
                        <?php if($process['button']){ ?>
							<button class="btn btn-secondary"><?php echo $process['button']['text']; ?></button>
						<?php } ?>
                    </div>
                    <div class="tab-pane fade home_process_content" data-process="04">
                        <div class="header">04.</div>
                        <div class="subheader"><?php echo $process['process_4']['header']; ?></div>
                        <hr />
                        <div><?php echo $process['process_4']['description']; ?></div>
                        <?php if($process['button']){ ?>
							<button class="btn btn-secondary"><?php echo $process['button']['text']; ?></button>
						<?php } ?>
                    </div>
                    <div class="tab-pane fade home_process_content" data-process="05">
                        <div class="header">05.</div>
                        <div class="subheader"><?php echo $process['process_5']['header']; ?></div>
                        <hr />
                        <div><?php echo $process['process_5']['description']; ?></div>
                        <?php if($process['button']){ ?>
							<button class="btn btn-secondary"><?php echo $process['button']['text']; ?></button>
						<?php } ?>
                    </div>
                    <div class="tab-pane fade home_process_content" data-process="06">
                        <div class="header">06.</div>
                        <div class="subheader"><?php echo $process['process_6']['header']; ?></div>
                        <hr />
                        <div><?php echo $process['process_6']['description']; ?></
                        <?php if($process['button']){ ?>
							<button class="btn btn-secondary"><?php echo $process['button']['text']; ?></button>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main><!-- #site-content -->
<script type="text/javascript">
	window.__SEED_DATA__ = [{
        "label": "<?php echo $process['process_1']['header']; ?>",
        "number": '01',
        "value": 25,
    }, {
        "label": "<?php echo $process['process_2']['header']; ?>",
        "number": '02',
        "value": 25,
    }, {
        "label": "<?php echo $process['process_3']['header']; ?>",
        "number": '03',
        "value": 25,
    }, {
        "label": "<?php echo $process['process_4']['header']; ?>",
        "number": '04',
        "value": 25,
    }, {
        "label": "<?php echo $process['process_5']['header']; ?>",
        "number": '05',
        "value": 25,
    }, {
        "label": "<?php echo $process['process_6']['header']; ?>",
        "number": '06',
        "value": 25,
    }];
</script>
<?php
$external_js = ['https://d3js.org/d3.v4.js'];
$additional_js = ['donut.js'];
get_footer('', array(
	"additional_js" => $additional_js,
	"external_js" => $external_js,
));
?>
