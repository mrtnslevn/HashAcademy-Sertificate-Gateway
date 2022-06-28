<template lang="">
  <div>
    <AppLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-slate-300 leading-tight">
          Sertifikat Baru
        </h2>
      </template>

      <div class="py-12">
        <section class="max-w-4xl p-6 mx-auto rounded-md shadow-md">
          <h2
            class="text-lg font-semibold text-gray-700 capitalize dark:text-white mb-5"
          >
            Data Pemilik
          </h2>

          <form @submit.prevent="submit">
            <div class="relative z-0 w-full mb-6 group">
              <input
                v-model="form.Nama_Peserta"
                type="text"
                name="Nama_Peserta"
                id="Nama_Peserta"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                required=""
              />
              <label
                for="Nama_Peserta"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                >Nama Peserta</label
              >
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
              <div class="relative z-0 w-full mb-6 group">
                <input
                  v-model="form.Nama_Kegiatan"
                  type="text"
                  name="Nama_Kegiatan"
                  id="Nama_Kegiatan"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  required=""
                />
                <label
                  for="Nama_Kegiatan"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                  >Nama Kegiatan</label
                >
              </div>
              <div class="relative z-0 w-full mb-6 group">
                <input
                  type="text"
                  v-model="form.kode_unik"
                  name="kode_unik"
                  id="kode_unik"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  required=""
                />
                <label
                  for="floating_kode_unik"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                  >unique code</label
                >
              </div>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
              <div class="relative z-0 w-full mb-6 group">
                <input
                  v-model="form.sertifikat_path"
                  type="text"
                  name="floating_Asal_Sekolah"
                  id="sertifikat_path"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                />
                <label
                  for="floating_Asal_Sekolah"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                  >Company (Ex. Google)</label
                >
              </div>
              <!-- <div class="relative z-0 w-full mb-6 group">
                <input
                  type="file"
                  class="rounded-md dark:text-white focus:border-blue-500"
                  name=""
                  id=""
                />
              </div> -->
            </div>
            <div class="flex justify-end">
              <button
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Submit
              </button>
            </div>
          </form>
        </section>
      </div>
    </AppLayout>
  </div>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
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
        Nama_Peserta: null,
        Nama_Kegiatan: null,
        kode_unik: null,
        sertifikat_path: null,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.post(route("sertifikat.store"), this.form);
    },
  },
};
</script>
