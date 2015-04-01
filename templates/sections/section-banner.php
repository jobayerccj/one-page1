<?php
$prefix = "_cmb2_";
global $section;
?>
<section class="visual" id="<?php echo "s".$section ;?>">
    <div class="container">
        <div class="text-block">
            <div class="heading-holder">
                <h1><?php echo get_post_meta($section,$prefix."banner_ptitle",1);?></h1>
            </div>
            <p class="tagline"><?php echo get_post_meta($section,$prefix."banner_pstitle",1);?></p>
            <span class="info"><?php echo get_post_meta($section,$prefix."banner_pdesc",1);?></span>
        </div>
    </div>
    <img src="<?php the_banner($section);?>" alt="" class="bg-stretch">
</section>

<?php
$display = get_post_meta($section, $prefix."display2ndpart",1);
if($display) {
    ?>
    <section class="main">
        <div class="container">
            <div id="cta">
                <a href="http://tympanus.net/codrops/?p=23525" class="btn btn-primary rounded">Download For Free Now</a>

                <p>Unlimited 30-Days Trial Period</p>
            </div>
            <div class="row">
                <div class="text-box col-md-offset-1 col-md-10">
                    <h2>Revolutionary editor</h2>

                    <p>Aenean cursus imperdiet nisl id fermentum. Aliquam pharetra dui laoreet vulputate dignissim. Sed
                        id
                        metus id quam auctor molestie eget ut augue. </p>

                    <div class="social-placeholder"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/img-social-placeholder-01.png"
                            height="26" width="365"
                            alt=""></div>
                </div>
            </div>
        </div>
    </section>

<?php
}
?>