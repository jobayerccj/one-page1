<?php
$prefix = "_cmb2_";
global $section;


?>

<section id="about" class="section-padding text-center">
        <div class="container">
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="about-text wow bounceIn">
                        <div class="about-icon">
                            <i class="li_lab"></i>
                        </div>
                        
                        <h2><?php echo get_post_meta($section,$prefix."about_ptitle",1);?></h2>
                        <p><?php echo get_post_meta($section,$prefix."about_pdesc",1);?></p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End about -->
  