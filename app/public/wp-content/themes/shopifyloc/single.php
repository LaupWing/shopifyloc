<?php 
   get_header()
?>
<div class="mt-16 mx-auto flex flex-col w-full max-w-5xl">
   <div class="mx-auto text-center max-w-3xl flex flex-col">
      <span class="mb-2 font-bold text-slate-500"><?php echo get_the_date() ?></span>
      <h2 class="font-bold text-3xl"><?php the_title() ?></h2>
   </div>
</div>

<?php 
   get_footer()
?>