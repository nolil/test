
<?php  get_header(); ?>


<main>
   <div class="container">
      <div class="row">
         
         <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
               <div class="posts">
                  <?php the_post();?>
                  <div class="post-title">
                     <h2 id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                           <?php the_title(); ?>
                        </a>
                     </h2>
                     <small><?php the_time('F jS, Y') ?>  by <?php the_author(); ?> </small>
                  </div>
               
                  <div class="entry">
                     <?php the_content('Read the rest of this entry &raquo;'); ?>
                  </div>
               </div>
            <?php endwhile; ?>
         <?php endif; ?>
         
      </div>
   </div>         
   <?php get_sidebar(); ?>
</main>


<?php get_footer(); ?>