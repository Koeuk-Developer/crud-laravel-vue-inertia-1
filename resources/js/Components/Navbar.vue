<template>
     <div class="container m-5">
          <nav class="navbar flex justify-between p-5 rounded-md bg-gray-200">
               <div>
                    <h1 class="text-3xl font-bold">My Website</h1>
               </div>
               <div>
                    <ul class="flex gap-x-4 me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                              <Link class="nav-link active text-danger btn bg-dark" aria-current="page"
                                   :href="route('products.index')">Product
                              </Link>
                         </li>
                         <li class="nav-item">
                              <Link class="nav-link active text-danger btn bg-dark" aria-current="page"
                                   :href="route('myhome')">Home
                              </Link>
                         </li>
                         <li class="nav-item">
                              <Link class="nav-link active text-danger" aria-current="page" :href="route('about')">About
                              </Link>
                         </li>
                         <li class="nav-item">
                              <Link class="nav-link active text-danger" aria-current="page" :href="route('contacts')">
                              Contact </Link>
                         </li>
                    </ul>
               </div>
          </nav>
     </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<style></style>