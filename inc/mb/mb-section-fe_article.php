<?php
add_filter( 'cmb2_meta_boxes', 'opt_mb_stfea' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function opt_mb_stfea( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cmb2_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['stfea'] = array(
        'id'            => 'mb_fe_article',
        'title'         => __( 'Feature Article Settings', 'cmb2' ),
        'object_types'  => array( 'section', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                "name"=>"Title",
                "id"=>$prefix."article_ptitle",
                "type"=>"text",
                "default"=>"STORYTELLER"
            ),
            
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}