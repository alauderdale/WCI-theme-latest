<?php

//create post types


function create_my_post_types() {

    //add portfolio
    $port_args = array(
      'public' => true,
      'label'  => 'Portfolio Companies',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'portfolio', $port_args );

    //add people
    $people_args = array(
      'public' => true,
      'label'  => 'Team Members',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'person', $people_args );

    //add social links
    $social_args = array(
      'public' => true,
      'label'  => 'Social Links',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'social', $social_args );


    //add teaser
    $teaser_args = array(
      'public' => true,
      'label'  => 'Teaser Banner',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'teaser', $teaser_args );

    
}

add_action( 'init', 'create_my_post_types' );


