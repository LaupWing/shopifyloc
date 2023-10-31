<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo("charset") ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
</head>
<body class="bg-slate-950 min-h-screen flex flex-col" <?php body_class() ?>>
   <header class="w-full hidden sm:flex h-14 bg-slate-950 border-b border-sky-200">
      <h1 class="px-4 flex text-purple-500 text-lg items-center">
         <?php 
            $custom_class = "w-5 h-5 text-emerald-500 mr-1";
            get_template_part("templates/icons/logo" , null, array(
               "custom_class" => $custom_class
            ))
         ?>
         <i>
            <strong>Shopify</strong>Loc
         </i>
      </h1>
      <nav id="desktop" class="border-l border-sky-200 flex text-sky-900">
         <?php
            wp_nav_menu([
               "theme_location" => "headerMenuLocation"
            ]);
         ?>
      </nav>
      <div class="ml-auto flex items-center border-l border-black px-6">
         <?php 
            $custom_class = "w-5 h-5 text-slate-800";
            get_template_part("templates/icons/search" , null, array(
               "custom_class" => $custom_class
            ))
         ?>
      </div>
   </header>
   <header class="w-full sm:hidden flex h-14 bg-white border-b border-black">
      <button 
         class="mr-auto flex items-center border-r border-black px-6"
         id="menu"
      >
         <?php 
            $custom_class = "w-5 h-5 text-slate-800";
            get_template_part("templates/icons/menu" , null, array(
               "custom_class" => $custom_class
            ))
         ?>
      </button>
      <h1 class="px-4 flex text-slate-800 text-lg items-center">
         <?php 
            $custom_class = "w-5 h-5 text-emerald-500 mr-1";
            get_template_part("templates/icons/logo" , null, array(
               "custom_class" => $custom_class
            ))
         ?>
         <i>
            <strong>Shopify</strong>Loc
         </i>
      </h1>
      <div class="ml-auto flex items-center border-l border-black px-6">
         <?php 
            $custom_class = "w-5 h-5 text-slate-800";
            get_template_part("templates/icons/search" , null, array(
               "custom_class" => $custom_class
            ))
         ?>
      </div>
   </header>

   <nav
      id="mobile"
      class="fixed duration-300 inset-0 bg-white z-[100] border-r-2 border-black"
      data-open="false"
      style="transform: translateX(-100%);"
   >
      <div class="flex flex-col px-6 pt-16 pb-10">
         <button 
            class="ml-auto"
            id="close"
         >
            <?php get_template_part(
               "templates/icons/close",
               null,
               array(
                  "custom_class" => "mr-4 w-6 h-6"
               )
            ) ?>
         </button>
         <div>
            <h1 class="flex text-slate-800 text-lg items-center">
               <?php 
                  $custom_class = "w-5 h-5 text-emerald-500 mr-1";
                  get_template_part("templates/icons/logo" , null, array(
                     "custom_class" => $custom_class
                  ))
               ?>
               <i>
                  <strong>Shopify</strong>Loc
               </i>
            </h1>
         </div>
         <div>
            <?php
               wp_nav_menu([
                  "theme_location" => "headerMenuLocation"
               ]);
            ?>
         </div>
      </div>
   </nav>