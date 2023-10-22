<?php 
   get_header()
?>
<div class="py-6 -mt-1 bg-slate-900 z-50">
   <div class="mx-auto px-2 flex flex-col w-full max-w-5xl">
      <h2 class="text-slate-100 text-4xl">Projects</h2>
      <p class="text-slate-500 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   </div>
</div>
<div class="mx-auto mt-10 flex flex-col w-full max-w-5xl">
   <ul class="grid grid-cols-2 gap-2">
      <?php 
         $homepagePosts = new WP_Query(array(
            "category__in" => array(get_cat_ID("projects"))
         ));
         if(have_posts()){
            while($homepagePosts->have_posts()){
               $homepagePosts->the_post();
               
               $index = $homepagePosts->current_post;
               get_template_part("templates/cards/blog-card");
            }
            wp_reset_postdata();
         }
      ?>
   </ul>
</div>
<?php 
   get_footer()
?>