<?php 
/*
Template part for displaying posts
*/
?>
<article id="post-<?php the_ID(); ?>">
   <header class="entry-header">
    <?php 
    the_title( '<h2 class="entry-title"><a href="'.esc_url(get_permalink()).'">','</a></h2>' );
    ?>
   </header>
   <?php 
     if(has_post_thumbnail()) :
        the_post_thumbnail('large'); // large, custom, full, medium.
     endif;
    ?>
   <div class="entry-content">
     <?php 
      the_content(  );
     ?>
   </div>

    <footer class="entry-footer default-max-width">

    </footer>

</article>