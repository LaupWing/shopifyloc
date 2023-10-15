<?php 
   get_header()
?>
<div class="mt-10 mx-auto flex flex-col w-full max-w-5xl">
   <div class="mx-auto text-center max-w-3xl flex flex-col">
      <span class="mb-2 font-semibold text-slate-400"><?php echo get_the_date() ?></span>
      <h2 class="font-bold text-3xl"><?php the_title() ?></h2>
      <p class="my-6"><?php echo get_the_excerpt() ?></p>
      <div class="relative flex">
         <div class="flex w-full mx-auto absolute gap-4 top-0 p-4 flex-1 justify-center items-center">
            <?php
               $posttags = get_the_tags();
               if ($posttags) {
                  foreach($posttags as $tag) {
            ?>
               <div class="px-2 py-0.5 bg-white/40 backdrop-blur rounded text-emerald-800 text-xs uppercase font-bold">
                  <?php echo $tag->name ?>
               </div>
            <?php 
                  }
               }
            ?>
         </div>
         <img 
            class="aspect-video object-cover"
            src="<?php echo get_the_post_thumbnail_url() ?>" 
            alt="<?php echo get_the_post_thumbnail_caption()?>"
         >
      </div>
   </div>
</div>

<?php 
   get_footer()
?>