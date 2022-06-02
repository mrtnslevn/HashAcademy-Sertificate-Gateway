<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
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
            class="text-lg font-semibold text-gray-700 capitalize dark:text-white"
          >
            Data Pemilik
          </h2>

          <form>
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
              <div>
                <label class="text-gray-700 dark:text-gray-200" for="username"
                  >Nama Lengkap</label
                >
                <input
                  id="name"
                  type="text"
                  class="input input-bordered w-full max-w-lg block mt-2 dark:bg-gray-800"
                />
              </div>

              <div>
                <label
                  class="text-gray-700 dark:text-gray-200"
                  for="emailAddress"
                  >kode unik</label
                >
                <input
                  id="uniqueCode"
                  type="text"
                  class="input input-bordered w-full max-w-lg block mt-2 dark:bg-gray-800"
                />
              </div>

              <div>
                <label class="text-gray-700 dark:text-gray-200" for="password"
                  >Kegiatan</label
                >
                <select
                  class="select select-bordered w-full max-w-lg block mt-2 dark:bg-gray-800"
                >
                  <option disabled selected>pilih nama kegiatan</option>
                  <option>Homer</option>
                  <option>Marge</option>
                  <option>Bart</option>
                  <option>Lisa</option>
                  <option>Maggie</option>
                </select>
              </div>

              <div>
                <label
                  class="text-gray-700 dark:text-gray-200"
                  for="passwordConfirmation"
                  >Password Confirmation</label
                >
                <input
                  id="uniqueCode"
                  type="text"
                  class="input input-bordered w-full max-w-lg block mt-2 dark:bg-gray-800"
                />
              </div>
            </div>

            <div class="flex justify-end mt-6">
              <button
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600"
              >
                Save
              </button>
            </div>
          </form>
        </section>
      </div></AppLayout
    >
  </div>
</template>
