<template lang="">
  <div>
    <AppLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-slate-300 leading-tight">
          Kegiatan Baru
        </h2>
      </template>

      <!-- start create -->
      <div class="py-12">
        <section
          class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800"
        >
          <h2
            class="text-lg font-semibold text-gray-700 capitalize dark:text-white"
          >
            Daftar Kegiatan baru
          </h2>

          <form @submit.prevent="submit">
            <div class="grid grid-rows-1 gap-6 mt-4 sm:grid-rows-1">
              <div>
                <label for="nama" class="text-gray-700 dark:text-gray-200"
                  >Nama Kegiatan</label
                >
                <input
                  id="nama"
                  v-model="form.nama"
                  type="text"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                />
                <div
                  v-if="errors.nama"
                  class="p-4 my-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                  role="alert"
                >
                  <span class="font-medium">Alert!</span>
                  {{ errors.nama }}
                </div>
              </div>

              <div>
                <label class="text-gray-700 dark:text-gray-200"
                  >Deskripsi</label
                >
                <textarea
                  id="deskripsi"
                  v-model="form.deskripsi"
                  type="text"
                  class="resize-none block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                >
                </textarea>
              </div>
            </div>

            <div class="flex justify-end mt-6">
              <Link
                :href="route('kegiatan.index')"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
              >
                Batal
              </Link>
              <button
                type="submit"
                class="flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
              >
                Simpan
              </button>
            </div>
          </form>
        </section>
      </div>
      <!-- end create -->
    </AppLayout>
  </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm, Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    AppLayout,
    Link,
  },
  props: { errors: Object },
  data() {
    return {
      form: {
        nama: null,
        deskripsi: null,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.post(route("kegiatan.store"), this.form);
    },
  },
};
</script>
