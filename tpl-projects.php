<?php
/*
Template Name: Projects Page
*/
?>
<?php get_header(); ?>

<?php get_template_part( '/templates/page/page-header' ); ?>

<div class="page-content padding-small" id="home-container">
  <div class="container">
    <div class="row">
      <div class="md-column col-md-8">
        <?php get_template_part( '/templates/blog/posts-loop-projects' ); ?>
      </div>

      <div class="md-column col-side col-md-4 col-side">
        <?php dynamic_sidebar('sidebar-blog'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>