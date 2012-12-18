<?php get_header(); ?>

<!-- BEGIN PAGE.PHP -->
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 class="page-title"><?php the_title(); ?></h2>
<div class="entry">
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
</div>
<?php endwhile; endif; ?>
<?php edit_post_link('edit','<div class="edit">[',']</div>'); ?>

<?php comments_template(); ?>
</div>
<!-- END PAGE.PHP -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
