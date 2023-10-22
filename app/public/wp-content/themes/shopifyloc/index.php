<?php 
   get_header()
?>
<div class="py-6 -mt-1 bg-slate-900 z-50">
   <div class="mx-auto px-2 flex flex-col w-full max-w-5xl">
      <h2 class="text-slate-100 text-4xl">Blogs</h2>
      <p class="text-slate-500 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   </div>
</div>
<div class="mx-auto my-10 flex flex-col w-full max-w-5xl">
   <ul class="grid grid-cols-3 gap-2">
      <?php 
         $args = array(
            "category__not_in" => array( get_cat_ID("projects"))
         );
         
         $custom_query = new WP_Query( $args );
         
         if ( $custom_query->have_posts() ) {
            while ( $custom_query->have_posts() ) {
               $custom_query->the_post();
               get_template_part( "templates/cards/blog-card" );
            }
            wp_reset_postdata();
         }
      ?>
   </ul>
</div>
<?php 
   get_footer()
?>