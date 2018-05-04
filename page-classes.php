<?php 

/*  Template name: clasesse page */

?>


<?php get_header(); ?>

<div class="classes-wrapper"> 
    <div class="classes-entry">
    <h1>classes</h1>
    <p>Below you can find upcomming classes at Ricardo</p>



    <div>
    <?php 
        $args = array ('post_type' => 'ricarda_classes', 'posts_per_page' => 10); 
        $loop = new WP_Query($args); 

    while ($loop->have_posts()) : $loop->the_post(); 
    the_content(); 

    $meta_box_fields = $meta_box_fields['fields']; 

    // returns the key for the Name fields for each Class 
    $class_name_key = $meta_box_fields[0]['id']; 
    $class_name_value = get_post_meta($post->ID, $class_name_key, true); 

    // returns the key for the instructor field 
    $class_instructor_key = $meta_box_fields[1]['id']; 
    $class_instructor_value = get_post_meta ($post->)ID, $class_instructor_thumbnail_key, true); 

    $class_skill_key = $meta_box_fields['3']['id']; 
    $class_instructor_thumbnail_value = get_post_meta($)