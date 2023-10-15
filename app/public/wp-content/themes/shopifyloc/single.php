<?php 
   get_header()
?>
<div class="mt-16 mx-auto flex flex-col w-full max-w-5xl">
   <div class="mx-auto text-center max-w-3xl flex flex-col">
      <span class="mb-2 font-semibold text-slate-400"><?php echo get_the_date() ?></span>
      <h2 class="font-bold text-3xl"><?php the_title() ?></h2>
      <img 
         class="aspect-video object-cover mt-4"
         src="<?php echo get_the_post_thumbnail_url() ?>" 
         alt="<?php echo get_the_post_thumbnail_caption()?>"
      >
   </div>
</div>

<?php 
   get_footer()
?>