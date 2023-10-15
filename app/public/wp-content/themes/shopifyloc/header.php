<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo("charset") ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
</head>
<body class="bg-slate-50" <?php body_class() ?>>
   <header class="w-full flex h-14 bg-white border-b border-black">
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
      <nav class="border-l border-black flex">
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