<?php get_header(); ?>


    <div class="video-container">
        <div class="overlay"></div>
        <video autoplay loop muted class="video">
            <source src="<?php echo get_theme_file_uri('/images/amtax.mp4" type="video/mp4') ?>">
            <source src="<?php echo get_theme_file_uri('/images/amtax.mov" type="video/mov') ?>">
            <source src="<?php echo get_theme_file_uri('/images/amtax.ogv" type="video/ogv') ?>">
            <source src="<?php echo get_theme_file_uri('/images/amtax.webm" type="video/webm') ?>">
        </video>
        <div class="circle1">2018</div>
        <div class="circle2"><img src="<?php echo get_theme_file_uri('images/global_conference.png') ?>" alt="global-conference" class="global-conference"></div>
        <div class="circle3">
            <div class="circle3-content">16-18 MAY 2018 <br>|  Tax Trends Today</div>
        </div>
        <div class="scroll">SCROLL DOWN FOR MORE <br>▼</div>
    </div>


    <?php
        $about_id = 7;
        $what_we_do_id = 9;

        $about = get_page ($about_id);
        $what_we_do = get_page($what_we_do_id);
    ?>


    <div class="about">
        <div class="about-content">
            <h2><?php echo $about->post_title; ?></h2>
            <p><?php echo $about->post_content; ?></p>
        </div>
    </div>


    <div class="what-we-do">
        <img src="<?php echo get_theme_file_uri('images/skyscrapers.jpg') ?>" class="we-do" alt="skyscrapers">
        <div class="we-content">
            <h2 style="margin-bottom: 0"><?php echo $what_we_do->post_title; ?></h2>
            <p><?php echo $what_we_do->post_content; ?></p>
        </div>
        <img src="<?php echo get_theme_file_uri('images/services.png') ?>" alt="services" class="we-services">
    </div>


<?php get_footer(); ?>
