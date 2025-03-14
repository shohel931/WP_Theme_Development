<?php 
        if (have_posts()) :
          while (have_posts()) : the_post();
            the_title ('<h1> </h1>');
        ?>
        <div class="blog_area">
          <div class="post_thumb">
          <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?></a>
           
          </div>
         <div class="post_details">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><i class="fa-regular fa-calendar-days"></i> ygsduyuiy7y 78</p>
        <?php the_content(); ?>
            
          </div> 
       
        </div>
        <?php
        endwhile;
        else :
          _e('No Post Found');
        endif; ?>
      <div id="page_nav">
        <?php if ('sohel_pagenav') {sohel_pagenav();} else{ ?>
        <?php next_posts_link();  ?>
        <?php previous_post_link();  ?>

      <?php } ?>
      </div>
