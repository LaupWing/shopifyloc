<?php 
   get_header()
?>
<div class="h-screen-minus-nav flex border-b border-black">
   <div class="flex flex-1">
      <img 
         class="object-cover" 
         src="<?php echo get_the_post_thumbnail_url() ?>" 
         alt="shopify work station"
      >
   </div>
   <div class="w-[40%] flex-shrink-0 border-l border-black flex p-10">
      <div class="max-w-sm w-full flex flex-col">
         <h2 class="italic text-3xl font-semibold text-slate-900">Lorem ipsum dolor</h2>
         <div class="h-0.5 w-1/2 mt-2 mb-10 bg-emerald-500">
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id in cupiditate porro velit ullam nisi ipsum aliquid autem omnis officiis ipsa ducimus odit numquam accusamus corporis, veniam sed magni. Explicabo.</p>
         <div class="flex mt-4 gap-2">
            <button class="px-4 py-1.5 shadow bg-emerald-600 rounded uppercase text-slate-50 text-sm font-bold">
               Contact me
            </button>
            <button class="px-4 py-1.5 bg-slate-50 border-2 border-emerald-600 rounded uppercase text-emerald-600 text-sm font-bold">
               About
            </button>
         </div>
      </div>
   </div>
</div>

<div class="mt-16 mx-auto flex flex-col w-full max-w-5xl">
   <h2 class="text-3xl ml-2">Recent Blogs</h2>
   <div class="h-0.5 w-24 mt-2 bg-emerald-500 ml-2"></div>
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
            <li class="flex flex-col p-2 hover:border-black border border-transparent">
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
                           <div class="px-2 py-0.5 bg-white/20 backdrop-blur rounded text-emerald-500 text-xs uppercase font-bold">
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
                  <h2 class="font-bold text-emerald-500 my-2"><?php the_title() ?></h2>
                  <p class="text-sm mb-2"><?php echo get_the_excerpt() ?></p>
                  <p class="mt-auto font-bold text-slate-400 text-xs uppercase"><?php echo get_the_date() ?></p>
               </a>
            </li>
      <?php 
            }
         }
      ?>
   </ul>
   <button class="px-4 py-1.5 mt-6 mr-auto shadow bg-emerald-600 rounded uppercase text-slate-50 text-sm font-bold ml-2">
      See more posts
   </button>
</div>

<div class="mt-16 mx-auto flex flex-col w-full max-w-5xl">
   <h2 class="text-3xl ml-2">Recent Projects</h2>
   <div class="h-0.5 w-24 mt-2 bg-emerald-500 ml-2"></div>
   <ul class="mt-6 grid grid-cols-2 gap-2">
      <?php 
         $homepagePosts = new WP_Query(array(
            "posts_per_page" => 2
         ));
         if(have_posts()){
            while($homepagePosts->have_posts()){
               $homepagePosts->the_post();
               
               $index = $homepagePosts->current_post;
         
      ?>
            <li class="flex flex-col p-2 hover:border-black border border-transparent">
               <div class="relative">
                  <div class="p-2 flex gap-2 absolute top-0 left-0">
                     <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                           foreach($posttags as $tag) {
                     ?>
                        <div class="px-2 py-0.5 bg-white/20 backdrop-blur rounded text-emerald-500 text-xs uppercase font-bold">
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
               <h2 class="font-bold text-emerald-500 my-2"><?php the_title() ?></h2>
               <p class="text-sm mb-2"><?php echo get_the_excerpt() ?></p>
               <p class="mt-auto font-bold text-slate-400 text-xs uppercase"><?php echo get_the_date() ?></p>
            </li>
      <?php 
            }
         }
      ?>
   </ul>
   <button class="px-4 py-1.5 mt-6 mr-auto shadow bg-emerald-600 rounded uppercase text-slate-50 text-sm font-bold ml-2">
      See more projects
   </button>
</div>

<?php 
   get_footer()
?>