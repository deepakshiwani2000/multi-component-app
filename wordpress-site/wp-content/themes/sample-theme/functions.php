<?php
function sample_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'sample_theme_setup');
