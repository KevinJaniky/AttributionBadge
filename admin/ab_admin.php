<?php

add_action('acf/init', 'ab_define_block_init');
function ab_define_block_init()
{
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name'            => 'attribution_badges',
            'title'           => __('Attributions badge'),
            'description'     => '',
            'render_callback' => 'ab_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'mode' => 'edit',
            'keywords'        => array('attribution', 'badge', 'author', 'unsplash'),
        ));
    }
}

function ab_block_render_callback()
{
    $field = get_field('ab_author');
    echo '<div style="font-size:9px !important;">'.$field.'</div>';
}
