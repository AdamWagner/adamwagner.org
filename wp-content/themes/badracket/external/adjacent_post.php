<?php
/*
Plugin Name: Next Post
Plugin URI: http://adampatterson.ca
Description: Provides shortcodes and template tags for next/previous navigation in custom post types.
Version: 1
License: GPLv2
Author: Adam Patterson
Author URI: http://adampatterson.ca
*/

// make the magic happen
function flatten_post_list($exclude = '') {
    global $post, $wpdb;

    if ( empty( $post ) )
        return null;

    //  Get the list of post types. Default to current post type
    if ( empty($post_type) )
        $post_type = "'$post->post_type'";

   $args = 'sort_column=menu_order&sort_order=asc&posts_per_page=100&post_type='.$post_type;
   $postlist = get_posts($args);
   $myposts = array();

   if (!empty($exclude)) {
       $excludes = split(',', $exclude);
       foreach ($postlist as $thispost) {
           if (!in_array($thispost->ID, $excludes)) {
               $myposts[] += $thispost->ID;
           }
       }
   }
   else {
       foreach ($postlist as $thispost) {
           $myposts[] += $thispost->ID;
       }
   }
   return $myposts;
}

function get_next_custom_post() {
    global $post;
    $options = get_option('next_post');
    $exclude = $options['exclude'];
    $postlist = flatten_post_list($exclude);
    $current = array_search($post->ID, $postlist);
    $nextID = $postlist[$current+1];
    
    if (!isset($nextID)) 
        if ($options['loop'])
            $nextID = $postlist[0];
        else 
            return '';
    
    $before_link = stripslashes($options['before_next_link']);
    $linkurl = get_permalink($nextID);
    return $linkurl;
} 

function get_previous_custom_post() {
    global $post;
    $options = get_option('next_post');
    $exclude = $options['exclude'];
    $postlist = flatten_post_list($exclude);

    $current = array_search($post->ID, $postlist);

    $prevID = $postlist[$current-1];

    if (!isset($prevID))
        if ($options['loop'])
            $prevID = $postlist[count($postlist) - 1];
        else 
            return '';
        
    $before_link = stripslashes($options['before_prev_link']);
    $linkurl = get_permalink($prevID);

    return $linkurl;
} 

function next_custom_post() {
    echo get_next_custom_post();
}
function previous_custom_post() {
    echo get_previous_custom_post();
}


?>