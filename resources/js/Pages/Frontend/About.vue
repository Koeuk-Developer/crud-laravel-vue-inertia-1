<template>
     <FrontendLayout />

     <Head title="About" />

     <h2>hello {{title}}</h2>
     <h2>hello {{description}}</h2>
</template>
   
   <script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue'
import { Head } from '@inertiajs/vue3'

   defineProps({
        title: String,
        description: String,
   })


   </script>
   
   <style>
   
   </style>