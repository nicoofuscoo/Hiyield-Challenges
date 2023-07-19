<?php

//load my style sheet
wp_enqueue_style('style', get_stylesheet_uri());
//load tailwind cdn
wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/output.css', array());
