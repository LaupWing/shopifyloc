<?php 
   get_header()
?>
<div class="h-screen-minus-nav relative flex border-b border-black">
   <div class="flex flex-1">
      <img 
         class="object-cover" 
         src="<?php echo get_the_post_thumbnail_url() ?>" 
         alt="shopify work station"
      >
   </div>
   <div class="hidden sm:flex w-[40%] flex-shrink-0 border-l border-black p-10">
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
   <div class="w-[80%] sm:hidden shadow right-4 bottom-10 bg-white absolute flex-shrink-0 border border-black flex p-10">
      <div class="max-w-sm w-full flex flex-col">
         <h2 class="italic text-xl font-semibold text-slate-900">Lorem ipsum dolor</h2>
         <div class="h-0.5 w-1/2 mt-2 mb-4 bg-emerald-500">
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
         $custom_query = new WP_Query(array(
            "category__not_in" => array(get_cat_ID("projects")),
            "posts_per_page" => 6
         ));
         
         if ( $custom_query->have_posts() ) {
            while ( $custom_query->have_posts() ) {
               $custom_query->the_post();
               get_template_part( "templates/cards/blog-card" );
            }
            wp_reset_postdata();
         }
      ?>
   </ul>
   <button class="px-4 py-1.5 mt-6 mr-auto shadow bg-emerald-600 rounded uppercase text-slate-50 text-sm font-bold ml-2">
      See more posts
   </button>
</div>

<div class="my-16 mx-auto flex flex-col w-full max-w-5xl">
   <h2 class="text-3xl ml-2">Recent Projects</h2>
   <div class="h-0.5 w-24 mt-2 bg-emerald-500 ml-2"></div>
   <ul class="mt-6 grid grid-cols-2 gap-2">
      <?php 
         $homepagePosts = new WP_Query(array(
            "category__in" => array(get_cat_ID("projects")),
            "posts_per_page" => 2
         ));
         if(have_posts()){
            while($homepagePosts->have_posts()){
               $homepagePosts->the_post();
               
               $index = $homepagePosts->current_post;
               get_template_part("templates/cards/blog-card");
            }
            wp_reset_postdata();
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