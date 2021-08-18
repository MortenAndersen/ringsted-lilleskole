<?php
get_header(); ?>
<video id="background-video" autoplay loop muted poster="/wp-content/uploads/2021/06/ringsted-parallax.jpg">
  <source src="<?php echo get_theme_file_uri(); ?>/video/ringsted.mp4" type="video/mp4">
</video>
<?php
get_template_part('template-parts/content/page', 'article');
get_footer();