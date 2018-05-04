<?php 
/* Template name: Two-column sidebar (right) tempate */
    get_header(); 
?> 

<div class="main-content-width-wrapper">
<div class="index-entry">
    <h1>
    <?php echo get_the_title() ?> 
    </h1>

<man class="main-content">
    <?php 
// start the loop
    if (have_posts()) : 
        while (have_posts()) : 
            the_post(); 
            the_content();
        endwhile; 
    endif;  
    ?>
</main>
</div>
<?php get_sidebar('main-sidebar'); ?> 
</div>

<?php get_footer(); ?> 