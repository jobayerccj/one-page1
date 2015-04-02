<?php
add_filter( 'cmb2_meta_boxes', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb2_sample_metaboxes( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cmb2_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['test_metabox'] = array(
        'id'            => 'test_metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Test Text', 'cmb2' ),
                'desc'       => __( 'field description (optional)', 'cmb2' ),
                'id'         => $prefix . 'text',
                'type'       => 'text',
                'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
                // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
                // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
                // 'on_front'        => false, // Optionally designate a field to wp-admin only
                // 'repeatable'      => true,
            ),
            array(
                'name' => __( 'Website URL', 'cmb2' ),
                'desc' => __( 'field description (optional)', 'cmb2' ),
                'id'   => $prefix . 'url',
                'type' => 'text_url',
                // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
                // 'repeatable' => true,
            ),
            array(
                'name' => __( 'Test Text Email', 'cmb2' ),
                'desc' => __( 'field description (optional)', 'cmb2' ),
                'id'   => $prefix . 'email',
                'type' => 'text_email',
                // 'repeatable' => true,
            ),
            array(
                'name'    => 'Ingredients',
                'id'      => $prefix . 'ingredients',
                'desc'    => 'Select ingredients. Drag to reorder.',
                'type'    => 'pw_multiselect',
                'options' => array(
                    'flour'  => 'Flour',
                    'salt'   => 'Salt',
                    'eggs'   => 'Eggs',
                    'milk'   => 'Milk',
                    'butter' => 'Butter',
                ),
            ),array(
                'name' => __( 'Group', 'cmb2' ),
                'desc' => __( 'field description (optional)', 'cmb2' ),
                'id'   => $prefix . 'email',
                'type' => 'group',
                'options'     => array(
                    'group_title'   => __( 'Entry {#}', 'cmb2' ), // {#} gets replaced by row number
                    'add_button'    => __( 'Add Another Entry', 'cmb2' ),
                    'remove_button' => __( 'Remove Entry', 'cmb2' ),
                    'sortable'      => true, // beta
                ),
                'fields'=>array(
                    array(
                        'name' => __( 'Test Text Email', 'cmb2' ),
                        'desc' => __( 'field description (optional)', 'cmb2' ),
                        'id'   => $prefix . 'emailg',
                        'type' => 'text_email',
                        // 'repeatable' => true,
                    ),
                    array(
                        'name' => __( 'More Text', 'cmb2' ),
                        'desc' => __( 'field description (optional)', 'cmb2' ),
                        'id'   => $prefix . 'anothertext',
                        'type' => 'text',
                        // 'repeatable' => true,
                    ),
                )
                // 'repeatable' => true,
            ),

        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}