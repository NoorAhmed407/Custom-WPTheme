<?php get_header(); ?>

<secction class="page-wrap">
<div class="container">
   <h1> 
     <?php the_title();?> 
   </h1>

   <?php get_template_part('includes/section', 'content');?>



</div>
</secction>


<?php get_footer(); ?>
