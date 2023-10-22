<?php 
   get_header()
?>
<div class="mx-auto mt-10 flex w-full max-w-5xl gap-10">
   <div class="flex-1">
      <h2 class="uppercase text-2xl font-semibold tracking-wider">About <span class="text-emerald-500">me</span></h2>
      <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea mollitia totam sunt, numquam molestiae aliquam amet quos expedita ullam autem nihil error, sint eveniet suscipit natus, debitis labore omnis excepturi.</p>
   </div>
   <div class="flex-1 relative">
      <img 
         src="https://th.bing.com/th/id/R.0dd78ca1e36ba07444782afa89a6e467?rik=J9NBKLDqBMj4tg&pid=ImgRaw&r=0" 
         class="object-cover"
         alt="profile photo"
      >
      <div class="w-24 h-24 absolute bottom-0 left-0 bg-slate-50 rounded-full transform -translate-x-1/3 translate-y-1/3 flex items-center justify-center">
         <div class="w-20 h-20 bg-emerald-500 rounded-full flex items-center justify-center">
            <?php 
               $custom_class = "w-12 h-12 text-white";
               get_template_part("templates/icons/certified" , null, array(
                  "custom_class" => $custom_class
               ))
            ?>
         </div>
      </div>
   </div>
</div>
<?php 
   get_footer()
?>