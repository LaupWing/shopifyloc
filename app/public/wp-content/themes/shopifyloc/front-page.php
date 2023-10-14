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
      <div class="max-w-sm w-full flex flex-col">
         <h2 class="italic text-3xl font-semibold text-slate-900">Lorem ipsum dolor</h2>
         <div class="h-0.5 w-1/2 my-1 bg-emerald-500">
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id in cupiditate porro velit ullam nisi ipsum aliquid autem omnis officiis ipsa ducimus odit numquam accusamus corporis, veniam sed magni. Explicabo.</p>
      </div>
   </div>
</div>

<div class="mt-16 mx-auto flex flex-col w-full max-w-5xl">
   <h2 class="text-3xl">Recent Blogs</h2>
   <ul class="mt-6 grid grid-cols-3 gap-2">
      <?php 
         $homepagePosts = new WP_Query(array(
            "posts_per_page" => 5
         ));
         if(have_posts()){
            while($homepagePosts->have_posts()){
               $homepagePosts->the_post();
               
               $index = $homepagePosts->current_post;
         
      ?>
            <li class="border-black border flex flex-col p-2">
               <img 
                  class="aspect-video object-cover" 
                  src="<?php echo get_the_post_thumbnail_url() ?>" 
                  alt="Post"
               >
               <h2 class="font-bold text-emerald-500 my-2"><?php the_title() ?></h2>
               <p class="text-sm"><?php echo get_the_excerpt() ?></p>
            </li>
      <?php 
            }
         }
      ?>
   </ul>
</div>

<?php 
   get_footer()
?>