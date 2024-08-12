<template>

     <Head title="products" />
     <FrontendLayout>
          <div v-if="$page.props.flash.message" class="alert alert-primary p-3 bg-red-500 w-50">
               {{ $page.props.flash.message }}
          </div>
          <div class="mt-4 mx-4 ">
               <div class="flex justify-between">
                    <h3>products List</h3>
                    <Link :href="route('products.create')" class="bg-blue-500 text-dark p-3 rounded-md  inline-block">
                    Add products
                    </Link>
               </div>
               <table class="w-full bg-white border border-gray-200 shadow">
                    <thead>
                         <tr>
                              <th class="py-2 px-4 text-left border">ID</th>
                              <th class="py-2 px-4 text-left border">Name</th>
                              <th class="py-2 px-4 text-left border">Price</th>
                              <th class="py-2 px-4 text-left border">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr v-for="(product, index) in products" :key="index">
                              <td class="py-2 px-4 border"> {{ product.id }} </td>
                              <td class="py-2 px-4 border">{{product.name}}</td>
                              <td class="py-2 px-4 border">{{product.price}}$</td>
                              <td class="py-2 px-4 border flex gap-3">
                                   <Link :href="route('products.show', product.id)"
                                        class="px-3 oy-1 bg-slate-600 text-dark p-4 rounded inline-block">
                                   Show
                                   </Link>
                                   <Link :href="route('products.edit', product.id)"
                                        class="bg-green-600 text-dark p-4 rounded  inline-block ">
                                   Edit
                                   </Link>
                                   <button @click="deleteProduct(product.id)"
                                        class="bg-blue-500 text-dark p-4 rounded inline-block">
                                        Delete
                                   </button>
                              </td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </FrontendLayout>

</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link, useForm } from '@inertiajs/vue3';

defineProps({
     products: Array,
});

const form = useForm({});

const deleteProduct = (productId) => {
     if (confirm('Are you sure you want to delete this product?')) {
          form.delete(route('products.destroy', { id: productId }));
     }

}
</script>

<style></style>