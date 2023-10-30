<?php 
   get_header()
?>
<div class="py-6 -mt-1 bg-slate-900 z-50">
   <div class="mx-auto px-2 flex flex-col w-full max-w-5xl">
      <h2 class="text-slate-100 text-4xl">Projects</h2>
      <p class="text-slate-500 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
   </div>
</div>
<div class="mx-auto my-16 flex flex-col w-full max-w-5xl">
   <ul class="grid grid-cols-2 gap-2">
      <?php 
         $current_page = get_post();
         $parent_page_slug = $current_page->post_name;
         
         $parent_page = get_page_by_path($parent_page_slug);
         $query = new WP_Query(array(
            "post_type" => "page",
            "post_status" => "publish",
            "posts_per_page" => -1,
            "post_parent" => $parent_page->ID
         ));
         
         if($query->have_posts()){
            while($query->have_posts()){
               $query->the_post();
               
               $index = $query->current_post;
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