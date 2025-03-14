
<?php 
/*
* This Template displaying archive pages
*/  
get_header(); ?>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
       <?php 
        the_archive_title('<h2 class="archive_title">','</h2>');
        the_archive_description('<div class="archive_descrivtion">','</div>');
 
      ?>


    <?php get_template_part('template_part/post_setup'); ?>
      </div>
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
</section>

<?php get_footer(); ?>