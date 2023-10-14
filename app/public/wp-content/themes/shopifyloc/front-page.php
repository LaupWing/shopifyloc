<?php 
   get_header()
?>
<div class="h-[80vh] flex border-b border-black">
   <div class="flex flex-1">
      <img 
         class="object-cover" 
         src="<?php echo get_the_post_thumbnail_url() ?>" 
         alt="shopify work station"
      >
   </div>
   <div class="flex-1 flex-shrink-0 border-l border-black">

   </div>
</div>

<?php 
   get_footer()
?>