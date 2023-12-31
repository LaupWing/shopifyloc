   <footer class="py-16 bg-purple-800 mt-auto">
      <div class="mx-auto flex flex-col w-full max-w-5xl sm:px-2 px-4">
         <div class="flex gap-4">
            <button class="text-purple-50 hover:scale-110 duration-200">
               <?php get_template_part("templates/icons/social-instagram")?>
            </button>
            <button  class="text-purple-50 hover:scale-110 duration-200">
               <?php get_template_part("templates/icons/social-twitter")?>
            </button>
            <button  class="text-purple-50 hover:scale-110 duration-200">
               <?php get_template_part("templates/icons/social-youtube")?>
            </button>
            <button  class="text-purple-50 hover:scale-110 duration-200">
               <?php get_template_part("templates/icons/social-facebook")?>
            </button>
         </div>
         <div class="flex flex-col gap-4 my-10 text-purple-400">
            <h3 class="uppercase font-bold text-sm">Subscribe</h3>
            <p>Subscribe to my newsletter to get regular content not published on my site.</p>
            <div class="flex gap-2 sm:flex-row flex-col">
               <input 
                  type="text" 
                  class="bg-purple-100 px-3 sm:w-60 w-full font-semibold rounded-[2px] py-1.5 border-none"
                  placeholder="Enter your email address"
               >
               <button class="px-4 py-1.5 shadow bg-purple-600 rounded uppercase text-slate-50 text-sm font-bold">
                  Join my newsletter
               </button>
            </div>
         </div>
         <div class="flex flex-col">
            <p class="text-sm text-purple-400">© 2023 ShopifyLoc. All Rights Reserved.</p>
         </div>
      </div>
   </footer>

   <?php wp_footer(); ?>
   </body>
</html>