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
         while(have_posts()){
            the_post();
            get_template_part("templates/cards/blog-card");
      
         }
      ?>
   </ul>
</div>
<?php 
   get_footer()
?>