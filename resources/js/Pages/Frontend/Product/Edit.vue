<template>

     <Head title="Edit Product" />
     <FrontendLayout>

          <div v-if="$page.props.flash.message" class="alert">
               {{ $page.props.flash.message }}
          </div>1

          <div class="mt-4 mx-4 ">
               <div class="flex justify-between">
                    <h3> Edit Product</h3>
                    <Link :href="route('products.index')" class="bg-danger-500 text-dark p-3 rounded-md  inline-block">
                    Back
                    </Link>
               </div>
               <form @submit.prevent="UpdateProduct()">
                    <div class="grid grid-cols-12 gap-4">
                         <div class="col-span-6">
                              <div class="mb-3">
                                   <label for="">name</label>
                                   <input type="text" v-model="form.name" class="py-2 w-full">
                                   <div class="text-red-500 " v-if="errors.name">{{ errors.name }}</div>
                              </div>
                              <div class="mb-3">
                                   <label for="">name</label>
                                   <input type="number" v-model="form.price" class="py-2 w-full">
                                   <div class="text-red-500 " v-if="errors.price">{{ errors.price }}</div>
                              </div>
                              <Link :href="route('products.index')"
                                   class="bg-danger-500 text-dark p-3 rounded-md  inline-block">
                              Back
                              </Link>
                              <button type="submit" class="bg-gray-400 text-white p-4">Update</button>
                         </div>
                    </div>
               </form>
          </div>
     </FrontendLayout>

</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
     errors: Object,
     product: Object
})
const form = useForm({
     name: props.product.name,
     price: props.product.price,
});

const UpdateProduct = () => {
     const res = form.put(route('products.update', props.product.id)); //
     if (res) {
          form.reset();
     }
}
</script>

<style></style>