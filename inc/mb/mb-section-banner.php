<?php
add_filter( 'cmb2_meta_boxes', 'opt_mb_stb' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function opt_mb_stb( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cmb2_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['stb'] = array(
        'id'            => 'mb_banner',
        'title'         => __( 'Banner Settings', 'cmb2' ),
        'object_types'  => array( 'section', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                "name"=>"Primary Title",
                "id"=>$prefix."banner_ptitle",
                "type"=>"text",
                "default"=>"Awesome Theme"
            ),array(
                "name"=>"Primary Sub Title",
                "id"=>$prefix."banner_pstitle",
                "type"=>"text",
                "default"=>""
            ),array(
                "name"=>"Primary Description",
                "id"=>$prefix."banner_pdesc",
                "type"=>"text",
                "default"=>""
            ),
            array(
                "name"=>"Background Image",
                "id"=>$prefix."banner",
                "type"=>"file",
                "default"=>""
            ),

            array(
                "name"=>"Display 2nd Part",
                "id"=>$prefix."display2ndpart",
                "type"=>"checkbox",
                "default"=>"1"
            ),

            array(
                "name"=>"Button Text",
                "id"=>$prefix."buttontext",
                "type"=>"text",
                "default"=>"Download For Free"
            ),
            array(
                "name"=>"Button Url",
                "id"=>$prefix."buttonurl",
                "type"=>"text",
                "default"=>""
            ),


        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}