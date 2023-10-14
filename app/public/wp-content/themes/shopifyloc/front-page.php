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
         <h2 class="italic text-3xl font-semibold text-slate-900">Lorem ipsum dolor</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id in cupiditate porro velit ullam nisi ipsum aliquid autem omnis officiis ipsa ducimus odit numquam accusamus corporis, veniam sed magni. Explicabo.</p>
      </div>
   </div>
</div>

<div class="mt-16 mx-auto flex flex-col w-full max-w-4xl">
   <h2 class="text-3xl">Recent Blogs</h2>
   <ul class="mt-6 grid grid-cols-3 gap-4">
      <li class="p-2 bg-red-100"></li>
      <li class="p-2 bg-red-100"></li>
      <li class="p-2 bg-red-100"></li>
   </ul>
</div>

<?php 
   get_footer()
?>