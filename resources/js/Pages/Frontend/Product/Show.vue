<template>

     <Head title="show Product" />
     <FrontendLayout>
          <div class="card w-25 mt-4 mx-4 ">
               <div class="flex justify-between">
                    <h3> show Product</h3>
                    <Link :href="route('products.index')" class="bg-danger-500 text-dark p-3 rounded-md  inline-block">
                    Back
                    </Link>
               </div>
               <h2>Name : {{product.name}}</h2>
               <h2>Price :{{product.price}} $</h2>
          </div>
     </FrontendLayout>

</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
     product: Object
})
</script>

<style></style>