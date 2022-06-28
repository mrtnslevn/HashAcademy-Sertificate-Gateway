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

          <form>
            <div class="grid grid-rows-1 gap-6 mt-4 sm:grid-rows-1">
              <div>
                <label class="text-gray-700 dark:text-gray-200"
                  >Nama Kegiatan</label
                >
                <input
                  v-model="form.title"
                  type="text"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                />
              </div>

              <div>
                <label class="text-gray-700 dark:text-gray-200"
                  >Deskripsi</label
                >
                <textarea
                  type="text"
                  v-model="form.description"
                  class="resize-none block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                >
                </textarea>
              </div>
            </div>

            <div class="flex justify-end mt-6">
              <button
                type="submit"
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600"
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
import { useForm } from "@inertiajs/inertia-vue3";
// import { reactive } from "vue";
// import { Inertia } from "@inertiajs/inertia";
export default {
  components: { AppLayout },

  setup() {
    const form = useForm({
      _method: "PUT",
      title: null,
      description: null,
    });
    return { form };
  },
  methods: {
    submit() {
      this.form.post(route("posts.store"));
    },
  },
};
</script>
