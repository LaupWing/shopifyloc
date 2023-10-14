   <footer class="py-16 mt-10 bg-emerald-800">
      <div class="mx-auto flex flex-col w-full max-w-5xl">
         <div class="flex gap-4">
            <button class="text-emerald-50 hover:scale-110 duration-200">
               <?php get_template_part("templates/icons/social-instagram")?>
            </button>
            <button  class="text-emerald-50 hover:scale-110 duration-200">
               <?php get_template_part("templates/icons/social-twitter")?>
            </button>
            <button  class="text-emerald-50 hover:scale-110 duration-200">
               <?php get_template_part("templates/icons/social-youtube")?>
            </button>
            <button  class="text-emerald-50 hover:scale-110 duration-200">
               <?php get_template_part("templates/icons/social-facebook")?>
            </button>
         </div>
         <div class="flex flex-col gap-2 my-10 text-emerald-400">
            <h3 class="uppercase font-bold text-sm">Subscribe</h3>
            <p>Subscribe to my newsletter to get regular content not published on my site.</p>
            <div class="flex gap-2">
               <input 
                  type="text" 
                  class="bg-emerald-100 px-3 w-60 font-semibold rounded-[2px] py-1.5 border-none"
                  placeholder="Enter your email address"
               >
               <button class="px-4 py-1.5 shadow bg-emerald-600 rounded uppercase text-slate-50 text-sm font-bold">
                  Contact me
               </button>
            </div>
         </div>
      </div>
   </footer>

   <?php wp_footer(); ?>
   </body>
</html>