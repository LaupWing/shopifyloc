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
   <div class="flex-1 flex-shrink-0 border-l border-black flex items-center justify-center">
      <div class="max-w-sm w-full">
         <h2 class="italic text-2xl font-semibold text-slate-900">Lorem ipsum dolor</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id in cupiditate porro velit ullam nisi ipsum aliquid autem omnis officiis ipsa ducimus odit numquam accusamus corporis, veniam sed magni. Explicabo.</p>
      </div>
   </div>
</div>

<?php 
   get_footer()
?>