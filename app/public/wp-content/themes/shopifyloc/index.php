<?php 
   get_header()
?>
<div class="py-4 bg-slate-900">
   <div class="mx-auto px-2 flex flex-col w-full max-w-5xl">
      <h2 class="text-white text-2xl">Blogs</h2>
   </div>
</div>
<div class="mx-auto mt-10 flex flex-col w-full max-w-5xl">
   <ul class="grid grid-cols-3 gap-2">
      <?php 
         while(have_posts()){
            the_post();
            get_template_part("templates/cards/blog-card");
      
         }
      ?>
   </ul>
</div>
<div class="mt-10 mx-auto flex flex-col w-full items-center">
   Blogs
</div>

<?php 
   get_footer()
?>