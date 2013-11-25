<?php
/*
Template Name: Onestop Index Page
*/

use Timber as Timber;
use TimberMenu as TimberMenu;
use TimberPost as TimberPost;
use TimberLoader as TimberLoader;

$pageObj = new Biosciences\Base();

$menus = array('primary', 'footer_left', 'footer_center', 'footer_right');
$pageObj->find_menus($menus);

$query = array('post_type' => 'page',
    'post_parent__in' => array(71),
    'posts_per_page' => -1
    );
$pageObj->find_posts($query);

$pageObj->render_page('onestop/index.twig');