<li class="flex flex-col p-2 hover:border-slate-800 border border-transparent">
   <a 
      href="<?php the_permalink() ?>" 
      class="flex flex-col flex-1"
   >
      <div class="relative">
         <div class="p-2 flex gap-2 absolute top-0 left-0">
            <?php
               $posttags = get_the_tags();
               if ($posttags) {
                  foreach($posttags as $tag) {
            ?>
               <div class="px-2 py-0.5 bg-white/20 backdrop-blur rounded text-purple-500 text-xs uppercase font-bold">
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
            alt="Post"
         >
      </div>
      <h2 class="font-bold text-purple-500 my-2"><?php the_title() ?></h2>
      <p class="text-sm mb-2 text-slate-600"><?php echo get_the_excerpt() ?></p>
      <p class="mt-auto font-bold text-slate-400 text-xs uppercase"><?php echo get_the_date() ?></p>
   </a>
</li>