<?php
// $banner_slider = get_field('about_us_section');

// echo '<pre>';
// print_r($banner_slider);
// echo '</pre>';
// ?>
<?php

/* Template Name: Pfbi Home page  */
get_header(); ?>

<div class="wrapper">
    <!----------------hero section---------->
    <section class="hero-sec bgskyblue">
        <div class="container-fluid">
            <div class="row hero-row">
                <div class="hero-grid hero-banner">
                    <div class="heroCarousel">
                        <div class="swiper-wrapper">
                            <?php
                            if (have_rows('banner_slider')):
                                while (have_rows('banner_slider')):
                                    the_row();
                                    $banner_mob_img = get_sub_field('banner_image');
                                    $banner_count = get_sub_field('incremnet_count');
                                    $banner_heading = get_sub_field('banner_heading');
                                    $banner_description = get_sub_field('banner_description');
                                    $anchor_link = get_sub_field('anchor_link');
                                    ?>

                                    <div class="swiper-slide">
                                        <div class="hero-banner-context"
                                            style="background: #F69322 url(<?php echo $banner_mob_img; ?>) no-repeat;">
                                            <?php if (!empty($banner_heading)): ?>
                                                <div class="stroke-white">
                                                    <?php echo $banner_count; ?>+
                                                </div>

                                                <h1 class="fs60 lh60 neuemedium clrblack">
                                                    <?php echo $banner_heading; ?>
                                                </h1>
                                                <p class="fs30 lh40 clrblack">
                                                    <?php echo $banner_description; ?>
                                                </p>

                                                <a href="<?php echo $anchor_link; ?>" class="know-more">Get in touch</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                <?php endwhile; endif; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <p class="fs20 clrblack lh60 popsemibold clrblue text-uppercase">About us</p>
            <div class="row home-about-row">
                <?php if (have_rows('about_us_section')): ?>
                    <?php while (have_rows('about_us_section')):
                        the_row(); ?>
                        <?php
                        $about_heading = get_sub_field('heading'); 
                        $about_para = get_sub_field('description');
                        $about_link = get_sub_field('anchor_link');
                        ?>
                        <div class="col-lg-4 home-about-grid">
                            <div class="home-about-title">
                                <h2 class="fs50 clrblack neuemedium lh50">
                                    <?php echo $about_heading; ?>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-8 home-about-grid">
                            <div class="home-about-para">
                                <p class="fs25 lh35 clrblack">
                                <?php echo $about_para; ?>
                                </p>
                                <a href=" <?php echo $about_link; ?>" class="know-more know-more-small knw-more-blue">Know
                                    more</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>