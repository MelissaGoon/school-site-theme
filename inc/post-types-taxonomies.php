<?php
function school_register_custom_post_types()
{
    // Staff CPT
    $labels = array(
        'name'                  => _x('Staff', 'Post Type General Name', 'school-site-theme'),
        'singular_name'         => _x('Staff', 'Post Type Singular Name', 'school-site-theme'),
        'menu_name'             => __('Staff', 'school-site-theme'),
        'name_admin_bar'        => __('Staff', 'school-site-theme'),
        'archives'              => __('Staff Archives', 'school-site-theme'),
        'attributes'            => __('Staff Attributes', 'school-site-theme'),
        'parent_item_colon'     => __('Parent Item:', 'school-site-theme'),
        'all_items'             => __('All Staff', 'school-site-theme'),
        'add_new_item'          => __('Add New Staff Member', 'school-site-theme'),
        'add_new'               => __('Add New', 'school-site-theme'),
        'new_item'              => __('New Staff Member', 'school-site-theme'),
        'edit_item'             => __('Edit Staff Member', 'school-site-theme'),
        'update_item'           => __('Update Staff Member', 'school-site-theme'),
        'view_item'             => __('View Staff Member', 'school-site-theme'),
        'view_items'            => __('View Staff Members', 'school-site-theme'),
        'search_items'          => __('Search Staff Member', 'school-site-theme'),
        'not_found'             => __('Not found', 'school-site-theme'),
        'not_found_in_trash'    => __('Not found in Trash', 'school-site-theme'),
        'featured_image'        => __('Profile Image', 'school-site-theme'),
        'set_featured_image'    => __('Set profile image', 'school-site-theme'),
        'remove_featured_image' => __('Remove profile image', 'school-site-theme'),
        'use_featured_image'    => __('Use as profile image', 'school-site-theme'),
        'insert_into_item'      => __('Insert into Staff Profile', 'school-site-theme'),
        'uploaded_to_this_item' => __('Uploaded to this Staff Profile', 'school-site-theme'),
        'items_list'            => __('Staff Member list', 'school-site-theme'),
        'items_list_navigation' => __('Staff Member list navigation', 'school-site-theme'),
        'filter_items_list'     => __('Filter Staff Member list', 'school-site-theme'),
    );


    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'staff'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'template' => array(
            array(
                'core/paragraph',
                array(
                    'placeholder' => 'Add Job Title',
                    'className' => 'staff-job-title',
                )
            ),
            array(
                'core/paragraph',
                array(
                    'placeholder' => 'Add Email',
                    'className' => 'staff-email',
                )
            ),
        ),
        'template_lock'      => 'contentOnly'
    );

    register_post_type('fwd-school-staff', $args);

    // STUDENT CPT

    $labels = array(
    'name'                  => _x('Students', 'Post Type General Name', 'school-site-theme'),
    'singular_name'         => _x('Student', 'Post Type Singular Name', 'school-site-theme'),
    'menu_name'             => __('Students', 'school-site-theme'),
    'name_admin_bar'        => __('Student', 'school-site-theme'),
    'add_new'               => __('Add New', 'school-site-theme'),
    'add_new_item'          => __('Add New Student', 'school-site-theme'),
    'edit_item'             => __('Edit Student', 'school-site-theme'),
    'new_item'              => __('New Student', 'school-site-theme'),
    'view_item'             => __('View Student', 'school-site-theme'),
    'search_items'          => __('Search Students', 'school-site-theme'),
    'not_found'             => __('No Students found', 'school-site-theme'),
    'not_found_in_trash'    => __('No Students found in Trash', 'school-site-theme'),
    'parent_item_colon'     => __('Parent Student:', 'school-site-theme'),
    'all_items'             => __('All Students', 'school-site-theme'),
    'archives'              => __('Student Archives', 'school-site-theme'),
    'attributes'            => __('Student Attributes', 'school-site-theme'),
    'insert_into_item'      => __('Insert into Student', 'school-site-theme'),
    'uploaded_to_this_item' => __('Uploaded to this Student', 'school-site-theme'),
    'featured_image'        => __('Student Featured Image', 'school-site-theme'),
    'set_featured_image'    => __('Set Student Featured Image', 'school-site-theme'),
    'remove_featured_image' => __('Remove Student Featured Image', 'school-site-theme'),
    'use_featured_image'    => __('Use as Featured Image', 'school-site-theme'),
    'items_list'            => __('Students list', 'school-site-theme'),
    'items_list_navigation' => __('Students list navigation', 'school-site-theme'),
    'filter_items_list'     => __('Filter Students list', 'school-site-theme'),
);
 
     $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_nav_menus'  => true,
    'show_in_admin_bar'  => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'students'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-welcome-learn-more',
    'supports'           => array('title','editor','thumbnail'),'template' => array(
            array('core/paragraph', array(
                'placeholder' => 'Add short bio...',
                'className' => 'student-short-bio',
            )),
            array('core/button', array(
                'text' => 'View Portfolio',
                'className' => 'student-portfolio-button',
            )),
        ),
        'template_lock'      => 'all', 
    );
        register_post_type( 'fwd-school-student', $args );
}

add_action('init', 'school_register_custom_post_types');


function school_register_taxonomies()
{
    // Staff Deparment Taxonomy
    $labels = array(
        'name' => _x('Departments', 'taxonomy general name', 'school-site-theme'),
        'singular_name' => _x('Department', 'taxonomy singular name', 'school-site-theme'),
        'search_items' => __('Search Departments', 'school-site-theme'),
        'all_items' => __('All Departments', 'school-site-theme'),
        'parent_item' => __('Parent Department', 'school-site-theme'),
        'parent_item_colon' => __('Parent Department:', 'school-site-theme'),
        'edit_item' => __('Edit Department', 'school-site-theme'),
        'view_item' => __('View Department', 'school-site-theme'),
        'update_item' => __('Update Department', 'school-site-theme'),
        'add_new_item' => __('Add New Department', 'school-site-theme'),
        'new_item_name' => __('New Department Name', 'school-site-theme'),
        'template_name' => __('Department Archives', 'school-site-theme'),
        'menu_name' => __('Department', 'school-site-theme'),
        'not_found' => __('No departments found.', 'school-site-theme'),
        'no_terms' => __('No departments', 'school-site-theme'),
        'items_list_navigation' => __('Departments list navigation', 'school-site-theme'),
        'items_list' => __('departments list', 'school-site-theme'),
        'item_link' => __('Department Link', 'school-site-theme'),
        'item_link_description' => __('A link to a department.', 'school-site-theme'),
    );

    // Hierarchical for ui reasons
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menu' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'departments'),
        'capabilities' => array(
            'manage_terms' => 'do_not_allow',
            'edit_terms'   => 'do_not_allow',
            'delete_terms' => 'do_not_allow',
            'assign_terms' => 'edit_posts',
        ),
    );
    register_taxonomy('fwd-staff-department', array('fwd-school-staff'), $args);


    // Student Taxonomy
     $labels = array(
        'name'              => _x('Programs', 'taxonomy general name', 'school-site-theme'),
        'singular_name'     => _x('Program', 'taxonomy singular name', 'school-site-theme'),
        'search_items'      => __('Search Programs', 'school-site-theme'),
        'all_items'         => __('All Programs', 'school-site-theme'),
        'parent_item'       => __('Parent Program', 'school-site-theme'),
        'parent_item_colon' => __('Parent Program:', 'school-site-theme'),
        'edit_item'         => __('Edit Program', 'school-site-theme'),
        'update_item'       => __('Update Program', 'school-site-theme'),
        'add_new_item'      => __('Add New Program', 'school-site-theme'),
        'new_item_name'     => __('New Program Name', 'school-site-theme'),
        'menu_name'         => __('Programs', 'school-site-theme'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menus' => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'programs'),
    );

    register_taxonomy('fwd-student-program', array('fwd-school-student'), $args);
}
add_action('init', 'school_register_taxonomies');
