<?php

add_filter( 'cmb2_meta_boxes', 'opt_mb_st' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function opt_mb_st( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cmb2_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['st'] = array(
        'id'            => 'mb_st',
        'title'         => __( 'Section Type', 'cmb2' ),
        'object_types'  => array( 'section', ), // Post type
        'context'       => 'side',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => __( '', 'onepagetheme' ),
                'id'   => $prefix . 'stb',
                'type' => 'radio',
                'options'=>array(
                    "banner"=>"Banner",
                    "about"=>"About",
                    "featute_list"=>"Feature List",
                    "feature_article"=>"Feature Article",
                    "clients"=>"Clients",
                    "portfolio"=>"Portfolio",
                    "feedback"=>"Feedback",
                    "team"=>"Team",
                    "facts"=>"Facts",
                    "events"=>"Events",
                    "projects"=>"Projects",
                    "twitter"=>"Twitter",
                )
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}