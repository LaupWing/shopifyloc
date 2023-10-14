<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo("charset") ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
</head>
<body class="bg-slate-50" <?php body_class() ?>>
   <header class="w-full flex bg-white border-b border-black">
      <h1 class="p-4">ShopifyLoc</h1>
      <nav class="border-x border-black flex">
         <ul class="flex">
            <li class="font-semibold bg-slate-900 text-slate-50 tracking-wider w-24 text-xs uppercase text-center flex items-center justify-center border-black border-r">Home</li>
            <li class="font-semibold tracking-wider w-24 text-xs uppercase text-center flex items-center justify-center border-black border-r">Blog</li>
            <li class="font-semibold tracking-wider w-24 text-xs uppercase text-center flex items-center justify-center border-black border-r">About</li>
            <li class="font-semibold tracking-wider w-24 text-xs uppercase text-center flex items-center justify-center">Contact</li>
         </ul>
      </nav>
   </header>