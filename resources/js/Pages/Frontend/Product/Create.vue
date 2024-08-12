<template>

     <Head title="Create Product" />
     <FrontendLayout>

          <div v-if="$page.props.flash.message" class="alert">
               {{ $page.props.flash.message }}
          </div>

          <div class="mt-4 mx-4 ">
               <div class="flex justify-between">
                    <h3> Create Product</h3>
                    <Link :href="route('products.index')" class="bg-danger-500 text-dark p-3 rounded-md  inline-block">
                    Back
                    </Link>
               </div>
               <form @submit.prevent="saveProduct()">
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
                              <button type="submit" :disabled="form.processing"  class="bg-gray-400 text-white p-4">
                                   <span v-if="form.processing">Uploading...</span>
                                  <span v-else>Save</span> </button>
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

defineProps({
     errors: Object
})
const form = useForm({
     name: '',
     price: '',
});

const saveProduct = () => {
     const res = form.post(route('products.store')); //
     if (res) {
          form.reset();
     }
}
</script>

<style></style>