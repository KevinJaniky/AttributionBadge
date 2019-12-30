<?php
if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key'                   => 'group_5e0a7f0be2edc',
        'title'                 => 'Attribution badge block',
        'fields'                => array(
            array(
                'key'               => 'field_5e0a7f1fe4aa4',
                'label'             => 'Author',
                'name'              => 'ab_author',
                'type'              => 'wysiwyg',
                'instructions'      => '',
                'required'          => 1,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => '',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ),
        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/attribution-badges',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
        'active'                => true,
        'description'           => '',
    ));

endif;
