<?php
$prefix = "_cmb2_";
global $section;


?>
<section id="slider" >
       
        <div data-velocity="-.2" class="overlay-bg slide-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-text-table">
                        <div class="slide-text-table-cell">
                            <div class="slide-text wow fadeIn">
                                <h1><?php echo get_post_meta($section,$prefix."banner_ptitle",1);?></h1>

                                <p><?php echo get_post_meta($section,$prefix."banner_pdesc",1);?> </p>   
                                <a href="" class="learn-more"><?php echo get_post_meta($section,$prefix."buttontext",1);?></a>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> 