<?php

add_filter( 'cmb2_meta_boxes', 'opt_mb_pss' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function opt_mb_pss( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cmb2_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['ps'] = array(
        'id'            => 'mb_page_sections',
        'title'         => __( 'Select Sections for this page', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'    => 'Sections',
                'id'      => $prefix . 'sections',
//                'desc'    => 'Select ingredients. Drag to reorder.',
                'type'    => 'pw_multiselect',
                'options' => get_the_sections(),
            ),

        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}